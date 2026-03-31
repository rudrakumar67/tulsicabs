@extends('Layouts.Admin')
@section('title','Edit Cab')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Cab</h5>
                    @if(session('errors'))
                        <div class="alert alert-danger">
                            {{ session('errors') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.cabs.update', $cab->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $cab->name }}">
                        </div>
                        <div class="mb-2">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ $cab->type }}">
                        </div>
                        <div class="mb-2">
                            <label for="seating_capacity" class="form-label">Seating Capacity</label>
                            <input type="text" class="form-control" id="seating_capacity" name="seating_capacity" value="{{ $cab->seating_capacity }}">
                        </div>
                        <div class="mb-2">
                            <label for="price" class="form-label">Price (Per KM)</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $cab->price }}">
                        </div>
                        <div class="mb-2">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection