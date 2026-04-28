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
    <form action="{{route('admin.projects.store')}}" id="save_project" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Project Detail</h4>
                        <p class="card-description"> Enter project details </p>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Project Name</label>
                            <input type="text" class="form-control" id="project_name" placeholder="Project Name" name="project_name">
                            <span class="error-text project_name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" readonly style="background-color: #ccc;">
                            <span class="error-text slug_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Short Description</label>
                            <input type="text" class="form-control" id="short_description" placeholder="Short description" name="short_description">
                            <span class="error-text short_description_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <select name="is_active" class="form-select">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select><br>
                            <span class="error-text is_active_error"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Company Formation</h4>
                        <p class="card-description"> Company formation details </p>
                        <div class="form-group row">
                            <label for="project_location" class="col-sm-3 col-form-label">Project Location</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="project_location" placeholder="Project Location" name="project_location">
                                <span class="error-text project_location_error"></span>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="project_type" class="col-sm-3 col-form-label">Project Type</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="project_type" placeholder="Project Type" name="project_type">
                                <span class="error-text project_type_error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="established_date" class="col-sm-3 col-form-label">Established Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="established_date" placeholder="Established Date" name="established_date">
                                <span class="error-text established_date_error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Website" name="website">
                                <span class="error-text website_error"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Project Description</h4>
                        <p class="card-description"> Project description details </p>
                        <div class="form-group">
                            <label for="details">Project Details</label>
                            <textarea type="text" class="form-control" id="details" placeholder="Details" name="detail_text"></textarea>
                            <span class="error-text detail_text_error"></span>
                        </div>

                        <!-- <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12 d-flex align-items-center">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append ms-2">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div> -->

                        <div class="form-group">
                            <label>Upload Gallery</label>

                            <!-- File Input -->
                            <input type="file" id="imageInput" name="image[]" multiple class="form-control mb-3">

                            <!-- Preview Area -->
                            <div id="preview" class="row"></div>

                            <!-- Upload Button -->
                            <!-- <button id="uploadBtn" class="btn btn-success mt-3">Upload</button> -->
                        </div>
                        <div class="success-message"></div>
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
        $('#details').summernote({
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

            // 🔥 Upload immediately
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
            url: "/admin/upload-gallery",
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
        console.log(typeof path, path);
        $.ajax({
            url: "/admin/delete-image",
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
        let form = $("#save_project");
        let formData = form.serialize();
        uploadedPaths.forEach(path => {
            formData += `&gallery[]=${encodeURIComponent(path)}`;
        });
        $('.error-text').text('');
        $('.success-message').text('');
        $.ajax({
            url: $("#save_project").attr('action'),
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
    $('#project_name').on('input', function() {
        let slug = $(this).val()
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');

        $('#slug').val(slug);
    });
</script>
@endpush
@endsection