<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mura Okta</title>
    @extends('template')
</head>
<body>
    @section('template')
    <section class="d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Mura OKtagana</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic fugit illo cum facilis unde debitis mollitia provident molestias delectus culpa quos, dolorum fuga consequuntur veniam soluta adipisci? Quas, sint aspernatur.</p>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <div class="row gy-4 justify-content-center mt-5">
        @foreach ($project as $item)
    
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card h-100">
                <a href="detail" class="text-decoration-none">
                    <img src="storage/{{$item->foto}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <div class="text-dark">
                            <h4>{{$item->judul}}</h4>
                            <p>{{$item->deskripsi}}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

@endforeach
    @endsection
</body>
</html>