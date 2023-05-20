<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
$(document).ready(function() {
    alert('11');
    $('#login-form').on('submit', function(e) {

    e.preventDefault();

    var apiurl = $(this).attr('action');
        alert(url);
    // Get the form data
    var formData = {
        email: $('#email').val(),
        password: $('#password').val()
    };

    // Send an AJAX request
    $.ajax({
        url: "{{end_url('"+apiurl+"')}}",
        type: 'POST',
        data: formData,
        success: function(response) {
            // Handle the success response
            if (response.status === 'success') {
                // Store the token in the session
                alert(response.token);
                sessionStorage.setItem('user', response.token);
                // Redirect or perform further actions
                window.location.href = '/';
            } else {
                console.error('Invalid response:', response);
            }
        },
        error: function(xhr, status, error) {
            // Handle the error response
            console.error(xhr.responseText);
            // Show the error message in an alert
            alert(xhr.responseText);
        }
    });
});
});
</script>