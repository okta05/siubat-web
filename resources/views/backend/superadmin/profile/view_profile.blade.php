@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-lg-5">

        <!-- Default Card Example -->
        <div class="card shadow mb-4">
            <div class="card h-100 py-2">
                <center>
                    <img class="img-profile rounded-circle mt-5" src="img/undraw_profile.svg" width="150">
                    <h6 class="m-0 font-weight-bold text-dark mt-4">Putra</h6>
                </center>
                <hr>
                <div class="card-body">
                    <span>Email
                        <p class="text-dark">putrasfyr@gmail.com</p>
                    </span>
                    <span>Telepon
                        <p class="text-dark">0845**</p>
                    </span>
                    <span>Tanggal Lahir
                        <p class="text-dark">20 Januari 2001</p>
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
                <h6 class="m-0 font-weight-bold text-dark">Edit</h6>
            </div>
                
            <!-- Card Content - Edit -->
            <div class="card-body">
                <form class="user">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="number" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control form-control-user">
                    </div>
                    <button type="submit" class="btn btn-success">Update Profile</button>
                </form>
            </div>
        </div>

    </div>

</div>
</div>

@endsection