@extends('Layouts.admin')
@section('title', 'Add Cab/Taxi')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Add Cab/Taxi</h5>
                    @if(session('errors'))
                        @foreach(session('errors') as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form action="{{ route('admin.cabs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-2">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                        <div class="mb-2">
                            <label for="seating_capacity" class="form-label">Seating Capacity</label>
                            <input type="text" class="form-control" id="seating_capacity" name="seating_capacity">
                        </div>
                        <div class="mb-2">
                            <label for="price" class="form-label">Price (Per KM)</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-2">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="float-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection