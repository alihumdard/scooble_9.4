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
    $('#user_sts').on('submit', function (e) {
        e.preventDefault();

        var apiname = $(this).attr('action');
        var apiurl = "{{ end_url('') }}" + apiname;
        var user_sts = $(this).serializeArray();
        var bearerToken = "{{session('user')}}";

        $.ajax({
            url: apiurl,
            type: 'POST',
            data: user_sts,
            headers: {
                'Authorization': 'Bearer ' + bearerToken
            },
        });
    });
    $(document).on('click', '#change_sts', function () {
        var id = $('#user_sts');
        var _token = '{{ csrf_token() }}';
        var user_sts = $('#user_sts').val();
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

});

