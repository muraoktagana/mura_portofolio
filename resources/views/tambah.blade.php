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
          <p class="lead fw-bold mb-0 me-3"></p>
        </div>
  
        <div class="d-flex my-3">
          
        </div>
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-outline mb-4">
            <input type="text" name="judul" class="form-control form-control-lg" placeholder="Judul" value="{{$project->judul}}" />
          </div>
  
          <div class="form-outline mb-4">
            <input type="text" name="deskripsi" class="form-control form-control-lg" placeholder="Deskripsi" value="{{$project->deskripsi}}"/>
          </div>

          <div class="form-outline mb-4">
            <input type="file" name="foto" class="form-control form-control-lg"/>
          </div>
  
          <div class="text-center mt-4 pt-2">
            <input type="submit" class="btn btn-primary" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="{{$button}}">
            </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
</body>
</html>