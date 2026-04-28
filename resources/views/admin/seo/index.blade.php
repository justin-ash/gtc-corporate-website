@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="card-title mb-0">SEO</h4>

                        <a href="{{ route('admin.seo.create') }}" class="btn btn-primary mb-3">Add</a>
                    </div>
                    <p class="card-description">Add SEO here</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Page</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($seos as $seo)

                                <td>{{ $seo->page }}</td>
                                <td>{{ $seo->meta_title }}</td>
                                <td><a class="btn btn-outline-primary" href="{{route('admin.seo.edit', $seo->id)}}">Edit</a></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <br>
                    <nav>
                        {{ $seos->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection