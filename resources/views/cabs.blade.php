@extends('Layouts.app') @section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Our Cabs/Taxi</h2>
        <div class="grid md:grid-cols-3 gap-10">
            @foreach ($cabs as $cab)
                <div class="bg-white rounded-xl shadow">
                    <img
                        src="{{ asset('Uploads/Cabs/' . $cab->image) }}" alt="{{ $cab->name }}" class="w-full object-cover rounded-lg mb-4"
                    />
                    <div class="p-6">
                        <h3 class="text-xl font-bold">{{ $cab->name }}</h3>
                        <p class="text-black">{{ $cab->type }}</p>
                        <p class="text-gray-500">{{ $cab->seats }} Seater</p>
                        <p class="text-lg font-bold text-yellow-500">
                            Starting at {{ $cab->price }}/KM
                        </p>
                        <a
                            href="{{ route('booking') }}"
                            class="bg-yellow-500 text-white px-4 py-2 rounded-lg inline-block mt-4"
                        >
                            Book Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
