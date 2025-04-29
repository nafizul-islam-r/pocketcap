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
        // 1. Validate all the fields
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'dob' => 'required|date',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'profession' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'business_interest' => 'required|string|max:255',
            'nid_passport_number' => 'required|string|max:50|unique:candidate_profiles',
            'nid_passport_photo' => 'required|image|max:2048',
        ]);

        // 2. Handle file upload
        $data['nid_passport_photo'] = $request
            ->file('nid_passport_photo')
            ->store('uploads/nid_photos', 'public');

        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'pending';

        // 4. Create the record
        \App\Models\CandidateProfile::create($data);

        // 5. Redirect with a success message
        return redirect()->route('dashboard')
            ->with('success', 'Your candidate application has been submitted and is pending approval.');
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
