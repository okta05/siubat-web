@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard | Tambah User</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col">

            <!-- Card Edit -->
            <div class="card shadow mb-4">
                <!-- Card Header - Edit -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Tambah User</h6>
                </div>

                <!-- Card Content - Edit -->
                <div class="card-body">
                    <form class="user" method="POST" action="{{route('users.store')}}">
                        @csrf

                        <div class="form-group">
                            <label for="textNama">Nama</label>
                            <input type="text" name="textNama" class="form-control" id="textNama" required placeholder="Nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="textAlamat">Alamat</label>
                            <input type="text" name="textAlamat" class="form-control" id="textAlamat" required placeholder="Alamat lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="textNo_Wa">No WA</label>
                            <input type="number" name="textNo_Wa" class="form-control" id="textNo_Wa" required placeholder="Nomor Telepon/WhatsApp">
                        </div>
                        <div class="form-group">
                            <label for="selectUser">Role <span class="text-danger">*</span></label>
                            <div class="controls">
                                <select name="selectUser" id="selectUser" required class="form-control">
                                    <option value="" disabled selected="selected">--- Pilih Role User ---</option>
                                    <option value="superadmin">SuperAdmin</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-success">Tambah User</button>
                        <a href="{{route('view_user')}}" class="btn btn-danger">Batalkan</a>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- End Page Content -->

@endsection