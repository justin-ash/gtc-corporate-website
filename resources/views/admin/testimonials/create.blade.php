@extends('admin.layout.app')

@section('content')
<style>
    .preview-img {
        position: relative;
        margin: 10px;
    }

    .preview-img img {
        width: 120px;
        height: 100px;
        object-fit: cover;
        border-radius: 6px;
    }

    .remove-btn {
        position: absolute;
        top: 5px;
        right: 0px;
        background: red;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 22px;
        height: 22px;
        font-size: 12px;
    }

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
    <form method="POST" id="save_testimonial" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Testimonials</h4>
                        <p class="card-description"> Testimonial details </p>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            <span class="error-text name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <input type="text" class="form-control" id="role" placeholder="Role" name="role">
                            <span class="error-text role_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <select name="rating" class="form-select">
                                @for($i=1; $i<=5; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select><br>
                            <span class="error-text rating_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="message">Testimonial Message</label>
                            <textarea type="text" class="form-control" id="message" placeholder="Testimonial Message" name="message"></textarea>
                            <span class="error-text message_error"></span>
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
            url: "/admin/upload-testimonial-image",
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
            url: "/admin/delete-testimonial-image",
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
        let form = $("#save_testimonial");
        let formData = form.serialize();
        uploadedPaths.forEach(path => {
            formData += `&image[]=${encodeURIComponent(path)}`;
        });
        $('.error-text').text('');
        $('.success-message').text('');
        $.ajax({
            url: $("#save_testimonial").attr('action'),
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