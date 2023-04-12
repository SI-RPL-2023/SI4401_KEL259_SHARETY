<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid mx-5">
            <img src="logo-sharety.png" alt="Logo" width="95" height="39" class="d-inline-block align-text-top me-4">
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Dashboard') ? 'active' : ''  }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Donasi') ? 'active' : ''  }}" href="/donasi">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Berita') ? 'active' : ''  }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Tentang Kami') ? 'active' : ''  }}" href="/tentang">Tentang Kami</a>
                </li>
            </ul>

            <span class="navbar-text">
                <a href="/register" class="btn btn-warning d-flex me-2 fw-bold" style="color:white;">Register</a>
            </span>
            <span class="navbar-text">
            <a href="/login" class="btn btn-primary d-flex me-2 fw-bold" style="color:white;">Login</a>
            </span>

        </div>
    </nav>