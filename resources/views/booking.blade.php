@extends('Layouts.app') @section('content')
<section class="py-20 bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white p-10 rounded-xl shadow">
        <h2 class="text-3xl font-bold mb-6 text-center">Book Your Taxi</h2>

        <form class="space-y-4">
            <input
                type="text"
                placeholder="Full Name"
                class="w-full border p-3 rounded"
            />

            <input
                type="tel"
                placeholder="Phone Number"
                class="w-full border p-3 rounded"
            />

            <input
                type="text"
                placeholder="Pickup Location"
                class="w-full border p-3 rounded"
            />

            <input
                type="text"
                placeholder="Drop Location"
                class="w-full border p-3 rounded"
            />

            <select class="w-full border p-3 rounded">
                <option>Select Service</option>
                <option>One Way Taxi</option>
                <option>Airport Taxi</option>
                <option>Outstation Taxi</option>
                <option>Hourly Taxi</option>
            </select>

            <input type="date" class="w-full border p-3 rounded" />

            <button
                class="bg-yellow-500 text-white w-full py-3 rounded font-semibold"
            >
                Book Taxi
            </button>
        </form>
    </div>
</section>
@endsection
