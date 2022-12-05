<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>{{$data['title']}}</h2>
<p><span>{{$data['tname']}}</span>&emsp;&emsp;<span>{{$data['author']}}</span></p>
<p>
    <span>
        @if($data['status']==1)
            发布
        @else
            不发布
        @endif
    </span>&emsp;&emsp;
    <span>{{$data['created_at']}}</span>
</p>
<p>&emsp;&emsp;{{$data['content']}}</p>
</body>
</html>
