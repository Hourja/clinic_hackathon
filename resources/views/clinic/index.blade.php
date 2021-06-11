<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinic</title>
</head>
<body>
    <h1>Welcome to our Clinic</h1>
    @foreach ($clients as $client)

    <div>Owner: {{$client->first_name}} {{$client->surname}}</div>
    @foreach ($client->pets as $pet)

    <div>{{$pet->name}}</div>

    @endforeach


    @endforeach

</body>
</html>