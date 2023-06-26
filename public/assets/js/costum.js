$(document).ready(function () {
    // alert('this is working');

    $(document).on('click', '#abc', function () {
        var id = $(this).attr('data-client_id');
        $.ajax({
            url: '/edit/' + id,
            method: 'GET',
            beforeSend: function () {
                $('#addclient').modal('show');
            },
            success: function (data) {
                data = JSON.parse(data);
                let formattedDateTime = moment(data[0].created_at).format("YYYY-MM-DDTHH:mm");
                $('#addclient #btn_save').html('save').css('background-color', '#233A85');
                $('#addclient #user_pic').val(data[0].user_pic);
                $('#addclient #client_id').val(data[0].id);
                $('#addclient #role').val(data[0].role);
                $('#addclient #name').val(data[0].name);
                $('#addclient #phone').val(data[0].phone);
                $('#addclient #email').val(data[0].email);
                $('#addclient #com_name').val(data[0].com_name);
                $('#addclient #address').val(data[0].address);
                $('#addclient #joining_date').val(formattedDateTime);
            }
        });
    });

    // modal form functions

    

    // modal form functions end


    var users_table = $('#users-table').DataTable();

    $('#filter_by_sts_client').on('change', function() {
        var selectedStatus = $(this).val();
        users_table.column(4).search(selectedStatus).draw();
    });

    $('#filter_by_sts_users').on('change', function() {
        var selectedStatus = $(this).val();
        users_table.column(6).search(selectedStatus).draw();
    });

    $('#filter_by_sts_drivers').on('change', function() {
        var selectedStatus = $(this).val();
        users_table.column(5).search(selectedStatus).draw();
    });

    $('#filter_by_sts_routes').on('change', function() {
        var selectedStatus = $(this).val();
        users_table.column(6).search(selectedStatus).draw();
    });

    //user status
    $(document).on('click', '.btn_status', function () {
        var id = $(this).find('span').attr('data-client_id');
        $('#user_sts').modal('show');
            $('#user_sts').data('id', id);
    });
    
    $(document).on('submit', '#user_sts', function (event) {
        event.preventDefault();
        var id = $('#user_sts').data('id');
        var status = $('#status').val();
        var _token = $(this).find('input[name="_token"]').val();
    
        $.ajax({
            url: '/change_status',
            method: 'POST',
            beforeSend: function () {
                // $('#editclient').modal('show');
                $('#change_sts').prop('disabled', true);
                $('#change_sts #spinner').removeClass('d-none');
                $('#change_sts #add_btn').addClass('d-none');
            },
            data: {
                'id': id,
                '_token': _token,
                'status': status
            },
            success: function (response) {
                if (response) {
                    $('#change_sts').prop('disabled', false);
                    $('#spinner').addClass('d-none');
                    $('#add_btn').removeClass('d-none');

                    console.log(response);
                    $('#user_sts').off('submit');
                    location.reload();
                }
            }
        });
    });
    
    





    $('#btn_cancel').click(function() {
        alert();
        // Dismiss the modal
        $('#addclient').modal('hide');
      });







});

