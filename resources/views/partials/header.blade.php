<header class="text-center">
    <section class="logo">
        <img src="{{ Vite::asset('resources/img/molisana-logo.png') }}" alt="Molisana main logo">
    </section>
    <section class="navigation">
        <nav class="navbar-nav navbar-light container-fluid">
            <ul class="d-flex list-style-none justify-content-center mb-0">
                <li class="p-3 {{ ( Route::currentRouteName() == 'pages.home') ? 'active' : '' }}">
                    <a href="{{ route('pages.home') }}">
                        Home
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'guest.pastas.index') ? 'active' : '' }}">
                    <a href="{{ route('guest.pastas.index') }}">
                        Prodotti
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'guest.mills.index') ? 'active' : '' }}">
                    <a href="{{ route('guest.mills.index') }}">
                        Mulini
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'guest.recipes.index') ? 'active' : '' }}">
                    <a href="{{ route('guest.recipes.index') }}">
                        Ricette
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'guest.pastas.create') ? 'active' : '' }}">
                    <a href="{{ route('guest.pastas.create') }}">
                        Nuova pasta
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'guest.mills.create') ? 'active' : '' }}">
                    <a href="{{ route('guest.mills.create') }}">
                        Nuovo mulino
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'guest.recipes.create') ? 'active' : '' }}">
                    <a href="{{ route('guest.recipes.create') }}">
                        Nuova ricetta
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</header>