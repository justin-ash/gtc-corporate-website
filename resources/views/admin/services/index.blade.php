@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="card-title mb-0">Services</h4>

                        <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">Add</a>
                    </div>
                    <p class="card-description">Add services here</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($services as $service)

                                <td><i class="fa {{ $service->icon }}"></i></td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->is_active ? 'Active' : 'Inactive' }}</td>
                                <td><a class="btn btn-outline-primary" href="{{route('admin.services.edit', $service->id)}}">Edit</a></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <br>
                    <nav>
                        {{ $services->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection