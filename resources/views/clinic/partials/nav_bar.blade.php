<header>
    <nav>
        <a href="{{route('home')}}" @if ($current == 'home') class="current" @endif>Home</a>
        <a href="{{route('database-api')}}"@if ($current == 'api') class="current" @endif>API</a>
        <a href="{{route('about_us')}}"@if ($current == 'about_us') class="current" @endif>About us</a>
        <a href="{{route('client-create')}}"@if ($current == 'create-client') class="current" @endif>Administration</a>
    </nav>


    {{-- SEARCH FUNCTIONALITY IN ALL OUR PAGES --}}
<br>
    <form action="{{ route('search') }}" method="GET">
    @csrf

    <input type="text" name="search" required />

    <button type="submit">Search</button>

</form>
</header>