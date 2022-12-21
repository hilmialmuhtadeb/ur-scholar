<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand py-0" href={{ route('home') }}>
      <img src={{ asset('svg/Brandu.png') }} alt="Brand image" style="height: 50px;"> UrScholar
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href={{ route('scholarship.index') }}>Beasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('about') }}>Tentang</a>
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
              <li><a class="dropdown-item" href={{ route('user.show', Auth::user()->id) }}>Profil</a></li>
              <li><a class="dropdown-item" href={{ route('bookmark.index') }}>Beasiswa disimpan</a></li>
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
            <a class="nav-link bg-primary px-3 text-white rounded" href={{ route('login') }}>Masuk</a>
          </li>
          <li class="nav-item ms-md-2">
            <a class="nav-link" href={{ route('register.index') }}>Daftar</a>
          </li>
        @endguest

      </ul>
    </div>
  </div>
</nav>