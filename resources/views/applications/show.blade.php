@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-gray-800 p-6 rounded-xl shadow-md text-white">
    <h2 class="text-2xl font-bold mb-4">Your Application</h2>

    <ul class="space-y-2 text-gray-300">
        <li><strong>Business Name:</strong> {{ $application->business_name }}</li>
        <li><strong>Type:</strong> {{ $application->business_type }}</li>
        <li><strong>Description:</strong> {{ $application->business_description }}</li>
        <li><strong>Duration:</strong> {{ $application->business_duration }}</li>
        <li><strong>Location:</strong> {{ $application->business_location }}</li>
        <li><strong>Requested Amount:</strong> ৳{{ number_format($application->requested_amount, 2) }}</li>
        <li><strong>Equity Offered:</strong> {{ $application->equity_percentage }}%</li>
        <li><strong>Payment Status:</strong> <span class="font-semibold">{{ $application->payment_status }}</span></li>
        <li><strong>Status:</strong> <span class="font-semibold">{{ $application->status }}</span></li>
    </ul>
</div>
@endsection
