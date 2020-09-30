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
@foreach($studentValue as $st)
    <div>Ten Sinh Vien: {{$st->name}}</div>
    <div>SDT Sinh Vien: {{$st->phone}}</div>
@endforeach
<h2><a href="{{Route('Student-List')}}">List Student</a></h2>
</body>
</html>
