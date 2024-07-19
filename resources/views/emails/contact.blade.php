<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p><strong>First Name:</strong> {{ $contact['first_name'] }}</p>
    <p><strong>Last Name:</strong> {{ $contact['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $contact['phone_number'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact['message'] }}</p>
</body>
</html>