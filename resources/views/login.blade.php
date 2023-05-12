<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
    <style>
        body {
            background-image: url('{{ asset("assets/images/background_screen.jpg")}}');
            background-repeat: no-repeat;
            background-size: cover;
            /* background-attachment: fixed; */
            /* font-family: lato; */
        }

        .card {
            width: 40%;
            background-color: #3B2182F2;
            opacity: 0.9;
            border-radius: 20px;
        }

        .container {
            padding: 70px 0;
        }

        a {
            color: #E45F00;
        }

        a:hover {
            text-decoration: none;
            color: #E45F00;
        }

        .card-header {
            border-bottom: none;
        }

        .btn {
            background-color: #E45F00;
            width: 100%;
            border-radius: 8px;
        }

        .row {
            width: 70%;
        }

        label {
            position: absolute;
            z-index: 100;
            margin-left: 80%;
            margin-top: 2%;
        }

        input {
            position: relative;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card mx-auto">
            <div class="card-header text-right">
                <img src="assets/images/Logo.png" alt="scooble">
            </div>
            <div class="card-body text-white">
                <div class="row mx-auto">
                    <div class="col-md-12">
                        <h3>WELCOME</h3>
                        <p class="mb-0">If you don’t have an account register</p>
                        <p>You can <a href="/register">Register here !</a></p>
                    </div>
                    <div class="col-md-12">
                        <form action="/login" method="post">
                            @csrf
                            <label for="">
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5938 0H1.40625C0.62959 0 0 0.671562 0 1.5V10.5C0 11.3284 0.62959 12 1.40625 12H13.5938C14.3704 12 15 11.3284 15 10.5V1.5C15 0.671562 14.3704 0 13.5938 0ZM13.5938 1.5V2.77516C12.9369 3.34575 11.8896 4.233 9.65077 6.10297C9.15738 6.51694 8.18004 7.51147 7.5 7.49988C6.82008 7.51159 5.84241 6.51678 5.34923 6.10297C3.11074 4.23328 2.06323 3.34584 1.40625 2.77516V1.5H13.5938ZM1.40625 10.5V4.69994C2.07756 5.27028 3.02956 6.07063 4.48061 7.28263C5.12095 7.82028 6.24234 9.00719 7.5 8.99997C8.75147 9.00719 9.85866 7.8375 10.5191 7.28288C11.9701 6.07091 12.9224 5.27034 13.5938 4.69997V10.5H1.40625Z" fill="#BDBDBD" />
                                </svg>
                            </label>
                            <input type="email" name="email" value="{{(isset($email))?$email:''}}" id="email" class="form-control mb-3" placeholder="Email/User Name">
                            <div onclick="showiconss()">
                                <label for="" id="showicon">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 1L16.25 16" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.78458 4.54195C2.49859 6.09645 1.25 8.5 1.25 8.5C1.25 8.5 3.97727 13.75 8.75 13.75C10.2877 13.75 11.613 13.2051 12.7033 12.4663M8 3.29366C8.24405 3.2651 8.4941 3.25 8.75 3.25C13.5227 3.25 16.25 8.5 16.25 8.5C16.25 8.5 15.7312 9.49877 14.75 10.6251" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.25 10.1772C9.8519 10.5334 9.3263 10.7501 8.75 10.7501C7.50732 10.7501 6.5 9.74275 6.5 8.50008C6.5 7.8823 6.74895 7.32273 7.15199 6.91614" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </label>
                                <label for="" id="hideicon">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6.45455C1 6.45455 3.72727 1 8.5 1C13.2727 1 16 6.45455 16 6.45455" stroke="#BDBDBD" stroke-width="1.90227" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 6.45453C1 6.45453 3.72727 11.9091 8.5 11.9091C13.2727 11.9091 16 6.45453 16 6.45453" stroke="#BDBDBD" stroke-width="1.90227" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.50004 8.49997C9.62972 8.49997 10.5455 7.58419 10.5455 6.45451C10.5455 5.32484 9.62972 4.40906 8.50004 4.40906C7.37037 4.40906 6.45459 5.32484 6.45459 6.45451C6.45459 7.58419 7.37037 8.49997 8.50004 8.49997Z" stroke="#BDBDBD" stroke-width="1.90227" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </label>
                            </div>
                            <input type="password" name="password" id="inputpassword" class="form-control mb-3" placeholder="Password">
                        
                        <p><a href="/forgot_password">Forgot Password?</a></p>
                    </div>
                    <div class="col-md-12 my-4">
                        <button class="btn text-white text-center">Login</button>
                        </form>
                        @if (Session::has('message'))
                            <lable class="text-danger"> {{ session('message') }}</lable>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showiconss() {
            const inputpass = document.getElementById('inputpassword');
            const hideicon = document.getElementById('hideicon');
            const showicon = document.getElementById('showicon');
            if (inputpass.type === "password") {
                inputpass.type = "text";
                hideicon.style.display = "block";
                showicon.style.display = "none";
                console.log('hello world');

            } else {
                inputpass.type = "password"
                hideicon.style.display = "none";
                showicon.style.display = "block";
                console.log('hello');
            }
        }
    </script>
</body>

</html>