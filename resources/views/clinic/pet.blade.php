<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h2>{{$pet->name}}</h2>
          <img style="width:200px;height:auto;" src="/pets/{{$pet->photo}}" alt="">
          <li>Years: {{$pet->age}}</li>
           <li>Breed: {{$pet->breed}}</li>
            <li>Weight: {{$pet->weight}}</li>

<a href="{{action('clientController@show',$client->id)}}">Owner's Page</a>
</body>
</html>