<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of Cellphones</h1>
<table border="1">
<tr>
    <td>Model</td>
    <td>Manufacturer</td>
    <td>Price</td>
    <td>Action</td>
</tr>
@foreach ($cell as $item)
    <tr>
        <td>{{$item->model}}</td>
        <td>{{$item->manufacturer}}</td>
        <td>{{$item->price}}</td>
        <td> <a href="{{route('cellphones.edit',['data'=>$item])}}">Edit</a> </td>
    </tr>
@endforeach
</table>
</body>
</html>