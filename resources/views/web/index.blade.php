<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{url('logout')}}">
        @csrf
        <input type="submit" value="logout">
    </form>
</body>
</html>
