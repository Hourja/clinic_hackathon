<header>
    <nav>

        <a class="nav_link" href="{{route('home')}}" @if ($current == 'home') class="current" @endif>HOME</a>
        <a class="nav_link" href="{{route('database-api')}}"@if ($current == 'api') class="current" @endif>API</a>
        <a class="nav_link" href="{{route('about_us')}}"@if ($current == 'about_us') class="current" @endif>ABOUT</a>
        <a class="nav_link" href="{{route('client-create')}}"@if ($current == 'create-client') class="current" @endif>ADMIN</a>

    </nav>


    {{-- SEARCH FUNCTIONALITY IN ALL OUR PAGES --}}
<br>
   <div class="search__container">
        <form action="{{ route('search') }}" method="GET">
        @csrf

        <input type="text" class="search__input" name="search"  placeholder="Search" required />

        <button class="search__submit--button" type="submit">SEARCH</button>

       </form>
   </div>
</header>
