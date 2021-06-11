<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<h1>Edit Client: {{$client->first_name}}</h1>


@if (Session::has('success_message'))

    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>

@endif

<form action="{{action('AdminController@update',[$client->id])}}" method="post">
@csrf
@method('put')


<label>
    First Name
    <input type="text" name="first_name" value="{{old('first_name',$client->first_name)}}">
</label>

<label> Surname
<input type="text" name="surname" value="{{old('surname',$client->surname)}}">
</label>
<br>
<input type="submit" value="Update">
<br>
<br>

</form>







<h2>Add Pet</h2>
<form action="{{action('PetController@storePet')}}" method="post">
@csrf

 <input type="hidden" value="{{$client->id}}" name="client_id" >


<label>Pet Name: <input type="text" name="name"></label>
<label>Breed: <input type="text" name="breed"></label>
<label>Age: <input type="number" name="age"></label>
<label>Weight: <input type="number" name="weight"></label>

<input type="submit" value="save">

</form>

@foreach($client->pets as $pet)
 <h2>{{$pet->name}}</h2>
          <img style="width:200px;height:auto;" src="/pets/{{$pet->photo}}" alt="">
          <li>Years: {{$pet->age}}</li>
           <li>Breed: {{$pet->breed}}</li>
            <li>Weight: {{$pet->weight}}</li>

    <a href="{{action('PetController@editPet',$pet->id)}}">Edit Pet</a>


    <form action="{{action('PetController@deletePet',$pet->id)}}" method='post'>
@csrf
@method('put')



<input type="submit" value="delete" onClick="!confirm('Are you sure?')&& event.preventDefault()">



    </form>
<hr>
@endforeach















</body>
</html>