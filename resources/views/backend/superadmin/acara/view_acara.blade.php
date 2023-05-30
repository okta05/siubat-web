@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div>
        <a href="{{route('acara.add')}}" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i> Tambah UMKM
        </a>

        <a href="{{route('dashboard')}}" class="btn btn-primary mb-3">Kembali</a>
    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        @foreach($allDataAcara as $key => $acara)
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card d-inline-block w-100 p-2" style="
            height: 100%!important;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
            ">
                @if($acara->foto)
                <img src="{{asset('storage/'. $acara->foto)}}" alt="" id="cover_acara1" class="card-img-top"
                    style="height: auto; display: block;">

                @else
                <img src="{{asset('backend/img/no-image.jpg')}}" alt="" id="cover_acara1" class="card-img-top">
                @endif
                <hr>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <ul class="list-group">
                            <li class="list-unstyled">
                                <h2 class="card-title">{{$acara->nm_acara}}</h5>
                            </li>
                            <li class="list-unstyled">
                                <p class="">Tanggal Mulai: {{$acara->tgl_mulai}}</p>
                            </li>
                            <li class="list-unstyled">
                                <p class="">Tanggal Selesai : {{$acara->tgl_selesai}}</p>
                            </li>
                            <li class="list-unstyled">
                                <p class="">Durasi : {{$acara->durasi}}</p>
                            </li>
                            <li class="list-unstyled">
                                Deskripsi : <p class="text-justify d-inline">{{$acara->deskripsi}}</p>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <br>
                        <p><b>Gambar Event</b></p>
                        @if($acara->foto_acara1)
                        <img src="{{asset('storage/'. $acara->foto_acara1)}}" alt="" class="card-img-top"
                            id="foto_acara1">
                        @else
                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top" id="foto_acara1">
                        @endif

                        @if($acara->foto_acara2)
                        <img src="{{asset('storage/'. $acara->foto_acara2)}}" alt="" class="card-img-top"
                            id="foto_acara1">
                        @else
                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top" id="foto_acara1">
                        @endif

                        @if($acara->foto_acara3)
                        <img src="{{asset('storage/'. $acara->foto_acara3)}}" alt="" class="card-img-top"
                            id="foto_acara1">
                        @else
                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top" id="foto_acara1">
                        @endif

                        @if($acara->foto_acara4)
                        <img src="{{asset('storage/'. $acara->foto_acara4)}}" alt="" class="card-img-top"
                            id="foto_acara1">
                        @else
                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top" id="foto_acara1">
                        @endif
                    </div>

                    <br>

                    <a href="{{route('acaras.edit', $acara->id)}}" class="btn btn-warning" title="Ubah"><i
                            class="fas fa-fw fa-edit"></i></a>
                    <a href="{{route('acaras.delete', $acara->id)}}" class="btn btn-danger" id="delete" title="Hapus"><i
                            class="fas fa-fw fa-trash"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection