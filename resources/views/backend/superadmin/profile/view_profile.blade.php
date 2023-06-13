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
                    
                        @if($user->foto)
                        <img src="{{asset('storage/'. $user->foto)}}" class="img-profile rounded-circle" width="200" height="200">
                        @else
                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" class="img-profile rounded-circle mt-2" width="200">
                        @endif
                        
                        <h6 class="m-0 font-weight-bold text-dark mt-4">Hai, {{$user->nama}}!</h6>
                    </center>
                    <hr>
                    <div class="card-body">
                        <span>Nama 
                            <p class="text-dark">{{$user->nama}} </p>
                        </span>
                        <span>Email
                            <p class="text-dark">{{$user->email}}</p>
                        </span>
                        <span>Telepon/No. WhatsApp
                            <p class="text-dark">{{$user->no_wa}}</p>
                        </span>
                        <span>Alamat
                            <p class="text-dark">{{$user->alamat}}</p>
                        </span>
                        @if($user->id == 1)
                        <a href="{{route('dashboard')}}" class="btn btn-primary">Kembali</a>
                        @elseif($user->id != 1)
                        <a href="{{route('profile.edit')}}" class="btn btn-secondary">Ubah Profil</a>
                        <a href="{{route('profile.delete', $user->id)}}" class="btn btn-danger" id="delete" title="Hapus">Hapus Foto Profil</a>
                        <a href="{{route('dashboard')}}" class="btn btn-primary">Kembali</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection