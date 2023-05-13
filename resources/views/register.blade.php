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
    <title>Register</title>
    <style>
        body {
            background-image: url('assets/images/background_screen.jpg');
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

        #password-message {
            margin-top: 10px;
        }

        .invalid {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="card mx-auto">
            <div class="card-header text-right">
                <img src="assets/images/Logo.png" alt="scooble">
            </div>
            <div class="card-body text-white">
                <div class="row mx-auto">
                    <div class="col-md-12">
                        <h3>Register</h3>
                        <p class="mb-0">If you already have a register account</p>
                        <p>You can <a href="/login">Login here !</a></p>
                    </div>
                    <div class="col-md-12">
                        <form action="">
                            <label for="">
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5938 0H1.40625C0.62959 0 0 0.671562 0 1.5V10.5C0 11.3284 0.62959 12 1.40625 12H13.5938C14.3704 12 15 11.3284 15 10.5V1.5C15 0.671562 14.3704 0 13.5938 0ZM13.5938 1.5V2.77516C12.9369 3.34575 11.8896 4.233 9.65077 6.10297C9.15738 6.51694 8.18004 7.51147 7.5 7.49988C6.82008 7.51159 5.84241 6.51678 5.34923 6.10297C3.11074 4.23328 2.06323 3.34584 1.40625 2.77516V1.5H13.5938ZM1.40625 10.5V4.69994C2.07756 5.27028 3.02956 6.07063 4.48061 7.28263C5.12095 7.82028 6.24234 9.00719 7.5 8.99997C8.75147 9.00719 9.85866 7.8375 10.5191 7.28288C11.9701 6.07091 12.9224 5.27034 13.5938 4.69997V10.5H1.40625Z" fill="#BDBDBD" />
                                </svg>
                            </label>
                            <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Email" required>
                            <label for="">
                                <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 8.57143C8.34764 8.57143 9.17623 8.32008 9.88102 7.84916C10.5858 7.37824 11.1351 6.7089 11.4595 5.92579C11.7839 5.14268 11.8687 4.28096 11.7034 3.44961C11.538 2.61827 11.1298 1.85463 10.5305 1.25526C9.93109 0.65589 9.16745 0.247716 8.3361 0.0823507C7.50476 -0.0830145 6.64304 0.00185692 5.85993 0.326232C5.07682 0.650608 4.40748 1.19992 3.93656 1.9047C3.46564 2.60948 3.21429 3.43808 3.21429 4.28572C3.21429 5.42236 3.66582 6.51245 4.46954 7.31617C5.27327 8.1199 6.36336 8.57143 7.5 8.57143ZM7.5 2.14286C7.92382 2.14286 8.33812 2.26854 8.69051 2.504C9.0429 2.73946 9.31755 3.07412 9.47974 3.46568C9.64193 3.85724 9.68437 4.28809 9.60168 4.70377C9.519 5.11944 9.31491 5.50126 9.01523 5.80094C8.71555 6.10063 8.33372 6.30472 7.91805 6.3874C7.50238 6.47008 7.07152 6.42765 6.67997 6.26546C6.28841 6.10327 5.95374 5.82861 5.71828 5.47622C5.48282 5.12383 5.35714 4.70953 5.35714 4.28572C5.35714 3.7174 5.58291 3.17235 5.98477 2.77049C6.38664 2.36862 6.93168 2.14286 7.5 2.14286Z" fill="#BDBDBD" />
                                    <path d="M7.5 10.7143C5.51088 10.7143 3.60322 11.5045 2.1967 12.911C0.790176 14.3175 0 16.2252 0 18.2143C0 18.4985 0.112883 18.771 0.313814 18.9719C0.514746 19.1728 0.787268 19.2857 1.07143 19.2857C1.35559 19.2857 1.62811 19.1728 1.82904 18.9719C2.02997 18.771 2.14286 18.4985 2.14286 18.2143C2.14286 16.7935 2.70727 15.4309 3.71193 14.4262C4.71659 13.4216 6.0792 12.8572 7.5 12.8572C8.9208 12.8572 10.2834 13.4216 11.2881 14.4262C12.2927 15.4309 12.8571 16.7935 12.8571 18.2143C12.8571 18.4985 12.97 18.771 13.171 18.9719C13.3719 19.1728 13.6444 19.2857 13.9286 19.2857C14.2127 19.2857 14.4853 19.1728 14.6862 18.9719C14.8871 18.771 15 18.4985 15 18.2143C15 16.2252 14.2098 14.3175 12.8033 12.911C11.3968 11.5045 9.48912 10.7143 7.5 10.7143Z" fill="#BDBDBD" />
                                </svg>
                            </label>
                            <input type="text" name="name" id="name" class="form-control mb-3" placeholder="User Name">
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
                            <input type="password" class="form-control" placeholder="Password" id="inputpassword" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])(?=.*[0-9]).{8,}" required>
                            <div id="password-message"></div>
                            <div onclick="showiconss2()">
                                <label for="" id="showicon2">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 1L16.25 16" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.78458 4.54195C2.49859 6.09645 1.25 8.5 1.25 8.5C1.25 8.5 3.97727 13.75 8.75 13.75C10.2877 13.75 11.613 13.2051 12.7033 12.4663M8 3.29366C8.24405 3.2651 8.4941 3.25 8.75 3.25C13.5227 3.25 16.25 8.5 16.25 8.5C16.25 8.5 15.7312 9.49877 14.75 10.6251" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.25 10.1772C9.8519 10.5334 9.3263 10.7501 8.75 10.7501C7.50732 10.7501 6.5 9.74275 6.5 8.50008C6.5 7.8823 6.74895 7.32273 7.15199 6.91614" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </label>
                                <label for="" id="hideicon2">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6.45455C1 6.45455 3.72727 1 8.5 1C13.2727 1 16 6.45455 16 6.45455" stroke="#BDBDBD" stroke-width="1.90227" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 6.45453C1 6.45453 3.72727 11.9091 8.5 11.9091C13.2727 11.9091 16 6.45453 16 6.45453" stroke="#BDBDBD" stroke-width="1.90227" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.50004 8.49997C9.62972 8.49997 10.5455 7.58419 10.5455 6.45451C10.5455 5.32484 9.62972 4.40906 8.50004 4.40906C7.37037 4.40906 6.45459 5.32484 6.45459 6.45451C6.45459 7.58419 7.37037 8.49997 8.50004 8.49997Z" stroke="#BDBDBD" stroke-width="1.90227" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </label>
                            </div>
                            <input type="password" name="confirm_password" id="confirmpassword" class="form-control mb-3" placeholder="Password">
                        </form>
                    </div>
                    <div class="col-md-12 my-3">
                        <button class="btn text-white text-center">Login</button>
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

        function showiconss2() {
            const inputpass = document.getElementById('confirmpassword');
            const hideicon = document.getElementById('hideicon2');
            const showicon = document.getElementById('showicon2');
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
        const passwordInput = document.getElementById('inputpassword');
        const passwordMessage = document.getElementById('password-message');

        passwordInput.addEventListener('input', function() {
            const isValid = passwordInput.checkValidity();

            if (isValid) {
                passwordMessage.innerHTML = `
          <ul>
            <li>Min 1 uppercase letter</li>
            <li>Min 1 lowercase letter</li>
            <li>Min 1 special character</li>
            <li>Min 1 number</li>
            <li>Min 8 characters</li>
          </ul>
        `;
                passwordMessage.style.color = 'green';
                passwordMessage.classList.remove('invalid');
            } else {
                passwordMessage.innerHTML = `
          <ul class="invalid">
            <li>Min 1 uppercase letter</li>
            <li>Min 1 lowercase letter</li>
            <li>Min 1 special character</li>
            <li>Min 1 number</li>
            <li>Min 8 characters</li>
          </ul>
        `;
                passwordMessage.classList.add('invalid');
            }
        });
    </script>
</body>

</html>