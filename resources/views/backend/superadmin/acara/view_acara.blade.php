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
        @foreach($allDataAcara as $key => $acara)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card d-inline-block w-100 p-2" style="
            height: 100%!important;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
            ">
                <!-- @if($acara->foto)
                <img src="{{asset('storage/'. $acara->foto)}}" alt="" class="card-img-top"
                    style="height: auto; display: block;">
                @else
                <img src="{{asset('backend/img/undraw_profile.svg')}}" alt="" class="card-img-top">
                @endif
                <hr> -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <ul class="list-group">
                            <li class="list-unstyled">
                                <h2 class="card-title">nama : {{$acara->nm_produk}}</h5>
                            </li>
                            <li class="list-unstyled">
                                <p class="">Pemilik: {{$acara->tgl_mulai}}</p>
                            </li>
                            <li class="list-unstyled">
                                <p class="">Harga: Rp. {{$acara->tgl_selesai}}</p>
                            </li>
                            <li class="list-unstyled">
                                <p class="">Alamat: {{$acara->durasi}}</p>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-warning" title="Ubah"><i
                            class="fas fa-fw fa-edit"></i></a>
                    <a href="#" class="btn btn-danger" id="delete" title="Hapus"><i
                            class="fas fa-fw fa-trash"></i></a>
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