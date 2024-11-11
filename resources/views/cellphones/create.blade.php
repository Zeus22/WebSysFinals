<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create New Cellphone</h1>
    <div>
        <form action="{{route('cellphones.store')}}" method="POST">
            @csrf
            @method('post')
            <input type="text" name ="model" placeholder="what is the model name?">
            <input type="text" name ="manufacturer" placeholder="who is the manufacturer?">
            <input type="text" name ="price" placeholder="price">
            <button type="submit">Sign in</button>
        </div>
        </form>
    </div>
</body>
</html>