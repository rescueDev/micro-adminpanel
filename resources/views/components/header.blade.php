<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/">CRM ADMIN PANEL</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">

                    <a class="<?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active nav-link' : 'nav-link'; ?>"
                        href="/">Home</a>
                </li>
                <li class="nav-item">

                    <a class="<?php echo $_SERVER['REQUEST_URI'] == '/companies' ? 'active nav-link' : 'nav-link'; ?>"
                        href="{{ route('companies-index') }}">Companies</a>
                </li>
                <li class="nav-item">
                    <a class="<?php echo $_SERVER['REQUEST_URI'] == '/employees' ? 'active nav-link' : 'nav-link'; ?>"
                        href="{{ route('employees-index') }}">Employees</a>
                </li>
                <li class="nav-item">
                </li>
            </ul>
            @if (!Auth::user())
                <div class="nav-item">
                    <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                </div>

            @else
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('POST')
                    <button type=" button" name="button" class="btn btn-outline-danger">
                        {{ __('Logout') }}
                        <i class="fas fa-home"></i>
                    </button>
                </form>
            @endif

        </div>
    </nav>

</header>
