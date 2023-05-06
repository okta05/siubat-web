@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard | Tambah Tempat</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col">

            <!-- Card Edit -->
            <div class="card shadow mb-4">
                <!-- Card Header - Edit -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Tambah Tempat</h6>
                </div>

                <!-- Card Content - Edit -->
                <div class="card-body">
                    <form class="user" method="POST" action="{{route('users.store')}}">
                        @csrf

                        <div class="form-group">
                            <label for="textNama">Nama</label>
                            <input type="text" name="textNama" class="form-control form-control-user" id="textNama" >
                        </div>
                        <div class="form-group">
                            <label for="textAlamat">Alamat</label>
                            <input type="text" name="textAlamat" class="form-control form-control-user" id="textAlamat">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-user" id="email">
                        </div>
                        <div class="form-group">
                            <label for="textNo_Wa">No WA</label>
                            <input type="text" name="textNo_Wa" class="form-control form-control-user" id="textNo_Wa">
                        </div>
                        <div class="form-group">
                            <label for="selectUser">Role <span class="text-danger">*</span></label>
                            <select name="selectUser" id="selectUser" required class="form-control">
                                <option value="">Pilih Grub User</option>
                                <option value="superadmin">SuperAdmin</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-user" id="password">
                        </div>

                        <button type="submit" class="btn btn-danger">Simpan Perubahan</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- End Page Content -->

@endsection