@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dashboard | Pengajuan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive table-striped">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. WA</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach($allDataUser as $key => $user)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->alamat}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->no_wa}}</td>
                        <td>{{$user->usertype}}</td>
<<<<<<< HEAD
                        <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-warning">edit</a> <a href="#" class="btn btn-danger">delete</a>
=======
                        <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">edit</a> 
                        <a href="{{route('users.delete', $user->id)}}" class="btn btn-danger">delete</a>
>>>>>>> origin/kezia-megawati
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                <a href="{{route('user.add')}}" class="btn btn-success">Tambah Admin dan Super Admin</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection