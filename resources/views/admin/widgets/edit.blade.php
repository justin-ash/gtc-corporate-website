@extends('admin.layout.app')

@section('content')
<style>
    .error-text {
        color: red;
        font-size: 13px;
    }

    .success-message {
        color: green;
        margin-top: 10px;
    }
</style>
<div class="content-wrapper">
    <form method="PUT" id="save_widget" action="{{ route('admin.widgets.update', $widget->id) }}">
        @csrf
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Widgets</h4>
                        <p class="card-description"> Widget details </p>
                        <div class="form-group">
                            <label for="widget_code">Widget Code</label>
                            <input type="text" class="form-control" readonly="readonly" id="widget_code" placeholder="Widget Code" name="widget_code" value="{{ $widget->widget_code }}">
                            <span class="error-text widget_code_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $widget->title }}">
                            <span class="error-text title_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="message">Widget Description</label>
                            <textarea type="text" class="form-control" id="message" placeholder="Widget Description" name="description">{{ $widget->description }}</textarea>
                            <span class="error-text description_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <select name="is_active" class="form-select">
                                <option value="1" {{ $widget->is_active == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $widget->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                            </select><br>
                            <span class="error-text is_active_error"></span>
                        </div>
                        <div class="success-message"></div>
                        <br>
                        <button id="save_details" type="button" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $('#message').summernote({
            height: 200,
            placeholder: 'Write something...',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['codeview']]
            ]
        });
    });
    $("#save_details").on("click", function() {
        let form = $("#save_widget");
        let formData = form.serialize();
        $('.error-text').text('');
        $('.success-message').text('');
        $.ajax({
            url: $("#save_widget").attr('action'),
            type: "PUT",
            data: formData,
            success: function(response) {
                if (response.status) {
                    $('.success-message').text(response.message);

                    // Clear form
                    form.trigger("reset");
                    $('.preview-img').remove();
                }
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors;

                $.each(errors, function(key, value) {
                    $('.' + key + '_error').text(value[0]);
                });
            }
        });
    });
</script>
@endpush
@endsection