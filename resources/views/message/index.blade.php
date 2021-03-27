<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message_Board</title>
</head>
<body>
    {{ $title }}
    <a href="newMessage">新增留言</a>
    @foreach ($data as $item)
        <p>
         {{$item}}
        </p>
    @endforeach
</body>
</html>