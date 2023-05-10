$(document).ready(function () {
    // alert('this is working');
    $('#example').DataTable({
        "ordering": false
    });
    $(document).on('click', '#btn_edit_client', function () {
        var id = $(this).attr('data-client_id');
        $.ajax({
            url: '/edit/' + id,
            method: 'GET',
            beforeSend: function () {
                // $('#editclient .modal-content').html('<h1> Loading ....</h1>');
                $('#editclient').modal('show');
            },
            success: function (data) {
                data = JSON.parse(data);
                console.log(data[0].created_at);
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
                // $('#my-modal').modal('show');
                // alert(data);
            }
        });


    });



});

// moadal form functions

function updateLabel() {
    var fileInput1 = document.getElementById('fileInput1');
    var fileInput1Label1 = document.getElementById('fileInput1Label1');

    if (fileInput1.files.length > 0) {
        fileInput1Label1.textContent = fileInput1.files[0].name;
    } else {
        fileInput1Label1.textContent = 'Company Logo';
    }
}

function openFileInput() {
    var fileInput = document.getElementById('fileInput');
    fileInput.click();
}

function handleFileChange(event) {
    var fileInput = document.getElementById('fileInput');
    var fileDropzone = document.getElementById('fileDropzone');
    var fileDropzoneText = document.querySelector('.file-dropzone-text');

    if (fileInput.files.length > 0) {
        fileDropzoneText.textContent = fileInput.files[0].name;
    } else {
        fileDropzoneText.textContent = 'Click here to browse files';
    }
}

// moadal form functions end