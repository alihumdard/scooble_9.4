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
    </style>
</head>
<body>
    <div class="container">
        <h3>Dear, {{ $emailData['name'] }}</h3>
        <div class="message">
            <h3>{{ $emailData['body'] }}</h3>
            <p>You have subscribed to the package: <strong>{{ $emailData['package_name'] }}</strong>.</p>
        </div>
        <div class="footer">
        <h3>Thank you for choosing our services!</h3>
        </div>
    </div>
</body>
</html>
