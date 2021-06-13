<header>
    <nav>
        <a href="{{route('home')}}" @if ($current == 'home') class="current" @endif>HOME</a>
        <a href="{{route('database-api')}}"@if ($current == 'api') class="current" @endif>API</a>
        <a href="{{route('about_us')}}"@if ($current == 'about_us') class="current" @endif>ABOUT</a>
        <a href="{{route('client-create')}}"@if ($current == 'create-client') class="current" @endif>ADMIN</a>

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
