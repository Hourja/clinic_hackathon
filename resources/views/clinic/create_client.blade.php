@extends('clinic/layouts/body',[
'title' => 'Create client',
'current_menu_item' => 'create-client'
])



@section('content')

<h1>ADD NEW CLIENT</h1>


<form action="{{route('client-store')}}" method="post">
@csrf


<label>
    First Name :
    <input type="text" name="first_name">
</label>
<br>
<label> Surname :
<input type="text" name="surname">
</label>



<br>
<input type="submit" value="Confirm">

</form>
@endsection
