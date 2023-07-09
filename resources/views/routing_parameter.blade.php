<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>라우팅</title>
</head>
<body>
    {{ $id }}
    {{ $data }}

    <form action="/api/post" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>
</body>
</html>
