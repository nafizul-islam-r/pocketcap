<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestorProfileController extends Controller
{

    public function index()
    {
        // $profiles = \App\Models\InvestorProfile::all();
        // if (Auth::hasRole('admin')) {
        //     return view('investor_profiles.index', compact('profiles'));
        // }
        // else if (Auth::hasRole('investor')) {
        //     return view('investor_profiles.show', [
        //         'profiles' => \App\Models\InvestorProfile::where('user_id', Auth::id())->get(),
        //     ]);
        // }
        // if (Auth::hasRole('') && Auth::id() !== $profiles->user_id) {
        //     return view('investor_profiles.create');
        // }
        return view('investor_profiles.index', [
            'profiles' => \App\Models\InvestorProfile::where('user_id', Auth::id())->get(),
        ]);
    }

    public function create()
    {
        // $cprofiles = \App\Models\CandidateProfile::where('user_id', Auth::id())->first();
        // $iprofiles = \App\Models\InvestorProfile::where('user_id', Auth::id())->first();
        // if (Auth::hasRole('investor') || Auth::hasRole('admin') || Auth::hasRole('candidate')) {
        //     abort(403, 'Unauthorized access');
        // }
        // if (Auth::hasRole('') && Auth::id() !== $cprofiles->user_id && Auth::id() !== $iprofiles->user_id) {
        //     return view('candidate_profiles.create');
        // } else {
        //     abort(403, 'Unauthorized access');
        // }
        return view('investor_profiles.create');
    }

    public function store(Request $request)
    {
        // 1. Validate all the fields
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:investor_profiles,email',
            'dob' => 'required|date',
            'profession' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'business_interest' => 'required|string|max:255',
            'nid_passport_number' => 'required|string|max:50|unique:investor_profiles,nid_passport_number',
            'nid_passport_photo' => 'required|file|max:2048|mimes:jpg,jpeg,png,pdf',
            'bank_statement_pdf' => 'required|file|max:2048|mimes:jpg,jpeg,png,pdf',
        ]);

        // 2. Handle file uploads
        $validated['nid_passport_photo'] = $request
            ->file('nid_passport_photo')
            ->store('uploads/nid_photos', 'public');
        $validated['bank_statement_pdf'] = $request
            ->file('bank_statement_pdf')
            ->store('uploads/bank_statements', 'public');

        // 3. Attach the authenticated user & default status
        $validated['user_id'] = Auth::id();
        $validated['status'] = 'pending';


        // 4. Create the record
        \App\Models\InvestorProfile::create($validated);

        // 5. Redirect with a success message
        return redirect()->route('dashboard')
            ->with('success', 'Your investor application has been submitted and is pending approval.');

    }

    public function show(string $id)
    {
        $profile = \App\Models\InvestorProfile::findOrFail($id);
        // if (Auth::hasRole('admin') || Auth::id() === $profile->user_id) {
        //     return view('investor_profiles.show');
        // } else {
        //     abort(403, 'Unauthorized access');
        // }
        return view('investor_profiles.show', compact('profile'));
    }

    public function destroy(string $id)
    {
        $profile = \App\Models\InvestorProfile::findOrFail($id);
        // if (Auth::hasRole('admin')) {
        //     $profile->delete();
        //     return redirect()->route('investor_profiles.index')->with('success', 'Profile deleted successfully.');
        // } else {
        //     abort(403, 'Unauthorized access');
        // }
        $profile->delete();
        return redirect()->route('investor_profiles.index')->with('success', 'Profile deleted successfully.');
    }
}
