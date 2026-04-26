@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="card-title mb-0">Widgets</h4>

                        <a href="{{ route('admin.widgets.create') }}" class="btn btn-primary mb-3">Add</a>
                    </div>
                    <p class="card-description">Add widgets here</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($widgets as $w)
                                <tr>
                                    <td>{{ $w->widget_code }}</td>
                                    <td>{{ $w->title }}</td>
                                    <td>{{ $w->is_active ? 'Active' : 'Inactive'}}</td>
                                    <td><a class="btn btn-outline-primary" href="{{route('admin.widgets.edit', $w->id)}}">Edit</a>
                                        <form action="{{ route('admin.widgets.destroy', $w->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Are you sure you want to delete this widget?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                <tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                    <br>
                    <nav>
                        {{ $widgets->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection