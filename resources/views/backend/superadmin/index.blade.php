  @extends('backend.superadmin.superadmin_master')
  @section('backend.superadmin')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
          <!-- Earnings (Monthly) Card Example -->
          <!-- Card Pengajuan -->
        @if(auth()->user()->usertype=="superadmin")
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col md-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                User
                        </div>
                        <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $userCount }}</div>
                    </div>
                    </div>
                    <hr />
                    <a href="{{route('view_user')}}" class="btn mt-3 float-right" style="background-color:#83D350; color:#513C2F; border-top: 1px solid #513C2F;">
                        Lihat Detail
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        @endif

        <!-- Card Pembayaran -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Acara</div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $eventCount }}</div>
                        </div>
                    </div>
                    <hr />
                    <a href="{{route('view_acara')}}" class="btn mt-3 float-right" style="background-color:#83D350; color:#513C2F; border-top: 1px solid #513C2F;">
                        Lihat Detail
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card Edit -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">UMKM
                            </div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $umkmCount }}</div>
                        </div>
                    </div>
                    <hr />
                    <a href="{{route('view_umkm')}}" class="btn mt-3 float-right" style="background-color:#83D350; color:#513C2F; border-top: 1px solid #513C2F;">
                        Lihat Detail
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

      <!-- /.container-fluid -->
</div>
  <!-- End of Main Content -->
@endsection