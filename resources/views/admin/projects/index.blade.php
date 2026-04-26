@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="card-title mb-0">Projects</h4>

                        <a type="button" class="btn btn-primary" href="{{ route('admin.projects.create') }}">
                            Add Project
                        </a>
                    </div>
                    <p class="card-description">Add edit projects/portfolio</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Project Location</th>
                                    <th>Website</th>
                                    <th>Established On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->project_name}}</td>
                                    <td>{{$project->project_location}}</td>
                                    <td>{{$project->website}}</td>
                                    <td>{{$project->established_date}}</td>
                                    <td><a class="btn btn-outline-primary" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
                                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Are you sure you want to delete this project?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <nav>
                        {{ $projects->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection