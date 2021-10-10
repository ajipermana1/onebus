<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">ONE BUS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jadwal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informasi</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> --}}
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="/login"
                    class="nav-link {{ Request::is('login') || Request::is('register') ? 'active' : '' }}"><i
                        class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
        </ul>
    </div>
</nav>
