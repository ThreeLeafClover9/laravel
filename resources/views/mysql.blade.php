<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mysql</title>
    </head>
    <body>
        @foreach($samples as $sample)
        <div>
            <span> {{ $sample->name }}</span>
            <span> {{ $sample->description }}</span>
            <span> {{ $sample->votes }}</span>
        </div>
        @endforeach
    </body>
</html>
