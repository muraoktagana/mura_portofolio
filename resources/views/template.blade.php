<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mura Okta</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg bg-body-transparent fixed-top bg-light">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand" href="/">OKtagana</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signin">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    {{-- NAVBAR --}}
<div class="container-fliud">
  <div class="p-5 mt-5 bg-light">
    @yield('template')
  </div>
</div>

</body>
</html>