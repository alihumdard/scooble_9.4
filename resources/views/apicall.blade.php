<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    $(document).ready(function() {
        $('#login-form').on('submit', function(e) {

            e.preventDefault();

            var apiurl = $(this).attr('action');
            // Get the form data
            var csrfToken = '{{ csrf_token() }}';

            var formData = {
                email: $('#email').val(),
                password: $('#password').val(),
                _token: csrfToken
            };
            // Send an AJAX request
            $.ajax({
                url: "/" + apiurl,
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle the success response
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
                    // Handle the error response
                    console.error(xhr.responseText);
                    showAlert("Error", "Please contact your admin", "warning");
                }
            });
        });

        $('#formData').on('submit', function(e) {

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
                url: "{{end_url('" + apiurl + "')}}",
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



        function showAlert(title, message, type) {
            swal({
                title: title,
                text: message,
                icon: type
            });
        }

    });

</script>