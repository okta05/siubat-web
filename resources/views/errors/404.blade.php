@extends('errors::minimal')
@section('title', __('Not Found'))

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4"></div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-12">

            <!-- Default Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Error</h6>
                </div>
                <div class="card h-100 py-2">
                    <center>
                        <h1 class="mt-5"><i class="far fa-file-times"></i>404 - Halaman tidak ditemukan!</h1>
                    </center>
                </div>
            </div>

        </div>
    </div>
</div>