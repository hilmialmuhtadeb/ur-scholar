<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/">UrScholar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/scholarship">Beasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang</a>
        </li>
        <li class="nav-item">
          <span class="nav-link mx-3"> | </span>
        </li>
        
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Beasiswa disimpan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action={{ route('auth.logout') }} method="post">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger">Keluar</button>
                </form>
              </li>
            </ul>
          </li>
        @endauth
        @guest
          <li class="nav-item">
            <a class="nav-link bg-primary text-white rounded" href={{ route('login.index') }}>Masuk</a>
          </li>
          <li class="nav-item ms-md-2">
            <a class="nav-link" href={{ route('register.index') }}>Daftar</a>
          </li>
        @endguest

      </ul>
    </div>
  </div>
</nav>