<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>ADD NEW CLIENT</h1>


<form action="{{action('AdminController@store')}}" method="post">
@csrf


<label>
    First Name
    <input type="text" name="first_name">
</label>

<label> Surname
<input type="text" name="surname">
</label>
<br>
<input type="submit" value="Add new Client">
<br>
<br>
<a href="">Add Pet</a>












</form>




</body>
</html>