@extends('backend.superadmin.superadmin_master')
@section('backend.superadmin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dashboard | User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive table-striped">
                <a href="{{route('user.add')}}" class="btn btn-success mb-3">
                    <i class="fas fa-plus"></i> Tambah User
                </a>
                <p>
                    Jumlah user saat ini: <b>{{ $userCount }}</b>
                </p>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. WA</th>
                            <th>Role</th>
                            <th>Foto</th>
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
                        <td>
                        @if($user->foto)
                        <img src="{{asset('storage/'. $user->foto)}}" alt="" title="{{$user->foto}}" class="card-img-top" style="width: 100px; display: block;">
                        @else
                        <img src="{{asset('backend/img/no-image.jpg')}}" alt="" title="Tidak ada gambar." class="card-img-top" style="width: 100px; display: block;">
                        @endif
                        </td>
                        @if($user->id != 1 && $user->id != 2)
                        <td>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning" title="Ubah">
                                <i class="fas fa-fw fa-edit"></i>
                            </a> 
                            <a href="{{route('users.delete', $user->id)}}" class="btn btn-danger" id="delete">
                                <i class="fas fa-fw fa-trash"></i>
                            </a>
                        </td>
                        @elseif($user->id == 1)
                        <td>
                            <p>
                                <i class="fas fa-times-circle"></i> Tidak ada opsi.
                            </p>
                        </td>
                        @elseif($user->id == 2)
                        <td>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning" title="Ubah">
                                <i class="fas fa-fw fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-secondary disabled" id="delete" title="Tidak dapat menghapus user ini." style="cursor: not-allowed;">
                                <i class="fas fa-fw fa-trash"></i>
                            </a>
                        </td>
                        @endif
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                <a href="{{route('user.add')}}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Tambah User
                </a>
                <a href="{{route('dashboard')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection