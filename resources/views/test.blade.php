<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login By Ticket</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email"><br><br>
        {{-- <input type="password" name="password" placeholder="Password"><br><br> --}}
        <input type="submit" value="Login">
    </form>

</body>

</html>
