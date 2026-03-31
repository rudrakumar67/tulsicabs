@extends('Layouts.Admin')
@section('title', 'Booking Enquiry')
@section('content')
    <div class="card bg-light mb-3">
        <div class="card-body">
            <h5 class="card-title">Booking Enquiry</h5>
            <p class="card-text">List of all booking enquiries</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Pickup Location</th>
                            <th>Dropoff Location</th>
                            <th>Service</th>
                            <th>Cab/Taxi</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>{{ $booking->pickup_location }}</td>
                                <td>{{ $booking->dropoff_location }}</td>
                                <td>{{ $booking->service }}</td>
                                <td>{{ $booking->cab }}</td>
                                <td>{{ $booking->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
@endsection