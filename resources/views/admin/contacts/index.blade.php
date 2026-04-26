@extends('admin.layout.app')

@section('content')
<style>
    .unread {
        font-weight: 700;
    }
</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="card-title mb-0">Contacts</h4>
                    </div>
                    <p class="card-description">List all the enquiry submitted by the users</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr class="{{!$contact->is_read ? 'unread' :''}}" data-id="{{ $contact->id }}">
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->created_at}}</td>
                                    <td> <button
                                            class="btn btn-sm btn-primary view-contact"
                                            data-id="{{ $contact->id }}">
                                            View
                                        </button> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <nav>
                        {{ $contacts->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="contactModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Contact Details</h5>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> <span id="c_name"></span></p>
                <p><strong>Phone:</strong> <span id="c_phone"></span></p>
                <p><strong>Email:</strong> <span id="c_email"></span></p>
                <p><strong>Message:</strong> <span id="c_message"></span></p>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).on('click', '.view-contact', function() {
        let id = $(this).data('id');
        let button = $(this);

        $.ajax({
            url: `/admin/contacts/${id}`,
            type: "GET",

            success: function(res) {

                // Fill modal
                $('#c_name').text(res.name);
                $('#c_phone').text(res.phone);
                $('#c_email').text(res.email);
                $('#c_message').text(res.message);

                // Mark as read visually (optional)
                button.closest('tr').removeClass('unread');

                // Open modal
                $('#contactModal').modal('show');
            },

            error: function(err) {
                console.log(err);
            }
        });
    });
</script>
@endpush
@endsection