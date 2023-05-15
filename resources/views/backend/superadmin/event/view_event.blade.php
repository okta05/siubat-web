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
        <div class="col-xl-3 col-md-6 mb-4">
            @foreach($allDataEvent as $key => $event)
            <div class="card h-100 py-2">
                <img src="{{asset('backend/img/gesibu.svg')}}" class="card-img-top" alt="..." />
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <h5 class="card-title">{{$event->nama}}</h5>
                        <p class="card-text">{{$event->tgl_mulai}}</p>
                        <p class="card-text">{{$event->tgl_selesai}}</p>
                        <p class="card-text">{{$event->durasi}}</p>
                        <a href="edit-produk.html" class="btn btn-dark">Edit</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <!-- /.container-fluid -->

    <a href="tambah.html" class="btn btn-danger">Tambah Tempat</a>
</div>
<!-- End of Main Content -->
@endsection