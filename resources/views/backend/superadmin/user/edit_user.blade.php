@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard | Edit User</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col">

            <!-- Card Edit -->
            <div class="card shadow mb-4">
                <!-- Card Header - Edit -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Edit User</h6>
                </div>

                <!-- Card Content - Edit -->
                <div class="card-body">
              
                    <form class="user" method="POST" action="{{route('users.update', $editData->id )}}">
                        @csrf
                        @if($editData->id == 1)
                        <div class="form-group">
                            Hayoo, mau ngapain?
                            <p>
                                <br>
                                <a href="{{route('view_user')}}" class="btn btn-success">Kembali</a>
                            </p>
                        </div>
                        @elseif($editData->id > 1)
                        <div class="form-group">
                            <label for="textNama">Nama</label>
                            <input type="text" name="textNama" value="{{$editData->name}}" class="form-control" id="textNama" placeholder="Nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="textAlamat">Alamat</label>
                            <input type="text" name="textAlamat" value="{{$editData->alamat}}" class="form-control" id="textAlamat" placeholder="Alamat lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$editData->email}}" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="textNo_Wa">No WA</label>
                            <input type="text" name="textNo_Wa" value="{{$editData->no_wa}}" class="form-control" id="textNo_Wa" placeholder="Nomor Telepon/WhatsApp">
                        </div>
                        <div class="form-group">
                            <label for="selectUser">Role <span class="text-danger">*</span></label>
                            <select name="selectUser" id="selectUser" required class="form-control">
                                <option value="">--- Pilih Role User ---</option>
                                <option value="superadmin" {{($editData->usertype=="superadmin"? "selected":"")}}>SuperAdmin</option>
                                <option value="admin" {{($editData->usertype=="admin"? "selected":"")}}>Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password <span class="text-danger" style="font-weight: bolder;">*Wajib diisi</span></label>
                            <input type="password" name="password" required class="form-control" id="password" placeholder="Password" style="display: inline; width: 99.74%;">
                            <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                        </div>

                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        <a href="{{route('view_user')}}" class="btn btn-danger">Batalkan</a>
                        @endif
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- End Page Content -->

@endsection
<<<<<<< HEAD
=======

>>>>>>> origin/oktaviano
