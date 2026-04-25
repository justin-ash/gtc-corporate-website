@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <h4 class="card-title">GTC Global settings</h4>
                    <p class="card-description"> Update your global settings </p>
                    <form class="forms-sample" method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
                        @csrf
                        @foreach($settings as $setting)
                        <div class="form-group">
                            <label for="exampleInputName1">{{ ucfirst(str_replace('_', ' ', $setting->key)) }}</label>
                            @if($setting->type == 'text')
                            <input
                                type="text"
                                name="{{ $setting->key }}"
                                value="{{ $setting->value }}"
                                class="form-control">
                            @endif
                            @if($setting->type == 'textarea')
                            <textarea
                                name="{{ $setting->key }}"
                                class="form-control">{{ $setting->value }}</textarea>
                            @endif
                            @if($setting->type == 'file')
                            <input type="file" name="{{ $setting->key }}" class="file-upload-default">
                            <div class="input-group col-xs-12 d-flex align-items-center">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append ms-2">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>

                            @if($setting->value)
                            <div class="mt-2">
                                <img src="{{ asset( $setting->value) }}" width="120">
                            </div>
                            @endif
                            @endif
                        </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection