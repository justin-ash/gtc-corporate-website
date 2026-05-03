@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="card-title mb-0">Banners</h4>
                        <a href="{{ route('admin.banners.create') }}" class="btn btn-primary mb-3">Add Banner</a>
                    </div>
                    <p class="card-description">Manage your banners here</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Main Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($banners as $banner)
                                <tr>
                                    <td>{{ $banner->id }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>{{ $banner->main_title }}</td>
                                    <td>
                                        @if($banner->image)
                                        <img src="{{ asset($banner->image) }}" width="100">
                                        @endif
                                    </td>
                                    <td>{{ $banner->is_active ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="{{ route('admin.banners.edit', $banner) }}">Edit</a>

                                        <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <nav>
                        {{ $banners->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection