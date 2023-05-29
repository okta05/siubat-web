@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard | Ubah Data UMKM</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col">

            <!-- Card Edit -->
            <div class="card shadow mb-4">
                <!-- Card Header - Edit -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Ubah Data UMKM</h6>
                </div>

                <!-- Card Content - Edit -->
                <div class="card-body">
                    <form class="user" method="POST" action="{{route('umkms.update',  $editData->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="textNama">Nama Pemilik UMKM</label>
                            <input type="text" name="textNama" value="{{$editData->nm_pemilik}}" class="form-control" id="textNama" required placeholder="Nama Pemilik UMKM">
                        </div>
                        <div class="form-group">
                            <label for="textNamaProduk">Nama Produk</label>
                            <input type="text" name="textNamaProduk" value="{{$editData->nm_produk}}" class="form-control" id="textNamaProduk" required placeholder="Nama Produk">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" value="{{$editData->harga}}" class="form-control" id="harga" required placeholder="Harga">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" value="{{$editData->deskripsi}}" class="form-control" id="deskripsi" required placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Alamat</label>
                            <input type="text" name="alamat" value="{{$editData->alamat}}" class="form-control" id="alamat" required placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="foto">Gambar</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5" style="width: 250px; height: auto;">
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror"
                                id="foto" accept="image/*" onchange="previewImage()" placeholder="Gambar">
                            @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="hidden" name="oldImage" value="{{ $editData->foto }}">
                            @if($editData->foto)
                            <br>
                            Foto saat ini:
                                <img src="{{asset('storage/'. $editData->foto)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="height: 250px; width: auto;">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <button type="reset" class="btn btn-secondary">Kosongkan</button>
                        <a href="{{route('view_umkm')}}" class="btn btn-danger">Batalkan</a>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- End Page Content -->

@endsection