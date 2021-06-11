<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Search Results</h1>


@if($clients->isNotEmpty())
    @foreach ($clients as $client)
        <div class="owner-list">
             <a href="{{action('clientController@show',[$client->id])}}">
        {{ $client->first_name }}{{ $client->surname }}

        </div>
    @endforeach
@else
    <div>
        <h2>No clients</h2>
    </div>
@endif



</body>
</html>