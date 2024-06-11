<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HIMASI I Rajut Aksara</title>

    <link href="/css/beranda.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:white; padding-left: 140px; font-family: 'Itim', sans-serif; font-size: 24px;">HIMASI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-dark">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Program") ? 'active' : '' }}" href="/program">Program</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" {{ ($title === "Profil") ? 'active' : '' }}href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/tehim">Tentang HIMASI</a></li>
            <li><a class="dropdown-item" href="/stror">Struktur Organisasi</a></li> 
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" {{ ($title === "masuk") ? 'active' : '' }} href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Masuk Ke Akun?
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/log_user">SEBAGAI USER</a></li>
            <li><a class="dropdown-item" href="/log_admin">SEBAGAI ADMIN</a></li>
            <li><a class="dropdown-item" href="/log_kabid">SEBAGAI KABID</a></li>
          </ul>
        </li>
      
    </div>
  </div>
</nav>

<div class="container mt-4">
    @yield('container')
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
  </body>
</html>