@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h3>Add Milestone</h3>

                    <form action="{{ route('admin.milestones.store') }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3">
                            <label>Title</label>

                            <input type="text"
                                name="title"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Year</label>

                            <input type="number"
                                name="year"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Description</label>

                            <textarea name="description"
                                class="form-control"></textarea>
                        </div>

                        <button class="btn btn-success">
                            Save
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection