<h2>Add Pet</h2>
<form action="{{route('pet-store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" value="{{$client->id}}" name="client_id">

    {{-- ADDING NEW PET NAME --}}

    @component('clinic.components.form-group',[
    'label' => 'Pet Name',
    'name' => 'Pet Name'
    ])

    <input type="text" name="name" placeholder="Add name">

    @endcomponent


    {{-- ADDING NEW BREED --}}



    @component('clinic.components.form-group',[
    'label' => 'Breed',
    'name' => 'Breed'
    ])

    <input type="text" name="breed" placeholder="Add breed">

    @endcomponent


    {{-- ADDING NEW AGE --}}

    @component('clinic.components.form-group',[
    'label' => 'Age',
    'name' => 'age'
    ])

    <input type="text" name="age" placeholder="Add age">

    @endcomponent



    {{-- ADDING WEIGHT IN KG --}}

    @component('clinic.components.form-group',[
    'label' => 'Weight(kg)',
    'name' => 'weight'
    ])

    <input type="text" name="weight" placeholder="Add weight in kg">

    @endcomponent



    {{-- ADDING PHOTO --}}

    @component('clinic.components.form-group',[
    'label' => 'Photo',
    'name' => 'photo'
    ])

    <input type="file" name="photo" accept="image/*">


    @endcomponent


    <input type="submit" value="save">

</form>




{{-- SHOW ALL CLIENT'S PETS
YOU NEED TO PRIVE ALL CLIENTS WITH PETS TO ACCESS THEIR ID'S IN ORDER FOR THE REST OF THIS CODE TO WORK
--}}

@foreach($client->pets as $pet)

<h2>{{$pet->name}}</h2>
<img style="width:200px;height:auto;" src="/storage/{{$pet->photo}}" alt="">
<li>Years: {{$pet->age}}</li>
<li>Breed: {{$pet->breed}}</li>
<li>Weight: {{$pet->weight}}</li>

<a href="{{route('pet-edit',$pet->id)}}">Edit Pet</a>



{{-- DELETE PET BUTTON --}}

<form action="{{route('pet-delete',$pet->id)}}" method='post'>
    @csrf
    @method('put')

    @component('clinic.components.form-group',[
    'label' => null,
    'name' => null,
    ])

    <input type="submit" value="Delete" onClick="!confirm('Are you sure?')&& event.preventDefault()">
</form>




@endforeach
@endcomponent