@extends('layouts.app')

@section('content')
<div class="bg-gray-900 min-h-screen py-10 px-4">
    <div class="max-w-3xl mx-auto bg-gray-800 rounded-lg shadow p-8">
        <h2 class="text-2xl font-bold text-white mb-6">Invest in Candidate</h2>

        <div class="mb-6">
            <h4 class="text-sm text-gray-400">Business Name</h4>
            <p class="text-lg font-medium text-white">{{ $application->business_name }}</p>

            <h4 class="text-sm text-gray-400 mt-4">Business Description</h4>
            <p class="text-white">{{ $application->business_description }}</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div>
                    <h4 class="text-sm text-gray-400">Requested Amount</h4>
                    <p class="text-white">{{ number_format($application->requested_amount, 2) }} BDT</p>
                </div>
                <div>
                    <h4 class="text-sm text-gray-400">Equity Offered</h4>
                    <p class="text-white">{{ $application->equity_percentage }}%</p>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('investments.store') }}" class="space-y-6">
            @csrf
            <input type="hidden" name="application_id" value="{{ $application->id }}">

            <div>
                <label for="amount_invested" class="block text-sm font-medium text-gray-300">Amount to Invest (BDT)</label>
                <input type="number" step="0.01" name="amount_invested" id="amount_invested"
                    class="mt-1 w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600"
                    required>
            </div>

            <div id="feeDisplay" class="text-sm text-gray-400"></div>

            <button type="submit"
                class="w-full mt-4 py-3 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Confirm Investment
            </button>
        </form>
    </div>
</div>

<script>
    const amountInput = document.getElementById('amount_invested');
    const feeDisplay = document.getElementById('feeDisplay');

    amountInput.addEventListener('input', () => {
        const value = parseFloat(amountInput.value);
        let fee = 0;

        if (value <= 20000) {
            fee = value * 0.03;
        } else if (value <= 50000) {
            fee = value * 0.04;
        } else {
            fee = value * 0.05;
        }

        if (!isNaN(fee)) {
            feeDisplay.innerText = `Platform Fee: ${fee.toFixed(2)} BDT (auto-calculated)`;
        } else {
            feeDisplay.innerText = '';
        }
    });
</script>
@endsection
