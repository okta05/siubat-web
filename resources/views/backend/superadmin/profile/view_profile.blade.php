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

        <div class="col-12">

            <!-- Default Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Detail Profil</h6>
                </div>
                <div class="card h-100 py-2">
                    <center>
                        <img class="img-profile rounded-circle mt-5" src="{{asset('backend/img/no-image.jpg')}}"
                            width="150">
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
    </div>
</div>

@endsection