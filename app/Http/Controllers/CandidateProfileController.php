<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $profiles = \App\Models\CandidateProfile::all();
        // if (Auth::hasRole('admin')) {
        //     return view('candidate_profiles.index', compact('profiles'));
        // }
        // else if (Auth::hasRole('candidate')) {
        //     return view('candidate_profiles.show', [
        //         'profiles' => \App\Models\CandidateProfile::where('user_id', Auth::id())->get(),
        //     ]);
        // }
        // if (Auth::hasRole('') && Auth::id() !== $profiles->user_id) {
        //     return view('candidate_profiles.create');
        // }
        return view('candidate_profiles.index', [
            'profiles' => \App\Models\CandidateProfile::where('user_id', Auth::id())->get(),
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
        return view('candidate_profiles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:candidate_profiles,email',
            'dob' => 'required|date',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'profession' => 'required|string',
            'company' => 'required|string|nullable',
            'business_interest' => 'required|string|nullable',
            'nid_passport_number' => 'required|string|unique:candidate_profiles,nid_passport_number',
            'nid_passport_photo' => 'required|file|max:2048|mimes:jpg,jpeg,png,pdf',
        ]);

        // Handle file upload
        $validated['nid_passport_photo'] = $request
            ->file('nid_passport_photo')
            ->store('uploads/nid_photos', 'public');

        $validated['user_id'] = Auth::id();
        $validated['status'] = 'pending';

        \App\Models\CandidateProfile::create($validated);

        return redirect()->route('dashboard')->with('success', 'Candidate profile submitted!');
    }

    public function show(string $id)
    {
        $profile = \App\Models\CandidateProfile::findOrFail($id);
        // if (Auth::hasRole('admin') || Auth::id() === $profile->user_id) {
        //     return view('candidate_profiles.show');
        // } else {
        //     abort(403, 'Unauthorized access');
        // }
        return view('candidate_profiles.show', compact('profile'));
    }

    public function destroy(string $id)
    {
        $profile = \App\Models\CandidateProfile::findOrFail($id);
        // if (Auth::hasRole('admin')) {
        //     $profile->delete();
        //     return redirect()->route('candidate_profiles.index')->with('success', 'Profile deleted successfully.');
        // } else {
        //     abort(403, 'Unauthorized access');
        // }
        $profile->delete();
        return redirect()->route('candidate_profiles.index')->with('success', 'Profile deleted successfully.');
    }
}
