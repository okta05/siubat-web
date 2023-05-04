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
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card1 border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  User</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                          </div>
                      </div>
                      <div class="card-footer">
                          <a href="{{route('view_user')}}" class="card-link">Lihat Detail<i
                                  class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Card Pembayaran -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card1 border-left-success shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                  Event</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                          </div>
                      </div>
                      <div class="card-footer">
                          <a href="{{route('view_event')}}" class="card-link">Lihat Detail<i
                                  class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Card Edit -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card1 border-left-info shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">UMKM
                              </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                          </div>
                      </div>
                      <div class="card-footer">
                          <a href="edit-user.html" class="card-link">Lihat Detail<i
                                  class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </div>

          </div>

      </div>
      <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
  @endsection