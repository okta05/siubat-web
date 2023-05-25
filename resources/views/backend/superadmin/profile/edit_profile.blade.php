@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard | Edit Profil</h1>
    </div>
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
                <form class="user" method="POST" action="{{route('profiles.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="textNama">Nama</label>
                        <input type="text" name="textNama" class="form-control"
                            id="textNama" placeholder="Nama lengkap">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    <button type="reset" class="btn btn-secondary">Kosongkan</button>
                    <a href="{{route('das')}}" class="btn btn-danger">Batalkan</a>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Content Row -->

</div>
<!-- End Page Content -->

@endsection
