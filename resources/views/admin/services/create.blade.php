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
    <form id="save_seo" method="POST" action="{{ route('admin.services.store') }}">
        @csrf
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Services</h4>
                        <p class="card-description"> Service details </p>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" name="icon" class="form-control" placeholder="Icon class (fa-solid fa-star)"><br>
                            <span class="error-text icon_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title"><br>
                            <span class="error-text title_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Description" name="description"></textarea>
                            <span class="error-text description_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <select name="is_active" class="form-select">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
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
        let form = $("#save_seo");
        let formData = form.serialize();
        $('.error-text').text('');
        $('.success-message').text('');
        $.ajax({
            url: $("#save_seo").attr('action'),
            type: "POST",
            data: formData,
            success: function(response) {
                if (response.status) {
                    $('.success-message').text(response.message);

                    // Clear form
                    form.trigger("reset");
                    $('.preview-img').remove();
                    $("#message").summernote('code', '');
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