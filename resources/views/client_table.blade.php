<script>
    $(document).ready(function() {
    $('#users-table').DataTable({
        ajax: {
            url: '/api/users', // Replace with your API endpoint URL
            type: 'GET',
            dataType: 'json',
            beforeSend: function(xhr) {
                var token = '{{ session('user') }}'; // Retrieve the token from the session
                xhr.setRequestHeader('Authorization', 'Bearer ' + token);
            },
            dataSrc: 'data',
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'address' },
            { data: 'com_name' },
            { 
                data: 'status',
                render: function(data) {
                    if (data == 1) {
                        return '<span class="badge" style="background-color: #31A6132E; color: #31A613;">Active</span>';
                    } else if (data == 2) {
                        return '<span class="badge" style="background-color: #4D4D4D1F; color: #8F9090;">Pending</span>';
                    } else if (data == 3) {
                        return '<span class="badge" style="background-color: #F5222D30; color: #F5222D;">Suspend</span>';
                    } else {
                        return '';
                    }
                }
            },
            { 
                data: 'created_at',
                render: function(data) {
                    var date = new Date(data);
                    var options = { year: 'numeric', month: 'short', day: 'numeric' };
                    return date.toLocaleDateString('en-US', options);
                }
            },
        ],
    });
});
</script>
<!-- DataTables Plugin -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<table id="users-table" class="display" style="width:100%">
    <thead class="text-secondary" style="background-color: #E9EAEF;">
        <tr>
            <th>Id</th>
            <th> Name </th>
            <th> Address </th>
            <th> Company Name </th>
            <th> Status </th>
            <th> Joining Date </th>
        </tr>
    </thead>
</table>
<!-- Edit Client Modal -->
<div class="modal fade" id="editclient" tabindex="-1" aria-labelledby="editclientLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
          <h5 class="modal-title" id="editclientLabel"></h5>
        </div> -->
            <form action="{{'/user_store'}}" style="width: 100%;" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="file-dropzone" id="fileDropzone1" onclick="openFileInput()">
                            <svg width="42" height="35" viewBox="0 0 42 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2938 5.41268C11.4286 5.22532 11.5783 4.99595 11.7692 4.68667C11.8761 4.51336 12.2664 3.86782 12.3302 3.76348C13.9071 1.18395 15.0534 0 17.1205 0H24.7295C26.7966 0 27.9429 1.18395 29.5198 3.76348C29.5836 3.86782 29.9739 4.51336 30.0808 4.68667C30.2717 4.99595 30.4214 5.22532 30.5562 5.41268C30.645 5.53624 30.7227 5.63442 30.786 5.70682H36.1432C39.295 5.70682 41.85 8.26185 41.85 11.4136V28.5341C41.85 31.6859 39.295 34.2409 36.1432 34.2409H5.70682C2.55503 34.2409 0 31.6859 0 28.5341V11.4136C0 8.26185 2.55503 5.70682 5.70682 5.70682H11.064C11.1273 5.63442 11.205 5.53624 11.2938 5.41268ZM5.70682 9.51136C4.65622 9.51136 3.80455 10.363 3.80455 11.4136V28.5341C3.80455 29.5847 4.65622 30.4364 5.70682 30.4364H36.1432C37.1938 30.4364 38.0455 29.5847 38.0455 28.5341V11.4136C38.0455 10.363 37.1938 9.51136 36.1432 9.51136H30.4364C29.1726 9.51136 28.3203 8.81971 27.4677 7.63431C27.2715 7.36156 27.0771 7.06374 26.8432 6.68476C26.7251 6.49337 26.329 5.83823 26.2738 5.74788C25.4134 4.34046 24.8945 3.80455 24.7295 3.80455H17.1205C16.9555 3.80455 16.4366 4.34046 15.5762 5.74788C15.521 5.83823 15.1249 6.49337 15.0068 6.68476C14.7729 7.06374 14.5785 7.36156 14.3823 7.63431C13.5297 8.81971 12.6774 9.51136 11.4136 9.51136H5.70682ZM34.2409 15.2182C35.2915 15.2182 36.1432 14.3665 36.1432 13.3159C36.1432 12.2653 35.2915 11.4136 34.2409 11.4136C33.1903 11.4136 32.3386 12.2653 32.3386 13.3159C32.3386 14.3665 33.1903 15.2182 34.2409 15.2182ZM20.925 28.5341C15.672 28.5341 11.4136 24.2757 11.4136 19.0227C11.4136 13.7697 15.672 9.51136 20.925 9.51136C26.178 9.51136 30.4364 13.7697 30.4364 19.0227C30.4364 24.2757 26.178 28.5341 20.925 28.5341ZM20.925 24.7295C24.0768 24.7295 26.6318 22.1745 26.6318 19.0227C26.6318 15.8709 24.0768 13.3159 20.925 13.3159C17.7732 13.3159 15.2182 15.8709 15.2182 19.0227C15.2182 22.1745 17.7732 24.7295 20.925 24.7295Z" fill="#D9D9D9" />
                            </svg>
                            <span class="file-dropzone-text">Upload Image</span>
                            <input class="file-input" name="user_pic" type="file" id="fileInput" onchange="handleFileChange(event)">
                        </div>
                        <div class="col-lg-12 mb-2">
                            @csrf
                            <input type="hidden" name="_previous" value="{{url()->previous()}}">
                            <input type="hidden" id="client_id" name="id">
                            <input type="hidden" id="user_role" name="role">
                            <input type="text" class="form-control" name="client_name" id="client_name" placeholder="@lang('lang.name')">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input type="text" class="form-control" name="email" id="email" placeholder="@lang('lang.email')">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="@lang('lang.phone')">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="@lang('lang.company_name')">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div class="file-input-container">
                                <label class="file-input-label" for="fileInput" id="fileInput1Label1">@lang('lang.company_logo')</label>
                                <input class="file-input" type="file" name="com_pic" id="fileInput1" onchange="updateLabel()">
                                <div class="file-input-icon" onclick="document.getElementById('fileInput1').click()"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="@lang('lang.address')"></textarea>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input type="datetime-local" name="joining_date" id="joining_date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm text-white px-5" style="background-color: #233A85; border-radius: 8px;"> @lang('lang.save')</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Client Modal End -->

<!-- Edit Button Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1FADF" />
                    <path d="M23.5 28L26.5 31L32.5 25M38 28C38 33.5228 33.5228 38 28 38C22.4772 38 18 33.5228 18 28C18 22.4772 22.4772 18 28 18C33.5228 18 38 22.4772 38 28Z" stroke="#039855" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <rect x="4" y="4" width="48" height="48" rx="24" stroke="#ECFDF3" stroke-width="8" />
                </svg>

                <h5 class="mt-3">@lang('lang.confirmation_email')</h5>
                <p>@lang('lang.confirmation_email_sent_to_client_to_set_password')</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm text-white px-5" style="background-color: #233A85; border-radius: 8px;">@lang('lang.ok')</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Button Modal End -->