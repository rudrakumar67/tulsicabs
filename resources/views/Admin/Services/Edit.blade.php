@extends('Layouts.admin')

@section('title', 'Edit Service')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Edit Service</h5>
                        @if(session('errors'))
                            <div class="alert alert-danger">
                                {{ session('errors') }}
                            </div>
                        @endif
                        <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Service Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $service->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price (Per KM)</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $service->price }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Service</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
