<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
        <div class="container">

            {{-- Left menu --}}
            <div class="menu-nav">
                {{-- Logo --}}
                <div class="logo-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                    </a>
                </div>
            </div>


            {{-- Right menu --}}
            <div class="menu-nav">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <button type="button" name="button" class="nav-button">

                                <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fas fa-home"></i>
                                    {{ __('Login') }}
                                </a>
                            </button>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <button type="button" name="button" class="nav-button">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <i class="far fa-clipboard"></i>
                                        {{ __('Registrati') }}
                                    </a>
                                </button>
                            </li>
                        @endif
                    @else
                        <ul class="col-12 d-flex justify-content-around">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('companies-index') }}">Companies</a>
                            </li>
                            <li>
                                <a href="{{ route('employees-index') }}">Employees</a>
                            </li>
                        </ul>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
</header>
