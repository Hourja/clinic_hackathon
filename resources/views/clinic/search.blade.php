@extends('clinic/layouts/body',[
'title' => 'Search Results',
'current_menu_item' => 'search'
])

@section('content')

<h1> Search Results</h1>


@if($clients->isNotEmpty())

@foreach ($clients as $client)

<div class="owner-list">

    <a href="{{action('clientController@show',[$client->id])}}">

        <div class="search_result">{{ $client->first_name }}{{ $client->surname }}</div>

    </a>
</div>

@endforeach

@else
<div class='no-results'>
    <h2>No clients found </h2>
</div>
@endif


@endsection