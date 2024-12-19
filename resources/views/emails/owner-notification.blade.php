<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Inquiry Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background-color: white;
            padding: 20px 3rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            font-size: 16px;
        }

        .highlight {
            font-weight: bold;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #666;
            margin-top: 20px;
        }

        .text-primary {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            New Inquiry Received
        </div>
        <div class="content">
            <p>Hello Mr. Site Owner,</p>
            <p>You have received an inquiry from <strong>{{ $messageData['siteName'] }}</strong>:</p>
            <p><strong>Name:</strong> {{ $messageData['name'] }}</p>
            <p><strong>Email:</strong> {{ $messageData['email'] }}</p>
            <p><strong>Phone:</strong> {{ $messageData['phone'] ?? 'Not Provided' }}</p>
            <p><strong>Subject:</strong> {{ $messageData['subject'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $messageData['message'] }}</p>
        </div>
        <div class="footer">
            <p><a href="#" class="text-primary">Visit Us</a></p>
            <p><a href="mailto:support@introps.com" class="text-primary">Contact Support</a></p>
        </div>
    </div>
</body>

</html>