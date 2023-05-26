@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard | Ubah Data Event</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col">

            <!-- Card Edit -->
            <div class="card shadow mb-4">
                <!-- Card Header - Edit -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Edit Event</h6>
                </div>

                <!-- Card Content - Edit -->
                <div class="card-body">
                    <form class="user" method="POST" action="{{route('acaras.update', $editData->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nm_acara">Nama Acara</label>
                            <input type="text" name="nm_acara" class="form-control" id="nm_acara" value="{{$editData->nm_acara}}" required placeholder="Nama Acara">
                        </div>
                        <div class="form-group">
                            <label for="tgl_mulai">Tanggal Mulai</label>
                            <input type="date" name="tgl_mulai" class="form-control" id="tgl_mulai" value="{{$editData->tgl_mulai}}" required placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="date" name="tgl_selesai" class="form-control" id="tgl_selesai" value="{{$editData->tgl_selesai}}" required placeholder="Tanggal Selesai">
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi</label>
                            <input type="text" name="durasi" class="form-control" id="durasi" value="{{$editData->durasi}}" required
                                placeholder="Durasi (contoh: 6 Jam, 2 Hari)">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="textbox" name="deskripsi" class="form-control" id="deskripsi" value="{{$editData->deskripsi}}" required placeholder="deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="foto">Gambar</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto" accept="image/*" onchange="previewImage()" placeholder="Gambar">
                            Preview:
                            <img class="img-preview img-fluid mb-3 col-sm-5" style="width: 250px; height: auto;">
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
                                <img class="img-preview img-fluid mb-3 col-sm-5 col-sm-5 d-block">
                            @endif
                        </div>
                        <div class="form-group" style="margin-top: 100px;">
                            <button type="submit" class="btn btn-success">Ubah Data</button>
                            <a href="{{route('view_acara')}}" class="btn btn-danger">Batalkan</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- End Page Content -->

@endsection