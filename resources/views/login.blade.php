<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{ route('post-login') }}">
        @csrf
        <input name="username" placeholder="Username" type="text" />
        <input name="password" placeholder="Password" type="password" />
        <button type="submit">Submit</button>
    </form>
</body>
</html>