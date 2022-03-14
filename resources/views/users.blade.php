<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($data as $ndata)
        <p>{{$ndata}}</p>
    @empty
        <p>No Data There!!</p>
    @endforelse
</body>
</html>
