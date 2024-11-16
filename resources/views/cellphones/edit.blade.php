<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update cellphone information</h1>
    <div>
        <form action="" method="POST">
            @csrf
            @method('post')
            <input type="text" name ="model" placeholder="what is the model name?" value="{{$data->model}}" >
            <input type="text" name ="manufacturer" placeholder="who is the manufacturer?" value="{{$data->manufacturer}}">
            <input type="text" name ="price" placeholder="price" value="{{$data->price}}">
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>