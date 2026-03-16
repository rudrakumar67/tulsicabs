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
                    href="booking.html"
                    class="bg-black text-white px-6 py-3 rounded-lg"
                >
                    Book Taxi
                </a>

                <a href="#" class="border border-black px-6 py-3 rounded-lg">
                    Call Now
                </a>
            </div>
        </div>

        <!-- Booking Card -->

        <div class="bg-white p-8 rounded-xl shadow-xl">
            <h3 class="text-xl font-bold mb-6">Quick Booking</h3>

            <form class="space-y-4">
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
                <button
                    class="bg-yellow-500 w-full py-3 rounded text-white font-semibold"
                >
                    Enquire Now
                </button>
            </form>
        </div>
    </div>
</section>
<!-- Services -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-14">Our Taxi Services</h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
            <div
                class="bg-white p-6 rounded-xl shadow hover:shadow-lg text-center"
            >
                <i class="fa-solid fa-road text-3xl text-yellow-500 mb-4"></i>
                <h3 class="font-semibold">One Way Taxi</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <i class="fa-solid fa-plane text-3xl text-yellow-500 mb-4"></i>
                <h3>Airport Taxi</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <i class="fa-solid fa-route text-3xl text-yellow-500 mb-4"></i>
                <h3>Outstation Taxi</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <i class="fa-solid fa-clock text-3xl text-yellow-500 mb-4"></i>
                <h3>Hourly Taxi</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <i class="fa-solid fa-car text-3xl text-yellow-500 mb-4"></i>
                <h3>Rental Taxi</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <i class="fa-solid fa-ring text-3xl text-yellow-500 mb-4"></i>
                <h3>Marriage Taxi</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <i
                    class="fa-solid fa-mountain-sun text-3xl text-yellow-500 mb-4"
                ></i>
                <h3>Tourist Taxi</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <i
                    class="fa-solid fa-building text-3xl text-yellow-500 mb-4"
                ></i>
                <h3>Corporate Taxi</h3>
            </div>
        </div>
    </div>
</section>
<!-- Cabs Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Our Cabs</h2>
        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-white rounded-xl shadow">
                <img
                    src="https://images.unsplash.com/photo-1503376780353-7e6692767b70"
                />

                <div class="p-6">
                    <h3 class="text-xl font-bold">Swift Dzire</h3>
                    <p class="text-black">Sedan</p>
                    <p class="text-gray-500">4 Seater</p>
                    <p class="text-lg font-bold text-yellow-500">
                        Starting at 12/KM
                    </p>
                    <a
                        href="{{ route('booking') }}"
                        class="bg-yellow-500 text-white px-4 py-2 rounded-lg inline-block mt-4"
                    >
                        Book Now
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow">
                <img
                    src="https://images.unsplash.com/photo-1503376780353-7e6692767b70"
                />

                <div class="p-6">
                    <h3 class="text-xl font-bold">Honda Amaze</h3>
                    <p class="text-black">Sedan</p>
                    <p class="text-gray-500">4 Seater • AC</p>
                    <p class="text-lg font-bold text-yellow-500">
                        Starting at 12/KM
                    </p>
                    <a
                        href="{{ route('booking') }}"
                        class="bg-yellow-500 text-white px-4 py-2 rounded-lg inline-block mt-4"
                    >
                        Book Now
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow">
                <img
                    src="https://images.unsplash.com/photo-1503376780353-7e6692767b70"
                />

                <div class="p-6">
                    <h3 class="text-xl font-bold">Suzuki Ertiga</h3>
                    <p class="text-black">SUV</p>
                    <p class="text-gray-500">7 Seater</p>
                    <p class="text-lg font-bold text-yellow-500">
                        Starting at 15/KM
                    </p>
                    <a
                        href="{{ route('booking') }}"
                        class="bg-yellow-500 text-white px-4 py-2 rounded-lg inline-block mt-4"
                    >
                        Book Now
                    </a>
                </div>
            </div>
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
            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c"
                    class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>

            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://images.unsplash.com/photo-1503376780353-7e6692767b70"
                    class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>

            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7"
                    class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>

            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7"
                    class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>

            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d"
                    class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>

            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://images.unsplash.com/photo-1485291571150-772bcfc10da5"
                    class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>

            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c"
                    class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>

            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://images.unsplash.com/photo-1504215680853-026ed2a45def"
                    class="w-full h-60 object-cover hover:scale-110 transition duration-500"
                />
            </div>
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
