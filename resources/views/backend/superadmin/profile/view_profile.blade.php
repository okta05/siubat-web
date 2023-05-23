@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-5">

            <!-- Default Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Detail Profil</h6>
                </div>
                <div class="card h-100 py-2">
                    <center>
                        <img class="img-profile rounded-circle mt-5" src="{{asset('backend/img/no-image.jpg')}}" width="150">
                        <h6 class="m-0 font-weight-bold text-dark mt-4">{{auth()->user()->name}}</h6>
                    </center>
                    <hr>
                    <div class="card-body">
                        <span>Email
                            <p class="text-dark">{{auth()->user()->email}}</p>
                        </span>
                        <span>Telepon/No. WhatsApp
                            <p class="text-dark">{{auth()->user()->no_wa}}</p>
                        </span>
                        <span>Alamat
                            <p class="text-dark">{{auth()->user()->alamat}}</p>
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-7">

            <!-- Card Edit -->
            <div class="card shadow mb-4">
                <!-- Card Header - Edit -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Ubah Profil</h6>
                </div>
                    
                <!-- Card Content - Edit -->
                <div class="card-body">
                    @csrf
                    <form class="user" method="" action="#">
                        <div class="form-group">
                            <label for="textNama">Nama</label>
                            <input type="text" name="textNama" value="" class="form-control" id="textNama" placeholder="Nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="">Telepon/No. WhatsApp</label>
                            <input type="number" name="no_wa" value="" class="form-control" id="no_wa" placeholder="No. telepon/WhatsApp">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" value="" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <!-- Belum bisa diubah -->
                        <button type="submit" class="btn btn-success" onclick="alertMSG()">Update Profil</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection