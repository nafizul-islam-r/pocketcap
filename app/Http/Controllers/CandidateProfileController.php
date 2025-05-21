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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidate_profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
