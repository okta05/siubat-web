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
                    <form class="user" method="POST" action="{{route('umkms.update',  $editData->id)}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="textNama">Nama Pemilik UMKM</label>
                            <input type="text" name="textNama" value="{{$editData->nm_pemilik}}" class="form-control"
                                id="textNama" required placeholder="Nama Pemilik UMKM">
                        </div>
                        <div class="form-group">
                            <label for="textNamaProduk">Nama Produk</label>
                            <input type="text" name="textNamaProduk" value="{{$editData->nm_produk}}"
                                class="form-control" id="textNamaProduk" required placeholder="Nama Produk">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="{{$editData->harga}}" class="form-control"
                                id="harga" required placeholder="Harga">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" value="{{$editData->deskripsi}}" class="form-control"
                                id="deskripsi" required placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Alamat</label>
                            <input type="text" name="alamat" value="{{$editData->alamat}}" class="form-control"
                                id="alamat" required placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="foto">Gambar</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5" style="width: 200px; height: auto;">
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
                            <img src="{{asset('storage/'. $editData->foto)}}"
                                class="img-preview img-fluid mb-3 col-sm-5 d-block" style="height: 200px; width: auto;">
                            @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="produk1">Gambar Produk 1</label>
                            <img class="img-preview1 img-fluid mb-3 col-sm-5" style="width: 200px; height: auto;">
                            <input type="file" name="produk1"
                                class="form-control @error('produk1') is-invalid @enderror" id="produk1"
                                accept="image/*" onchange="previewImage1()" placeholder="Produk 1">
                            @error('produk1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="hidden" name="oldImage1" value="{{ $editData->produk1 }}">
                            @if($editData->produk1)
                            <br>
                            Foto saat ini:
                            <img src="{{asset('storage/'. $editData->produk1)}}"
                                class="img-preview1 img-fluid mb-3 col-sm-5 d-block"
                                style="width: 200px; height: auto;">
                            @else
                            <img class="img-preview1 img-fluid mb-3 col-sm-5">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="produk2">Gambar Produk 2</label>
                            <img class="img-preview2 img-fluid mb-3 col-sm-5" style="width: 200px; height: auto;">
                            <input type="file" name="produk2"
                                class="form-control @error('produk2') is-invalid @enderror" id="produk2"
                                accept="image/*" onchange="previewImage2()" placeholder="Produk 2">
                            @error('produk2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="hidden" name="oldImage2" value="{{ $editData->produk2 }}">
                            @if($editData->produk2)
                            <br>
                            Foto saat ini:
                            <img src="{{asset('storage/'. $editData->produk2)}}"
                                class="img-preview2 img-fluid mb-3 col-sm-5 d-block"
                                style="width: 200px; height: auto;">
                            @else
                            <img class="img-preview2 img-fluid mb-3 col-sm-5">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="produk3">Gambar Produk 3</label>
                            <img class="img-preview3 img-fluid mb-3 col-sm-5" style="width: 200px; height: auto;">
                            <input type="file" name="produk3"
                                class="form-control @error('produk3') is-invalid @enderror" id="produk3"
                                accept="image/*" onchange="previewImage3()" placeholder="Produk 3">
                            @error('produk3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="hidden" name="oldImage3" value="{{ $editData->produk3 }}">
                            @if($editData->produk3)
                            <br>
                            Foto saat ini:
                            <img src="{{asset('storage/'. $editData->produk3)}}"
                                class="img-preview3 img-fluid mb-3 col-sm-5 d-block"
                                style="width: 200px; height: auto;">
                            @else
                            <img class="img-preview3 img-fluid mb-3 col-sm-5">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="produk4">Gambar Produk 4</label>
                            <img class="img-preview4 img-fluid mb-3 col-sm-5" style="width: 200px; height: auto;">
                            <input type="file" name="produk4"
                                class="form-control @error('produk4') is-invalid @enderror" id="produk4"
                                accept="image/*" onchange="previewImage4()" placeholder="Produk 4">
                            @error('produk4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="hidden" name="oldImage4" value="{{ $editData->produk4 }}">
                            @if($editData->produk4)
                            <br>
                            Foto saat ini:
                            <img src="{{asset('storage/'. $editData->produk4)}}"
                                class="img-preview4 img-fluid mb-3 col-sm-5 d-block"
                                style="width: 200px; height: auto;">
                            @else
                            <img class="img-preview4 img-fluid mb-3 col-sm-5">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <a href="{{route('view_umkm')}}" class="btn btn-danger">Batalkan</a>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- End Page Content -->

@endsection