<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to {{ config('app.name')}}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f8fc;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 650px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            
            color: #ffffff;
            text-align: center;
            padding: 15px;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 0.5px;
        }

        .email-body {
            padding: 10px 30px;
            color: #333;
            line-height: 1.7;
        }

        .email-body h2 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .email-body p {
            margin: 10px 0;
        }

        .highlight {
            font-weight: 600;
            color: #007bff;
        }

        .panel {
            background-color: #f0f7ff;
            border-left: 4px solid #007bff;
            padding: 15px;
            margin: 25px 0;
            border-radius: 5px;
            font-size: 15px;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff !important;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 6px;
            margin-top: 20px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .email-footer {
            background-color: #f0f7ff;
            text-align: center;
            padding: 15px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <a href="index.html" class="d-flex align-items-end" style="text-decoration: none">
                <img src="{{ asset('home_assets/assets/img/logo-img.75823a2d.svg')}}" alt="" height="80px">
                <span class="usa-logo__text ms-2"
                    style="color: #b50909; font-size: 1.5rem; padding-bottom: 4px; font-weight: 400; text-decoration: none;">Auctions®</span>
            </a>
        </div>

        <div class="email-body">
            <h2>Hello {{ $fullname }}, </h2>
            <p>Thank you for registering with <strong>{{ config('app.name')}}</strong>!</p>

            <p>Your account has been successfully created with the username:
                <span class="highlight">{{ $username }}</span>.
            </p>

            <p>Before you start bidding, please ensure your profile and notification settings are properly updated to
                receive auction alerts and updates.</p>

            <div class="panel">
                If your registration requires approval, kindly send an email to
                <strong>{{ config('mail.from.address') }}</strong>
                and include your username for faster verification.
            </div>

            <p style="text-align: center;">
                <a href="{{ config('app.url') }}" class="btn">Visit {{ config('app.name')}}</a>
            </p>

            <p>We’re glad to have you onboard — let’s make your bidding experience rewarding!</p>
            <p>Warm regards, <br> <strong>The {{ config('app.name')}} Team</strong></p>
        </div>

        <div class="email-footer">
            © {{ date('Y') }} {{ config('app.name')}}. All rights reserved.<br>
            <a href="{{ config('app.url') }}" style="color: #007bff; text-decoration: none;">Visit Website</a>
        </div>
    </div>
</body>

</html>