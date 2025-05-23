@extends('layouts.app')

@section('content')
<div class="bg-gray-900 min-h-screen p-6 text-white">
    <h1 class="text-2xl font-bold mb-4">Your Investments</h1>

    @forelse($investments as $investment)
        <div class="bg-gray-800 p-4 rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Invested in: {{ $investment->application->business_name }}</h2>
            <p class="text-sm text-gray-400">Location: {{ $investment->application->business_location }}</p>
            <p class="text-sm mt-2">Amount: {{ number_format($investment->amount_invested, 2) }} BDT</p>
            <p class="text-sm">Platform Fee: {{ number_format($investment->platform_fee, 2) }} BDT</p>
            <p class="text-sm">Payment Status: <span class="text-yellow-400">{{ ucfirst($investment->payment_status) }}</span></p>
        </div>
    @empty
        <p class="text-gray-400">You haven’t made any investments yet.</p>
    @endforelse
</div>
@endsection
