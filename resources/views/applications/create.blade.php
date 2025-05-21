@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-gray-800 p-6 rounded-xl shadow-md text-white">
    <h2 class="text-2xl font-bold mb-4">Apply for Funding</h2>
    <form action="{{ route('applications.store') }}" method="POST">
        @csrf

        <x-input label="Business Name" name="business_name" required />
        <x-input label="Business Type" name="business_type" required />
        <x-textarea label="Business Description" name="business_description" required />
        <x-input label="Business Duration (e.g., 2 years)" name="business_duration" required />
        <x-input label="Business Location" name="business_location" required />
        <x-input type="number" step="0.01" label="Requested Amount (BDT)" name="requested_amount" required />
        <x-input type="number" step="0.01" label="Equity Percentage (%)" name="equity_percentage" required />

        <button type="submit"
            class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Submit</button>
    </form>
</div>
@endsection
