@extends('Layouts.app') @section('content')
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-14">Our Taxi Services</h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <h3 class="font-bold">One Way Taxi</h3>
                <p class="text-gray-500 mt-2">Affordable single trip taxi.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <h3 class="font-bold">Outstation Taxi</h3>
                <p class="text-gray-500 mt-2">Travel across cities.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <h3 class="font-bold">Airport Taxi</h3>
                <p class="text-gray-500 mt-2">Airport pickup & drop.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <h3 class="font-bold">Rental Taxi</h3>
                <p class="text-gray-500 mt-2">Full day taxi rental.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <h3 class="font-bold">Marriage Taxi</h3>
                <p class="text-gray-500 mt-2">Luxury wedding taxis.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <h3 class="font-bold">Tourist Taxi</h3>
                <p class="text-gray-500 mt-2">
                    Explore Gujarat with our tourist taxis.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <h3 class="font-bold">Corporate Taxi</h3>
                <p class="text-gray-500 mt-2">Business travel solutions.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow text-center">
                <h3 class="font-bold">Hourly Taxi</h3>
                <p class="text-gray-500 mt-2">Flexible hourly packages.</p>
            </div>
        </div>
    </div>
</section>
@endsection
