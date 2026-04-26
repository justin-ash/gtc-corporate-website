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
                            <input type="text" class="form-control" id="project_name" placeholder="Project Name" name="project_name" value="{{$project->project_name}}">
                            <span class="error-text project_name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Short Description</label>
                            <input type="text" class="form-control" id="short_description" placeholder="Short description" name="short_description" value="{{$project->short_description}}">
                            <span class="error-text short_description_error"></span>
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
                                <input type="text" class="form-control" id="project_location" placeholder="Project Location" name="project_location" value="{{$project->project_location}}">
                                <span class="error-text project_location_error"></span>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="project_type" class="col-sm-3 col-form-label">Project Type</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="project_type" placeholder="Project Type" name="project_type" value="{{$project->project_type}}">
                                <span class="error-text project_type_error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="established_date" class="col-sm-3 col-form-label">Established Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="established_date" placeholder="Established Date" name="established_date" value="{{$project->established_date}}">
                                <span class="error-text established_date_error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Website" name="website" value="{{$project->website}}">
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
                            <textarea type="text" class="form-control" id="details" placeholder="Details" name="detail_text">{{$project->detail_text}}</textarea>
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
                            <input type="file" id="imageInput" multiple class="form-control mb-3">

                            <!-- Preview Area -->
                            <div id="preview" class="row"></div>

                            <!-- Upload Button -->
                            <button id="uploadBtn" class="btn btn-success mt-3">Upload</button>
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
    let selectedFiles = [];
    let uploadedPaths = [];
    // Preview images
    $('#imageInput').on('change', function(e) {

        let files = e.target.files;

        for (let i = 0; i < files.length; i++) {
            let file = files[i];
            selectedFiles.push(file);

            let reader = new FileReader();

            reader.onload = function(e) {
                let index = selectedFiles.length - 1;

                $('#preview').append(`
                <div class="col-md-1 preview-img" data-index="${index}">
                    <img src="${e.target.result}">
                    <button class="remove-btn" onclick="removeImage(${index})">×</button>
                </div>
            `);
            };

            reader.readAsDataURL(file);
        }

        updateButtons();
    });

    function removeUploaded(path, element) {

        $.ajax({
            url: "/admin/delete-image",
            type: "POST",
            data: {
                path: path
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function() {
                uploadedPaths = uploadedPaths.filter(p => p !== path);
                $(element).remove();

                updateButtons(); // 🔥
            }
        });
    }

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

    // Remove before upload
    function removeImage(index) {
        selectedFiles[index] = null;
        $(`.preview-img[data-index="${index}"]`).remove();
        updateButtons();
    }

    // Upload API call
    $('#uploadBtn').click(function() {

        let formData = new FormData();

        selectedFiles.forEach((file) => {
            if (file !== null) {
                formData.append('images[]', file);
            }
        });

        $.ajax({
            url: "/admin/upload-gallery", // 🔥 your API
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function(res) {

                // Save paths
                res.paths.forEach(path => {
                    uploadedPaths.push(path);
                });

                console.log("Uploaded Paths:", uploadedPaths);

                alert('Uploaded successfully!');
                updateButtons();
            }
        });

    });

    // Remove after upload (server delete)
    function removeUploaded(path, element) {

        $.ajax({
            url: "/admin/delete-image",
            type: "POST",
            data: {
                path: path
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function() {
                uploadedPaths = uploadedPaths.filter(p => p !== path);
                $(element).remove();
            }
        });
    }

    $("#save_details").on("click", function() {
        let form = $("#save_project");
        let formData = form.serialize();
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