@extends('Layouts.Admin')
@section('title', 'Services')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Services</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr style="vertical-align: middle;">
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $service->price }}</td>
                                    <td><img src="{{ asset('Uploads/Services/' . $service->image) }}" alt="" width="100" style="border-radius:5px"></td>
                                    <td>
                                        @if($service->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{ route('admin.service.delete', $service->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</a>
                                        @if($service->status == 1)
                                            <a href="{{ route('admin.service.status', $service->id) }}" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure you want to deactivate this service?')">Deactivate</a>
                                        @else
                                            <a href="{{ route('admin.service.status', $service->id) }}" class="btn btn-sm btn-success" onclick="return confirm('Are you sure you want to activate this service?')">Activate</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection