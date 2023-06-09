<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @livewireStyles
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="{{asset("css/style.css")}}" rel="stylesheet">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a class="navbar-brand fw-bold fs-3" href="#">Adi Game</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="ms-auto navbar-nav">
          <a class="nav-link {{Request::is("/") ? "active" : ""}}"href="{{route("home")}}">Home</a>
          <a class="nav-link {{Request::is("settings") ? "active" : ""}}" href="{{route("settings")}}">Settings</a>
        </div>
      </div>
    </div>
  </nav>
  @yield("content")


  @livewireScripts

  <script src="//cdn.jsdelivr.net/npm/eruda"></script>
  <script>
    eruda.init();
  </script>
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{asset("js/script.js")}}"></script>
</body>
</html>