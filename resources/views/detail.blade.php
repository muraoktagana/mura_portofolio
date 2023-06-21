<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mura_Shop</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/style.css">
    @extends('template')
</head>
<body>
@section('template')
	<section class="py-3">
        <div class="container px-4 px-lg-5 my-3">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-7">
                    <img class="img-fluid mb-2 mb-md-0" src="{{asset('img/FUYmc-xakAAvNYA.jpg')}}" alt="..." />
                </div>
                <div class="col-md-5">
                    <div class="">
                        <h1 class="display-5 mt-2 fw-bolder">Judul</h1>
                        <p class="lead">detail descriptsi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>