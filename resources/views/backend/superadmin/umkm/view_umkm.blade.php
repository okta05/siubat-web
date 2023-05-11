@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->

        @foreach($allDataUMKM as $key => $umkm)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 py-2">
                <img src="{{asset('backend/img/gesibu.svg')}}" class="card-img-top" alt="..." />
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <h5 class="card-title">Nama Produk : {{$umkm->nm_produk}}</h5>
                        <p class="card-title">Nama Pemilik : {{$umkm->nm_pemilik}}</p>
                        <p class="card-text">Harga : {{$umkm->harga}}</p>
                        <p class="card-text">Deskripsi : {{$umkm->deskripsi}}</p>
                        <p class="card-text">Alamat : {{$umkm->alamat}}</p>
                    </div>
                    <div>
                        <a href="edit-produk.html" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    <!-- /.container-fluid -->

    <a href="tambah.html" class="btn btn-danger">Tambah Tempat</a>
</div>
<!-- End of Main Content -->
@endsection