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
    public function create(Application $application)
    {
        // Only investors, and only for available applications
        if (!Auth::user()->hasRole('investor') || $application->status !== 'available') {
            abort(403);
        }

        return view('investments.create', compact('application'));
    }

    public function store(Request $request, Application $application)
    {
        if (!Auth::user()->hasRole('investor') || $application->status !== 'available') {
            abort(403);
        }

        $validated = $request->validate([
            'amount_invested' => 'required|numeric|min:1',
        ]);

        // 💸 Platform fee logic
        $amount = $validated['amount_invested'];
        $feePercentage = match (true) {
            $amount <= 20000 => 3,
            $amount <= 50000 => 4,
            default => 5,
        };

        $platform_fee = round(($amount * $feePercentage) / 100, 2);

        Investment::create([
            'user_id' => Auth::id(),
            'application_id' => $application->id,
            'amount_invested' => $amount,
            'platform_fee' => $platform_fee,
            'payment_status' => 'unpaid', // simulated for now
        ]);

        return redirect()->route('investments.index')->with('success', 'Investment recorded. Please complete payment later.');
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
