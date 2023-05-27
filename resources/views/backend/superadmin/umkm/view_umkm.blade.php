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
            <a href="{{route('umkm.add')}}" class="btn btn-success mb-3">
                <i class="fas fa-plus"></i> Tambah UMKM
            </a>
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
                                        <h2 class="card-title">Nama : {{$umkm->nm_produk}}</h5>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Pemilik: {{$umkm->nm_pemilik}}</p>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Harga: Rp. {{$umkm->harga}}</p>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Alamat: {{$umkm->alamat}}</p>
                                    </li>
                                    <li class="list-unstyled">
                                        <p class="">Deskripsi Produk: {{$umkm->deskripsi}}</p>
                                    </li>

                                    <div>
                                        <p>Gambar Produk</p>
                                        @if($umkm->produk1)
                                        <img src="{{asset('storage/'. $umkm->produk1)}}" alt="" class="card-img-top"
                                            id="foto_produk">
                                        @else
                                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                            id="foto_produk">
                                        @endif

                                        @if($umkm->produk2)
                                        <img src="{{asset('storage/'. $umkm->produk2)}}" alt="" class="card-img-top"
                                            id="foto_produk">
                                        @else
                                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="card-img-top"
                                            id="foto_produk">
                                        @endif
                                    </div>

                                    
                                </ul>
                            </div>
                            <br> <a href="{{route('umkm.edit', $umkm->id)}}" class="btn btn-warning" title="Ubah"><i
                                    class="fas fa-fw fa-edit"></i></a>
                            <a href="{{route('umkms.delete', $umkm->id)}}" class="btn btn-danger" id="delete"
                                title="Hapus"><i class="fas fa-fw fa-trash"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{route('umkm.add')}}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah UMKM
            </a>
            <a href="{{route('dashboard')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection