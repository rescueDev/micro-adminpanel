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
                <ul class="navbar-nav ml-auto d-flex">
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

                    @else
                        <div class="col-12 d-flex align-items-center justify-content-around">
                            <h4 class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </h4>
                            <h4 class="nav-item">
                                <a class="nav-link" href="{{ route('companies-index') }}">Companies</a>
                            </h4>
                            <h4 class="nav-item">
                                <a class="nav-link" href="{{ route('employees-index') }}">Employees</a>
                            </h4>
                        </div>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
</header>
