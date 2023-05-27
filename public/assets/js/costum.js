$(document).ready(function () {
    // alert('this is working');

    $(document).on('click', '#btn_edit_client', function () {
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
    
    





    $('#btn_cancel').click(function() {
        alert();
        // Dismiss the modal
        $('#addclient').modal('hide');
      });







});

