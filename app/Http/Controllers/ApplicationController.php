<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
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
        // Prevent duplicate application
        if (Auth::user()->application) {
            return redirect()->route('applications.show');
        }

        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'business_description' => 'required|string',
            'business_duration' => 'required|string|max:255',
            'business_location' => 'required|string|max:255',
            'requested_amount' => 'required|numeric|min:1',
            'equity_percentage' => 'required|numeric|min:0|max:100',
        ]);

        $application = Application::create([
            'user_id' => Auth::id(),
            'business_name' => $request->business_name,
            'business_type' => $request->business_type,
            'business_description' => $request->business_description,
            'business_duration' => $request->business_duration,
            'business_location' => $request->business_location,
            'requested_amount' => $request->requested_amount,
            'equity_percentage' => $request->equity_percentage,
            'payment_status' => 'unpaid',
            'status' => 'available',
        ]);

        return redirect()->route('applications.show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $application = Auth::user()->application;
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
