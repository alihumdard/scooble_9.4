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

        .inputfield {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
        }

        .input {
            height: 3em;
            width: 3em;
            border: 2px solid #452C88;
            outline: none;
            text-align: center;
            /* font-size: 1.5em; */
            border-radius: 0.3em;
            background-color: #ffffff;
            /* outline: none; */
            /* Hide number field arrows */
            /* -moz-appearance: textfield; */
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .input:disabled {
            color: #89888b;
        }

        .input:focus {
            border: 3px solid #ffb800;
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
                    <div class="col-md-12 mb-3">
                        <h3>Forgot Password?</h3>
                        <p class="mb-0">Please enter the email associated with your account and we'll send an email with link, where you can change your password.</p>
                    </div>
                    <div class="col-md-12">
                        <form action="/forgot_password" method="post" >
                            @csrf
                            <label for="">
                                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5938 0H1.40625C0.62959 0 0 0.671562 0 1.5V10.5C0 11.3284 0.62959 12 1.40625 12H13.5938C14.3704 12 15 11.3284 15 10.5V1.5C15 0.671562 14.3704 0 13.5938 0ZM13.5938 1.5V2.77516C12.9369 3.34575 11.8896 4.233 9.65077 6.10297C9.15738 6.51694 8.18004 7.51147 7.5 7.49988C6.82008 7.51159 5.84241 6.51678 5.34923 6.10297C3.11074 4.23328 2.06323 3.34584 1.40625 2.77516V1.5H13.5938ZM1.40625 10.5V4.69994C2.07756 5.27028 3.02956 6.07063 4.48061 7.28263C5.12095 7.82028 6.24234 9.00719 7.5 8.99997C8.75147 9.00719 9.85866 7.8375 10.5191 7.28288C11.9701 6.07091 12.9224 5.27034 13.5938 4.69997V10.5H1.40625Z" fill="#BDBDBD" />
                                </svg>
                            </label>
                            <input type="email" name="email" value="{{(isset($email))?$email:''}}" id="email" class="form-control mb-3" placeholder="Email">
                            @if (Session::has('message'))
                            <lable class="text-danger"> {{ session('message') }}</lable>
                            @endif
                    </div>
                    <div class="col-md-12 my-4">
                        <button class="btn text-white text-center">Send</button>
                        <p class="mt-3">You can <a href="/login">Login here !</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@if (Session::has('otp'))
    <!-- Display the modal using JavaScript/jQuery or CSS styles -->
    <script>
        // JavaScript/jQuery code to show the modal
        // Replace the selector and code with your actual modal implementation
        $(document).ready(function() {
            $('#forgetpassword').modal('show');
        });
    </script>
@endif

    <!-- forgetpassword Button Modal -->
    <div class="modal fade" id="forgetpassword" tabindex="-1" aria-labelledby="forgetpasswordLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <h5 class="modal-title" id="forgetpasswordLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1FADF" />
                            <path d="M37.75 16H18.25C17.0073 16 16 17.3431 16 19V37C16 38.6569 17.0073 40 18.25 40H37.75C38.9927 40 40 38.6569 40 37V19C40 17.3431 38.9927 16 37.75 16ZM37.75 19V21.5503C36.699 22.6915 35.0234 24.466 31.4412 28.2059C30.6518 29.0339 29.0881 31.0229 28 30.9998C26.9121 31.0232 25.3479 29.0336 24.5588 28.2059C20.9772 24.4666 19.3012 22.6917 18.25 21.5503V19H37.75ZM18.25 37V25.3999C19.3241 26.5406 20.8473 28.1413 23.169 30.5653C24.1935 31.6406 25.9877 34.0144 28 33.9999C30.0024 34.0144 31.7739 31.675 32.8306 30.5658C35.1522 28.1418 36.6759 26.5407 37.75 25.3999V37H18.25Z" fill="#0F771A" />
                            <rect x="4" y="4" width="48" height="48" rx="24" stroke="#ECFDF3" stroke-width="8" />
                        </svg>
                        <h3 class="mt-3">Check your email</h3>
                        <p class="mb-0">We sent a verification code to</p>
                        <p>{{session('email')}}</p>
                        <form action="/forgot_password" method="post">
                            @csrf
                            <input type="hidden" name='email' value="{{session('email')}}"   />
                        <div class="inputfield mb-4">
                            <input type="number" name='no1' maxlength="1" class="input"  />
                            <input type="number"  name='no2' maxlength="1" class="input"  />
                            <input type="number" name='no3' maxlength="1" class="input"  />
                            <input type="number" name='no4'  maxlength="1" class="input"  />
                            <input type="number" name='no5' maxlength="1" class="input"  />
                        </div>

                            <button class="btn btn-sm text-white" style="background-color: #452C88; border-radius: 8px; width: 20%;" >Verify Email</button>
                            </form>
                            @if (Session::has('otp'))
                            <lable class="text-danger"> {{ session('otp') }}</lable>
                            @endif
                        <p>Didn’t receive the email? <a href="/forgot_password?email={{session('email')}}" style="color: #452C88;">Click to resend</a></p>
                        <div class="py-5 mt-5">
                            <a href="/login" class="text-dark">
                                <p>
                                    <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.5 16L1 8.5L8.5 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.0415 8.5H17.2498" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Back to Login
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forgetpassword Button Modal End -->

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
        //Initial references
        const input = document.querySelectorAll(".input");
        const inputField = document.querySelector(".inputfield");
        const submitButton = document.getElementById("submit");
        let inputCount = 0,
            finalInput = "";

        //Update input
        const updateInputConfig = (element, disabledStatus) => {
            if (!disabledStatus) {
                element.focus();
            } else {
                element.blur();
            }
        };

        input.forEach((element) => {
            element.addEventListener("keyup", (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, "");
                let {
                    value
                } = e.target;

                if (value.length == 1) {
                    updateInputConfig(e.target, true);
                    if (inputCount <= 4 && e.key != "Backspace") {
                        finalInput += value;
                        if (inputCount < 4) {
                            updateInputConfig(e.target.nextElementSibling, false);
                        }
                    }
                    inputCount += 1;
                } else if (value.length == 0 && e.key == "Backspace") {
                    finalInput = finalInput.substring(0, finalInput.length - 1);
                    if (inputCount == 0) {
                        updateInputConfig(e.target, false);
                        return false;
                    }
                    updateInputConfig(e.target, true);
                    e.target.previousElementSibling.value = "";
                    updateInputConfig(e.target.previousElementSibling, false);
                    inputCount -= 1;
                } else if (value.length > 1) {
                    e.target.value = value.split("")[0];
                }
                submitButton.classList.add("hide");
            });
        });

        window.addEventListener("keyup", (e) => {
            if (inputCount > 4) {
                submitButton.classList.remove("hide");
                submitButton.classList.add("show");
                if (e.key == "Backspace") {
                    finalInput = finalInput.substring(0, finalInput.length - 1);
                    updateInputConfig(inputField.lastElementChild, false);
                    inputField.lastElementChild.value = "";
                    inputCount -= 1;
                    submitButton.classList.add("hide");
                }
            }
        });

        const validateOTP = () => {
            alert("Success");
        };

        //Start
        const startInput = () => {
            inputCount = 0;
            finalInput = "";
            input.forEach((element) => {
                element.value = "";
            });
            updateInputConfig(inputField.firstElementChild, false);
        };

        window.onload = startInput();
    </script>
</body>

</html>