<<<<<<< HEAD

=======
>>>>>>> 872928e592ebd845e80765f967c6875a0ee06adf

@section('content')
<div class="bg-gray-900 min-h-screen p-6 text-white">
    <h1 class="text-2xl font-bold mb-6">Submit a New Funding Application</h1>

    <form action="{{ route('applications.store') }}" method="POST" class="space-y-4">
        @csrf

        <input name="business_name" type="text" placeholder="Business Name" class="w-full p-3 rounded bg-gray-800 text-white" required>
        <input name="business_type" type="text" placeholder="Business Type (e.g., LLC)" class="w-full p-3 rounded bg-gray-800 text-white" required>
        <textarea name="business_description" rows="4" placeholder="Business Description" class="w-full p-3 rounded bg-gray-800 text-white" required></textarea>
        <input name="business_duration" type="text" placeholder="Business Duration (e.g., 2 years)" class="w-full p-3 rounded bg-gray-800 text-white" required>
        <input name="business_location" type="text" placeholder="Business Location" class="w-full p-3 rounded bg-gray-800 text-white" required>
        <input name="requested_amount" type="number" step="0.01" placeholder="Requested Amount (BDT)" class="w-full p-3 rounded bg-gray-800 text-white" required>
        <input name="equity_percentage" type="number" step="0.01" placeholder="Equity Offered (%)" class="w-full p-3 rounded bg-gray-800 text-white" required>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
            Submit Application
        </button>
    </form>
</div>
@endsection
