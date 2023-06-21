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
          <p class="lead fw-bold mb-4 me-3">SignUP!</p>
        </div>
        <form action="{{ url('signup') }}" method="post">
          @csrf
          <div class="form-outline mb-4">
            <input type="text" name="name" class="form-control form-control-lg" placeholder="Name" />
          </div>
          
          <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" />
          </div>

          <div class="form-outline mb-4">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
          </div>
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 mb-3 mt-5 py-4">
            <div class="form-outline mb-4">
                <textarea name="desc" id="desc" cols="30" rows="3" class="form-control" placeholder="Description"></textarea>
            </div>
            <div class="text-center mt-4 pt-2">
                <input type="submit" class="btn btn-primary" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Register">
            </div>
        </div>
    </form>
    </div>
  </div>
  @endsection
</body>
</html>