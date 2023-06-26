@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard | UMKM</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div>
                <a href="{{route('umkm.add')}}" class="btn btn-success mb-3">
                    <i class="fas fa-plus"></i> Tambah UMKM
                </a>

                <a href="{{route('dashboard')}}" class="btn btn-primary mb-3">Kembali</a>
            </div>

            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                @foreach($allDataUMKM as $key => $umkm)
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card d-inline-block w-100 p-2" style="
                    height: 100%!important;
                    background-color: #fff;
                    background-clip: border-box;
                    border: 1px solid #e3e6f0;
                    border-radius: 0.35rem;
                    border-radius: 0.35rem;
                    ">
                        @if($umkm->foto)
                        <img src="{{asset('storage/'. $umkm->foto)}}" alt="" class="card-img-top"
                            style="height: auto; display: block;">
                        @else
                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top">
                        @endif
                        <hr>
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <ul class="list-group">
                                    <li class="list-unstyled">
                                        <h3 class="card-title">Nama : {{$umkm->nm_produk}}</h3>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Pemilik : {{$umkm->nm_pemilik}}</p>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Harga : Rp. {{$umkm->harga}}</p>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Nomer Telepon : {{$umkm->no_pemilik}}</p>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Alamat: {{$umkm->alamat}}</p>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Deskripsi Produk : {{$umkm->deskripsi}}</p>
                                    </li>

                                    <div>
                                        <p><b>Gambar Produk</b></p>
                                        @if($umkm->produk1)
                                        <img src="{{asset('storage/'. $umkm->produk1)}}" alt="" class="card-img-top"
                                            id="foto_produk1">
                                        @else
                                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                            id="foto_produk1">
                                        @endif

                                        @if($umkm->produk2)
                                        <img src="{{asset('storage/'. $umkm->produk2)}}" alt="" class="card-img-top"
                                            id="foto_produk1">
                                        @else
                                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                            id="foto_produk1">
                                        @endif
                                    </div>

                                    <div>
                                        <br>
                                        @if($umkm->produk3)
                                        <img src="{{asset('storage/'. $umkm->produk3)}}" alt="" class="card-img-top"
                                            id="foto_produk1">
                                        @else
                                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                            id="foto_produk1">
                                        @endif

                                        @if($umkm->produk4)
                                        <img src="{{asset('storage/'. $umkm->produk4)}}" alt="" class="card-img-top"
                                            id="foto_produk1">
                                        @else
                                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                            id="foto_produk1">
                                        @endif
                                    </div><br>
                                </ul>
                            </div>
                            <hr>
                            Opsi:
                            <a href="{{route('umkm.edit', $umkm->id)}}" class="btn btn-warning" title="Ubah"><i class="fas fa-fw fa-edit"></i></a>
                            <a href="{{route('umkms.delete', $umkm->id)}}" class="btn btn-danger" id="delete"
                                title="Hapus"><i class="fas fa-fw fa-trash"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection