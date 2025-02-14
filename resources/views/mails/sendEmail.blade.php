<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>New Message from {{ $name }}</h1>
    
    <p><strong>Email:</strong> {{ $email }}</p>
    <h3>Message:</h3>
    <p>{{ $emailMessage }}</p>  <!-- make sure $message is a string -->
</body>
</html>