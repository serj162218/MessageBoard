<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewMessage</title>
</head>
<body>
    <form action="" method="post">
        <h3>{{$data->owner}}</h3>
        <input name="title" value="{{ $data->title }}">
        {{-- <button type="submit">更改內容</button> --}}
    </form>
    
</body>
</html>