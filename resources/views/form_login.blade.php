<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    @extends('template')
</head>
<body>
    @section('template')
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-8 col-lg-6 col-xl-4 mb-3 mt-5">
        <div class="d-flex align-items-center justify-content-between justify-content-lg-between">
          <p class="lead fw-bold mb-0 me-3">Hallo!</p>
        </div>
  
        <div class="d-flex my-3">
          
        </div>
        <form action="{{ url('login') }}" method="post">
          @csrf
          <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" />
          </div>
  
          <div class="form-outline mb-3">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
          </div>
  
          <div class="text-center mt-4 pt-2">
            <input type="submit" class="btn btn-primary" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">
        </form>
          <p class="small fw-bold mt-2 pt-1 mb-0">
            Don't have an account?
            <a href="register" class="text-decoration-none">Register</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  @endsection
</body>
</html>