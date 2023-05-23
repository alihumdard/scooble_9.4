$(document).ready(function () {
    // alert('this is working');

    $(document).on('click', '#btn_edit_client', function () {
        var id = $(this).attr('data-client_id');
        $.ajax({
            url: '/edit/' + id,
            method: 'GET',
            beforeSend: function () {
                $('#editclient').modal('show');
            },
            success: function (data) {
                data = JSON.parse(data);
                let formattedDateTime = moment(data[0].created_at).format("YYYY-MM-DDTHH:mm");
                $('#editclient #client_id').val(data[0].id);
                $('#editclient #user_role').val(data[0].role);
                $('#editclient #client_name').val(data[0].name);
                $('#editclient #email').val(data[0].email);
                $('#editclient #phone').val(data[0].phone);
                $('#editclient #company_name').val(data[0].com_name);
                $('#editclient #company_logo').val(data[0].com_logo);
                $('#editclient #address').text(data[0].address);
                $('#editclient #joining_date').val(formattedDateTime);
            }
        });
    });

    // modal form functions

    

    // modal form functions end


    $('#users-table').DataTable();

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
            },
            data: {
                'id': id,
                '_token': _token,
                'status': status
            },
            success: function (response) {
                if (response) {
                    console.log(response);
                    $('.btn_status').off('click');
                    $('#user_sts').off('submit');
                    window.location.reload();
                }
            }
        });
    });
    
    













});

