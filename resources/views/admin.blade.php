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

    <div class="d-flex justify-content-end">
        <a href="tambah" class="btn btn-outline-primary">Tambah data</a>
    </div>

    <div class="row gy-4 justify-content-center mt-5">
@foreach ($project as $item)
    
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card h-100">
                
                    <img src="storage/{{$item->foto}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <div class="text-dark">
                            <h4>{{$item->judul}}</h4>
                            <p>{{$item->deskripsi}}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="">
                            <a href="hapus/{{$item->id}}" class="btn btn-outline-danger">Delete</a>
                            <a href="ubah/{{$item->id}}" class="btn btn-outline-warning">Update</a>
                        </div>
                    </div>

            </div>
        </div>

@endforeach
    </div>

    @endsection
</body>
</html>