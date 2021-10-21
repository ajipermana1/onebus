<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top mb-2">
    <a class="navbar-brand" href="/second">ONE BUS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @can('admin')



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('admin*') ? 'active' : '' }}" href="/admin"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/admin">Main</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Manage Rutes</a>
                        <a class="dropdown-item" href="#">Else</a>
                    </div>
                </li>
            @endcan
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('jdwl*') ? 'active' : '' }}" href="/jdwl"
                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Jadwal
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/jdwl">Main</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Manage Jadwal</a>
                    <a class="dropdown-item" href="#">Else</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('info*') ? 'active' : '' }}" href="/info"
                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informasi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/info">Main</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Manage Informasi</a>
                    <a class="dropdown-item" href="#">Else</a>
                </div>
            </li>


            {{-- <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('admin') ? 'active' : '' }}" href="#"
                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/admin">Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item"> <i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                    {{-- <a class="dropdown-item" href="#"> <i class="bi bi-box-arrow-right"></i> Logout</a> --}}

                </div>
            </li>
        </ul>
    </div>
</nav>
