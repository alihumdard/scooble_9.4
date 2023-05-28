<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>



<script>
    $(document).ready(function() {
        // loadTables('users','Client');
        // loadTables('users','Admin');
        //login user through API ....        
        $('#login-form').on('submit', function(e) {

            e.preventDefault();

            var apiurl = $(this).attr('action');
            var csrfToken = '{{ csrf_token() }}';
            var formData = {
                email: $('#email').val(),
                password: $('#password').val(),
                _token: csrfToken
            };

            $.ajax({

                url: "/" + apiurl,
                type: 'POST',
                data: formData,
                beforeSend: function() {
                    $('#spinner').removeClass('d-none');
                    $('#text').addClass('d-none');
                },
                success: function(response) {
                    $('#text').removeClass('d-none');
                    $('#spinner').addClass('d-none');
                    if (response.status === 'success') {
                        showAlert("Success", "Login Successfully", "success");
                        setInterval(function() {
                            window.location.href = '/';
                        }, 500);
                    } else {
                        showAlert(response.status, "Invalid Credentiials", "warning");
                    }
                },

                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    showAlert("Error", "Please contact your admin", "warning");
                }

            });
        });

        // Adding  data in through the api...
        $('#formData').on('submit', function(e) {
            e.preventDefault();

            var apiname = $(this).attr('action');
            var apiurl = "{{ end_url('') }}" + apiname;
            var formData = new FormData(this);
            var bearerToken = "{{session('user')}}";
            $.ajax({
                url: apiurl,
                type: 'POST',
                data: formData,
                headers: {
                    'Authorization': 'Bearer ' + bearerToken
                },
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#spinner').removeClass('d-none');
                    $('#add_btn').addClass('d-none');
                },
                success: function(response) {
                    $('#spinner').addClass('d-none');
                    $('#add_btn').removeClass('d-none');
                    console.log(formData);
                    if (response.status === 'success') {
                        $('#formData')[0].reset();

                        $('#addclient').modal('hide');

                        showAlert("Success", response.message, response.status);
                        $('#users-table').DataTable().destroy();
                        // $("#table_reload").load(location.href + " #table_reload");
                        setTimeout(function() {
                            window.location.href = window.location.href;
                        }, 1500);
                    } else {
                        showAlert("Warning", response.message, response.status);
                    }
                },
                error: function(xhr, status, error) {
                    $('#spinner').addClass('d-none');
                    $('#add_btn').removeClass('d-none');
                    showAlert("Error", response.message, response.status);
                }
            });
        });

        // get api .....
        $(document).on('click', '#btn_edit_client', function () {
            var id = $(this).data('client_id');
            var apiname = $(this).data('api_name');
            var apiurl = "{{ end_url('') }}" + apiname;
            var bearerToken = "{{session('user')}}";
            $.ajax({
                url: apiurl+'?id='+id,
                type: 'GET',
                data: { 'id': id },
                headers: {
                    'Authorization': 'Bearer ' + bearerToken
                },
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#addclient').modal('show');
                },
                success: function(response) {
                    if (response.status === 'success') {
                        let responseData = response.data[0];
                        let formattedDateTime = moment(responseData.created_at).format("YYYY-MM-DDTHH:mm");
                        $('#addclient #btn_save').html('save').css('background-color', '#233A85');
                        $('#addclient #user_pic').attr('src', "{{ asset('storage') }}/" + responseData.user_pic).removeClass('d-none');
                        $('#addclient #com_pic').attr('src', "{{ asset('storage') }}/" + responseData.com_pic).removeClass('d-none');
                        $('#addclient #id').val(responseData.id);
                        $('#addclient #client_id').val(responseData.client_id);
                        $('#addclient #role').val(responseData.role);
                        $('#addclient #name').val(responseData.name);
                        $('#addclient #phone').val(responseData.phone);
                        $('#addclient #email').val(responseData.email);
                        $('#addclient #com_name').val(responseData.com_name);
                        $('#addclient #address').val(responseData.address);
                        $('#addclient #joining_date').val(formattedDateTime);
                    } 
                    else {
                        showAlert("Warning", response.message, response.status);
                        }
                },
                error: function(xhr, status, error) {
                    $('#spinner').addClass('d-none');
                    $('#add_btn').removeClass('d-none');
                    showAlert("Error", response.message, response.status);
                }
            });
        });

        // loading tables 
        function loadTables(apiname, role) {

            var apiurl = "{{ end_url('') }}" + apiname;

            if (role == 'Client') {
                $('#users-table').DataTable({
                    ajax: {
                        url: apiurl,
                        type: 'GET',
                        dataType: 'json',
                        beforeSend: function(xhr) {
                            var token = '{{ session('user') }}';
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                        },
                        dataSrc: 'data',
                        data: {
                            role: role
                        }
                    },
                    columns: [{
                            data: 'id'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'address'
                        },
                        {
                            data: 'com_name'
                        },
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
                                var options = {
                                    year: 'numeric',
                                    month: 'short',
                                    day: 'numeric'
                                };
                                return date.toLocaleDateString('en-US', options);
                            }
                        },
                    ],
                });
            }

            if (role == 'Admin') {
                $('#admin-table').DataTable({
                    ajax: {
                        url: apiurl,
                        type: 'GET',
                        dataType: 'json',
                        beforeSend: function(xhr) {
                            var token = '{{ session('user') }}';
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                        },
                        dataSrc: 'data',
                        data: {
                            role: role
                        }
                    },
                    columns: [{
                            data: 'name'
                        },
                        {
                            data: 'created_at',
                            render: function(data) {
                                var date = new Date(data);
                                var options = {
                                    year: 'numeric',
                                    month: 'short',
                                    day: 'numeric'
                                };
                                return date.toLocaleDateString('en-US', options);
                            }
                        },
                        {
                            data: 'address'
                        },
                        {
                            data: 'role'
                        },
                        {
                            data: 'email'
                        },
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
                            data: null,
                            render: function(data) {
                                return '<span class="badge" style="background-color: #F5222D30; color: #F5222D;"><i class="fa fa-edit"></i> Edit</span> <span class="badge" style="background-color: #F5222D30; color: #F5222D;"><i class="fa fa-trash"></i> Delete</span>';
                            }
                        }
                    ],
                });
            }

        }

        function dismissModal(modle_id) {
            $('#addclient').modal('hide');
            $('#formData')[0].reset();
        }

        function showAlert(title, message, type) {
            swal({
                title: title,
                text: message,
                icon: type
            });
        }


    });
</script>