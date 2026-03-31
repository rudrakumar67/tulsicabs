@extends('Layouts.admin')
@section('title','Cabs')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Cabs</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Seating Capacity</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cabs as $cab)
                                    <tr style="vertical-align: middle;">
                                        <td>{{ $cab->name }}</td>
                                        <td>{{ $cab->type }}</td>
                                        <td>{{ $cab->seating_capacity }}</td>
                                        <td>{{ $cab->price }}</td>
                                        <td><img src="{{ asset('Uploads/Cabs/' . $cab->image) }}" alt="" width="100" style="border-radius:5px"></td>
                                        <td><span class="badge bg-{{ $cab->status == 1 ? 'success' : 'danger' }}">{{ $cab->status == 1 ? 'Active' : 'Inactive' }}</span></td>
                                        <td>
                                            <a href="{{ route('admin.cabs.edit', $cab->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('admin.cabs.delete', $cab->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this cab?')">Delete</a>
                                            @if($cab->status == 1)
                                                <a href="{{ route('admin.cabs.status', $cab->id) }}" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure you want to deactivate this cab?')">Deactivate</a>
                                            @else
                                                <a href="{{ route('admin.cabs.status', $cab->id) }}" class="btn btn-sm btn-success" onclick="return confirm('Are you sure you want to activate this cab?')">Activate</a>
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
    </div>
@endsection