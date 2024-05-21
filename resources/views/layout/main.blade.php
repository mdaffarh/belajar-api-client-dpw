<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ceritanya DPW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color:rgb(123, 227, 43);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">DPW Stuff</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori Berita
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/news/teknologi">Teknologi</a></li>
                <li><a class="dropdown-item" href="/news/olahraga">Olahraga</a></li>
                <li><a class="dropdown-item" href="/news/hiburan">Hiburan</a></li>
                <li><a class="dropdown-item" href="/news/ekonomi">Ekonomi</a></li>
                <li><a class="dropdown-item" href="/news/internasional">Internasional</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>