@extends('Layouts.app') 
@section('content')
<section class="py-20">

<div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12">

<div>

<h2 class="text-3xl font-bold mb-6">
Contact Us
</h2>

<p> <i class="fas fa-map-marker-alt"></i> Jamnagar, Gujarat</p>
<p> <i class="fas fa-phone"></i> +91 9876543210</p>
<p> <i class="fas fa-envelope"></i> info@tulsicabs.com</p>

</div>

<div>

<iframe class="w-full h-80 rounded"
src="https://maps.google.com/maps?q=jamnagar&t=&z=13&ie=UTF8&iwloc=&output=embed">
</iframe>

</div>

</div>

</section>
@endsection