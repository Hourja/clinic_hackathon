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


<form action="{{ route('search') }}" method="GET">
    @csrf
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>



</body>
</html>