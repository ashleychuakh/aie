<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Confirmation</title>
</head>
<body>
    <h1>Thanks for signing up!</h1>

    <p>
        We just need you to {{ url("confirm/{$account->confirmation_token}") }} confirm your email address real quick!
    </p>
</body>
</html>