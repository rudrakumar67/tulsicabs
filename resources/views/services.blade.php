@extends('Layouts.app') @section('content')
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-14">Our Taxi Services</h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-3 gap-8">
            @foreach ($services as $service)
                <div class="bg-white p-6 rounded-xl shadow text-left">
                    <img src="{{ asset('Uploads/Services/' . $service->image) }}" alt="{{ $service->name }}" class="w-full object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-left">{{ $service->name }}</h3>
                    <p class="text-left">{{ $service->description }}</p>
                    <p class="text-left">{{ $service->price }}/KM</p>
                    <a href="{{ route('booking') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg inline-block mt-4">Book Now</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
