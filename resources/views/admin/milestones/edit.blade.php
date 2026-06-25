@extends('admin.layout.app')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h3>Edit Milestone</h3>

                    <form action="{{ route('admin.milestones.update', $milestone->id) }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label>Title</label>

                            <input type="text"
                                name="title"
                                value="{{ $milestone->title }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Year</label>

                            <input type="number"
                                name="year"
                                value="{{ $milestone->year }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Description</label>

                            <textarea name="description"
                                class="form-control">{{ $milestone->description }}</textarea>
                        </div>

                        <button class="btn btn-primary">
                            Update
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection