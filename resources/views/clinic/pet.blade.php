@extends('clinic/layouts/body',[
'title' => $pet->name . "'s " . "Page",
'current_menu_item' => 'pet-page'
])

@section('content')
     <h2>{{$pet ->name}}</h2>
          <img style="width:200px;height:auto;" src="/pets/{{$pet->photo}}" alt="">
          <li>Years: {{$pet->age}}</li>
           <li>Breed: {{$pet->breed}}</li>
            <li>Weight: {{$pet->weight}}</li>

<a href="{{route('client',$client->id)}}">Owner's Page</a>
@endsection