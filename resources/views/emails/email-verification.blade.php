<!DOCTYPE html>
<html>
<head>
    <title>Account Creation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
        }
        h3 {
            color: #333333;
            margin-bottom: 20px;
        }
        .message {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .logo img {
            display: block;
            margin-bottom: 20px;
            max-width: 200px;
            height: auto;
        }
        .button {
            margin-top: 20px;
        }
        .button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <!-- <img src="{{ asset('assets/images/Logo.png') }}" alt="logo" /> -->
        </div>
        <h3>Dear, {{ $emailData['name'] }}</h3>
        <div class="message">
            <p>Your account has been created successfully!</p>
            <div class="button">
                <a href="{{ route('verify', ['hash' => $emailData['hash']]) }}">Verify Your Email</a>
            </div>
        </div>
        <h3>Thank you for choosing our services!</h3>
    </div>
</body>
</html>
