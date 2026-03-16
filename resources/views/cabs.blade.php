@extends('Layouts.app') @section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Our Cab Fleet</h2>
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
@endsection
