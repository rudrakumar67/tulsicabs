@extends('Layouts.app') 
@section('content')
<!-- Hero Section -->
<section class="bg-yellow-400">
    <div
        class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center"
    >
        <div>
            <h2 class="text-5xl font-bold mb-6">
                Reliable Taxi Service in Jamnagar
            </h2>

            <p class="text-lg mb-6">
                Book safe and affordable taxi services for airport, outstation
                and local travel. Experienced drivers and comfortable cars. in Jamnagar. Book safe and affordable rides with us.
            </p>

            <div class="flex gap-4">
                <a
                    href="{{ route('booking') }}"
                    class="bg-black text-white px-6 py-3 rounded-lg"
                >
                    Book Taxi
                </a>

                <a href="tel:{{ $settings->phone_number }}" class="border border-black px-6 py-3 rounded-lg">
                    Call Now
                </a>
            </div>
        </div>

        <!-- Booking Card -->

        <div class="bg-white p-8 rounded-xl shadow-xl">
            <img src="{{ asset('banner.jpeg') }}" alt="{{ $settings->site_name }}" style="width:100%; height:auto;">
        </div>
    </div>
</section>
<!-- Services -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-14">Our Taxi Services</h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
            @foreach ($services as $service)
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg text-center">
                    <img src="{{ asset('Uploads/Services/' . $service->image) }}" alt="{{ $service->name }}" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold">{{ $service->name }}</h3>
                    <p>{{ $service->description }}</p>
                    <a href="{{ route('booking') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg inline-block mt-4">Book Now</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Cabs Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Our Cabs</h2>
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
<!-- Gallery -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Our Gallery</h2>
        <p class="text-center text-gray-500 mb-12 max-w-2xl mx-auto">
            Take a look at our well maintained taxis and travel moments with
            Tulsi Cabs in Jamnagar.
        </p>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($galleries as $gallery)
            <div class="overflow-hidden rounded-xl">
                <img
                    src="{{ asset('Uploads/Gallery/' . $gallery->image) }}" alt="{{ $gallery->name }}" class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Why Choose Us -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10 text-center">
        <div>
            <i
                class="fa-solid fa-shield-halved text-4xl text-yellow-500 mb-4"
            ></i>
            <h3 class="font-bold text-xl mb-2">Safe Travel</h3>
            <p>Professional drivers and well maintained cars.</p>
        </div>

        <div>
            <i class="fa-solid fa-wallet text-4xl text-yellow-500 mb-4"></i>
            <h3 class="font-bold text-xl mb-2">Affordable Price</h3>
            <p>Transparent and budget friendly fares.</p>
        </div>

        <div>
            <i class="fa-solid fa-headset text-4xl text-yellow-500 mb-4"></i>
            <h3 class="font-bold text-xl mb-2">24/7 Support</h3>
            <p>Always available for your travel needs.</p>
        </div>
    </div>
</section>
@endsection
