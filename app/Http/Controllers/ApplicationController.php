<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ApplicationController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::where('user_id', Auth::id())->get();
        return view('applications.index', compact('applications'));
    }

    // Show form to create new application
    public function create()
    {
        return view('applications.create');
    }

    // Store application
    public function store(Request $request)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'business_description' => 'required|string',
            'business_duration' => 'required|string|max:255',
            'business_location' => 'required|string|max:255',
            'requested_amount' => 'required|numeric',
            'equity_percentage' => 'required|numeric|between:0,100',
        ]);

        Application::create([
            'user_id' => Auth::id(),
            'business_name' => $request->business_name,
            'business_type' => $request->business_type,
            'business_description' => $request->business_description,
            'business_duration' => $request->business_duration,
            'business_location' => $request->business_location,
            'requested_amount' => $request->requested_amount,
            'equity_percentage' => $request->equity_percentage,
            'payment_status' => 'paid',
            'status' => 'available',
        ]);

        return redirect()->route('applications.index')->with('success', 'Application submitted. Please complete payment.');
    }

    // Show a specific application (view-only)
    public function show(Application $application)
    {
        $this->authorize('view', $application);
        return view('applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
