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
    <form method="POST" id="save_banner" enctype="multipart/form-data" action="{{ isset($banner) ? route('admin.banners.update',$banner) : route('admin.banners.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($banner)) @method('PUT') @endif
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Banners</h4>
                        <p class="card-description"> Banner details </p>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                            <span class="error-text title_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="main_title">Main Title</label>
                            <input type="text" class="form-control" id="main_title" placeholder="Main Title" name="main_title">
                            <span class="error-text main_title_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="button_link">Button Link</label>
                            <input type="text" class="form-control" id="button_link" placeholder="Button Link" name="button_link">
                            <span class="error-text button_link_error"></span>
                        </div>

                        <div class="form-group">
                            <label for="message">Banner Description</label>
                            <textarea type="text" class="form-control" id="message" placeholder="Banner Description" name="description"></textarea>
                            <span class="error-text description_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Upload File</label>

                            <!-- File Input -->
                            <input type="file" id="imageInput" name="image[]" multiple class="form-control mb-3">

                            <!-- Preview Area -->
                            <div id="preview" class="row"></div>

                            <!-- Upload Button -->
                            <!-- <button id="uploadBtn" class="btn btn-success mt-3">Upload</button> -->
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
</script>
@endpush
@push('scripts')
<script>
    let selectedFiles = [];
    let uploadedPaths = [];
    // Preview images
    $('#imageInput').on('change', function(e) {

        let files = e.target.files;

        for (let i = 0; i < files.length; i++) {
            let file = files[i];
            selectedFiles.push(file);

            let index = selectedFiles.length - 1;

            // Preview UI with progress bar
            $('#preview').append(`
            <div class="col-md-2 preview-img" data-index="${index}" id="img-${index}">
                <img src="" id="preview-${index}">
                <div class="progress">
                    <div class="progress-bar" id="progress-${index}" style="width:0%"></div>
                </div>
                <button type="button" class="remove-btn" onclick="removeImage(${index})">×</button>
            </div>
        `);

            let reader = new FileReader();

            reader.onload = function(e) {
                $(`#preview-${index}`).attr('src', e.target.result);
            };

            reader.readAsDataURL(file);

            uploadFile(file, index);
        }
        updateButtons();
    });

    function updateButtons() {

        // Check selected files (before upload)
        let hasFiles = selectedFiles.some(file => file !== null);

        // Upload button
        if (hasFiles) {
            $('#uploadBtn').prop('disabled', false);
        } else {
            $('#uploadBtn').prop('disabled', true);
        }

        // Submit button (after upload)
        if (uploadedPaths.length > 0) {
            $('#submitBtn').prop('disabled', false);
        } else {
            $('#submitBtn').prop('disabled', true);
        }
    }

    function uploadFile(file, index) {
        let formData = new FormData();
        formData.append('image', file);

        $.ajax({
            url: "/admin/upload-banner-image",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            xhr: function() {
                let xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        let percent = Math.round((evt.loaded / evt.total) * 100);
                        $(`#progress-${index}`).css('width', percent + '%');
                    }
                }, false);

                return xhr;
            },

            success: function(res) {
                // Assume API returns { path: "file.jpg" }
                console.log("Upload Response:", res);
                uploadedPaths[index] = res.paths;

                console.log("Uploaded Paths:", uploadedPaths);
            }
        });
    }

    // Remove before upload
    function removeImage(index) {
        removeUploaded(uploadedPaths[index])
        uploadedPaths.splice(index, 1);
        selectedFiles[index] = null;
        $(`.preview-img[data-index="${index}"]`).remove();
        updateButtons();
    }

    // Remove after upload (server delete)
    function removeUploaded(path) {
        $.ajax({
            url: "/admin/delete-banner-image",
            type: "POST",
            data: {
                path: path
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function(res) {
                uploadedPaths = uploadedPaths.filter(p => p !== path);
            },

            error: function(xhr) {
                console.log(xhr);
            }
        });
    }

    $("#save_details").on("click", function() {
        let form = $("#save_banner");
        let formData = form.serialize();
        uploadedPaths.forEach(path => {
            formData += `&image[]=${encodeURIComponent(path)}`;
        });
        $('.error-text').text('');
        $('.success-message').text('');
        $.ajax({
            url: $("#save_banner").attr('action'),
            type: "POST",
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