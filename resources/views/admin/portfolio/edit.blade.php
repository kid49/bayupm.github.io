
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->
@extends('backend.konten')

@section('kontenku')



<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
<a href="{{route('portfolio.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>

</div>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-4 mb-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-uppercase text-primary">Edit Portfolio : {{$port->nama}}</h6>
        </div>

        <div class="card-body">
            <form action="{{route('portfolio.update', $port->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="nama" value="{{$port->nama}}" placeholder="Nama Kategori">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Url Website</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="link" value="{{$port->link}}" placeholder="Url Website">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Masukkan Gambar</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar" value="{{$port->gambars}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Gambar Sebelumnya</label>
                    <div class="col-sm-10">
                    <img src="{{asset($port->gambar)}}" alt="{{$port->nama}}" width="200px">
                    </div>
                </div>

                <div class="form-group row float-right my-2 ">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Edit Portolio</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
</div>
</div>
</div>


@endsection