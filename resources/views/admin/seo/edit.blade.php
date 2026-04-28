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
    <form method="PUT" id="save_seo" action="{{ route('admin.seo.update', $seo->id) }}">
        @csrf
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">SEO</h4>
                        <p class="card-description"> SEO details </p>
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <select name="page" class="form-select">
                                @foreach($allPages as $p)
                                <option value="{{ $p }}" {{ $seo->page == $p ? 'selected' : '' }}>{{ ucfirst($p) }}</option>
                                @endforeach
                            </select><br>
                            <span class="error-text page_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" placeholder="Meta Title" name="meta_title" value="{{ $seo->meta_title ?? '' }}">
                            <span class="error-text meta_title_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <textarea class="form-control" id="meta_keywords" placeholder="Meta Keywords" name="meta_keywords">{{ $seo->meta_keywords ?? '' }}</textarea>
                            <span class="error-text meta_keywords_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" id="meta_description" placeholder="Meta Description" name="meta_description">{{ $seo->meta_description ?? '' }}</textarea>
                            <span class="error-text meta_description_error"></span>
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
            type: "PUT",
            data: formData,
            success: function(response) {
                if (response.status) {
                    $('.success-message').text(response.message);

                    // Clear form
                    form.trigger("reset");
                    window.location.href = "{{ route('admin.seo.index') }}";

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