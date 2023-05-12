$(document).ready(function () {
    // alert('this is working');
    $('#example').DataTable({
        "ordering":false
    });
    $(document).on('click', '#btn_edit_client', function(){
        var id = $(this).attr('data-client_id');
      $.ajax({
        url : '/edit/'+id,
        method : 'GET',
        beforeSend : function(){
            $('#editclient').modal('show');
        },
        success : function(data){
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
