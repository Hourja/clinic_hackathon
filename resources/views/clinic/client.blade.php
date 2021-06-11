@extends('clinic/layouts/body',[
'title' => 'Client Profile',
'current_menu_item' => 'client'
])


@section('content')
    <h1>{{$client->first_name}} {{$client->surname}}</h1>

<h2><a href="{{route('client-edit',[$client->id])}}">Edit Owner</a></h2>

    <ul>

         @foreach($client->pets as $pet)
           <li><a href="{{route('pet',[$client->id, $pet->id])}}">{{$pet->name}}</a></li>
           <img style="width:200px;height:auto;" src="/pets/{{$pet->photo}}" alt="pet photo">

         @endforeach
    </ul>

<a href="{{route('home')}}">Back to (need to make it to results)</a>

@endsection
