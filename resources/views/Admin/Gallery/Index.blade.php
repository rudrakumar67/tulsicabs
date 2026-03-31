@extends('Layouts.Admin')
@section('title','Gallery')
@section('content')
<div class="container-fluid">
    <div class="card bg-light shadow-none border">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title fw-semibold mb-0">Gallery</h5>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGalleryModal">
                    <i class="ti ti-plus me-1"></i> Add Gallery
                </button>
            </div>
            
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td>
                                <img src="{{ asset('Uploads/Gallery/' . $gallery->image) }}" alt="{{ $gallery->image }}" class="img-thumbnail" width="100">
                            </td>
                            <td>
                                @if($gallery->status == 1)
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.gallery.status', $gallery->id) }}" class="btn btn-sm btn-{{ $gallery->status == 0 ? 'success' : 'danger' }}">
                                    <i class="ti ti-eye"></i>
                                </a>
                                <a href="{{ route('admin.gallery.delete', $gallery->id) }}" class="btn btn-sm btn-danger">
                                    <i class="ti ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Gallery Modal -->
<div class="modal fade" id="addGalleryModal" tabindex="-1" aria-labelledby="addGalleryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGalleryModalLabel">Add Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection