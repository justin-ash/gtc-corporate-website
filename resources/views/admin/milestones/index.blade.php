@extends('admin.layout.app')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="card-title mb-0">Contacts</h4>
                        <a href="{{ route('admin.milestones.create') }}" class="btn btn-primary mb-3">Add</a>
                    </div>
                    <p class="card-description">List all the enquiry submitted by the users</p>
                    <div class="table-responsive">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($milestones as $milestone)
                                <tr>
                                    <td>{{ $milestone->id }}</td>

                                    <td>{{ $milestone->title }}</td>
                                    <td>{{ $milestone->year }}</td>
                                    <td>
                                        <a href="{{ route('admin.milestones.edit', $milestone->id) }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.milestones.destroy', $milestone->id) }}"
                                            method="POST"
                                            style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Delete this milestone?')">
                                                Delete
                                            </button>
                                        </form>
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
</div>

@endsection