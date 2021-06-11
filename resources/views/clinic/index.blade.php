@extends('clinic/layouts/body',[
'title' => 'Home',
'current_menu_item' => 'home'
])


@section('content')

<h1 class="homepage_heading">Welcome to our Clinic</h1>

{{-- <div>Search for a client</div> --}}

{{-- <form action="{{ route('search') }}" method="GET">

    @csrf

    <input type="text" name="search" required />

    <button type="submit">Search</button>

</form> --}}


<div> NEWS</div>
<div>  RANDOM PET PHOTO?</div>




@endsection