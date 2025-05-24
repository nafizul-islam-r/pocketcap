<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investments = Investment::where('user_id', Auth::id())->with('application')->get();
        return view('investments.index', compact('investments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $applicationId)
    {
        $application = Application::findOrFail($applicationId);

        $request->validate([
            'amount_invested' => 'required|numeric|min:1',
        ]);

        $amount = $request->amount_invested;
        $fee = 0;

        if ($amount <= 20000) {
            $fee = $amount * 0.03;
        } elseif ($amount <= 50000) {
            $fee = $amount * 0.04;
        } else {
            $fee = $amount * 0.05;
        }

        Investment::create([
            'user_id' => Auth::id(),
            'application_id' => $application->id,
            'amount_invested' => $amount,
            'platform_fee' => $fee,
            'payment_status' => 'paid',
        ]);

        return redirect()->route('investments.index')->with('success', 'Investment recorded. Please proceed to payment.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Investment $investment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Investment $investment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Investment $investment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Investment $investment)
    {
        //
    }
}
