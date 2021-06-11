<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 @if (Session::has('success_message'))

    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>

 @endif
<h2>Edit {{$pet->name}}</h2>
<form action="{{action('PetController@updatePet',[$pet->id])}}" method="post">
@csrf
@method('put')

<label>Pet Name: <input type="text" name="name" value="{{old('name',$pet->name)}}"></label>
<label>Breed: <input type="text" name="breed" value="{{old('breed',$pet->breed)}}"></label>
<label>Age: <input type="number" name="age" value="{{old('age',$pet->age)}}"></label>
<label>Weight: <input type="number" name="weight" value="{{old('weight',$pet->weight)}}"></label>

<input type="submit" value="save">

</form>



</body>
</html>