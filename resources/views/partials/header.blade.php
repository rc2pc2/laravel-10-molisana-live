<header class="text-center">
    <section class="logo">
        <img src="{{ Vite::asset('resources/img/molisana-logo.png') }}" alt="Molisana main logo">
    </section>

    <section class="navigation">
        <nav class="navbar-nav navbar-light container-fluid">
            <ul class="d-flex list-style-none justify-content-center mb-0">
                <li class="p-3">
                    <a href="{{ route('pages.home') }}">
                        Home
                    </a>
                </li>

                <li class="p-3 active">
                    <a href="{{ route('guest.pastas.index') }}">
                        Prodotti
                    </a>
                </li>

                <li class="p-3">
                    <a href="#">News</a>
                </li>
            </ul>
        </nav>
    </section>
</header>