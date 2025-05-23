@extends('layouts.app')

@section('content')
<div class="bg-gray-900 min-h-screen p-6 text-white">
    <h1 class="text-2xl font-bold mb-4">Your Applications</h1>

    @forelse($applications as $application)
        <div class="bg-gray-800 p-4 rounded-lg mb-4">
            <h2 class="text-xl font-semibold">{{ $application->business_name }}</h2>
            <p>{{ $application->business_type }} | {{ $application->business_duration }} | {{ $application->business_location }}</p>
            <p class="mt-2 text-sm text-gray-400">{{ $application->business_description }}</p>
            <p class="mt-2 text-sm">Amount Requested: <strong>{{ number_format($application->requested_amount, 2) }} BDT</strong></p>
            <p class="text-sm">Equity Offered: {{ $application->equity_percentage }}%</p>
            <p class="text-sm mt-2">Payment: <span class="text-yellow-400">{{ ucfirst($application->payment_status) }}</span></p>
            <p class="text-sm">Status: <span class="text-green-400">{{ ucfirst($application->status) }}</span></p>
        </div>
    @empty
        <p class="text-gray-400">You have not submitted any applications yet.</p>
    @endforelse
</div>
@endsection
