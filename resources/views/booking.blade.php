@extends('Layouts.app') @section('content')
<section class="py-20 bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white p-10 rounded-xl shadow">
        <h2 class="text-3xl font-bold mb-6 text-center">Book Your Taxi</h2>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        @if (session('errors'))
            @foreach (session('errors')->all() as $error)
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative" role="alert">
                    <span class="block sm:inline">{{ $error }}</span>
                </div>
            @endforeach
        @endif
        <form class="space-y-4" action="{{ route('booking.submit') }}" method="POST">
            @csrf
            <input
                type="text"
                placeholder="Full Name"
                class="w-full border p-3 rounded"
                name="name"
                value="{{ old('name') }}"
                required
            />

            <input
                type="tel"
                placeholder="Phone Number"
                class="w-full border p-3 rounded"
                name="phone"
                value="{{ old('phone') }}"
                required
            />

            <input
                type="text"
                placeholder="Pickup Location"
                class="w-full border p-3 rounded"
                name="pickup_location"
                value="{{ old('pickup_location') }}"
                required
            />

            <input
                type="text"
                placeholder="Drop Location"
                class="w-full border p-3 rounded"
                name="dropoff_location"
                value="{{ old('dropoff_location') }}"
                required
            />
            <select class="w-full border p-3 rounded" name="service" required>
                <option>Select Service</option>
                @foreach ($services as $service)
                    <option value="{{ $service->name }}">{{ $service->name }}</option>
                @endforeach
            </select>
            <select class="w-full border p-3 rounded" name="cab" required>
                <option>Select Cab</option>
                @foreach ($cabs as $cab)
                    <option value="{{ $cab->name }}">{{ $cab->name }}</option>
                @endforeach
            </select>
            <input type="date" class="w-full border p-3 rounded" name="date" value="{{ old('date') }}" required/>
            <button
                class="bg-yellow-500 text-white w-full py-3 rounded font-semibold"
            >
                Book Taxi
            </button>
        </form>
    </div>
</section>
@endsection
