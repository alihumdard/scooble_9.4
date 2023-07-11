<!DOCTYPE html>
<html>
<head>
    <title>Subscription Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        h3 {
            color: #333333;
            margin-bottom: 20px;
        }
        h2 {
            color: #555555;
            margin-bottom: 20px;
        }
        .message {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
        }
        .logo {
            text-align: left;
        }
        .logo img {
            display: block;
            margin: 0;
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ $message->embed(public_path('assets/images/Logo.png')) }}" alt="logo" />
        </div>
        <h3>Dear, {{ $emailData['name'] }} ali</h3>
        <div class="message">
            <h3>{{ $emailData['body'] }}</h3>
            <p>Your default password is: <strong>{{ $emailData['password'] }}</strong>.</p>
            <p>You can log in to your account through this link: <strong><a href="{{ URL::to('/login') }}">Login</a></strong>.</p>
        </div>
        <div class="footer">
            <h3>Thank you for choosing our services!</h3>
        </div>
    </div>
</body>
</html>
