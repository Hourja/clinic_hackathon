<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
</head>
<body>

    <h1>{{$client->first_name}} {{$client->surname}}</h1>

    <ul>

         @foreach($client->pets as $pet)
           <h2><a href="{{action('clientController@pet',[$client->id, $pet->id])}}">{{$pet->name}}</a></h2>


           <img style="width:200px;height:auto;" src="/pets/{{$pet->photo}}" alt="">

         @endforeach
    </ul>

<a href="{{action('clientController@index')}}">Back to home</a>



</body>
</html>