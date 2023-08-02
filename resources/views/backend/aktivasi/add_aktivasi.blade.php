@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Dashboard Aktivasi Sister GO</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/all-aktivasi">Aktivasi</a></li>
                    <li class="breadcrumb-item active">Tambah Aktivasi Sister GO</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
    <section class="content">
        <div class="row">
            <div class="col-lg-1">
                
            </div>
            <div class="col-lg-10 pt-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Tambah Aktivasi Sister Go
                        </h5>
                    </div>
                    <div class="card-body">
                        <form role="form" action="{{ URL::to('/insert-aktivasi') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Nama Toko </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nmtoko" placeholder="Masukkan Nama Toko" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Kode Toko </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kdtoko" placeholder="Kode Toko" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Komputer </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="jumlahKomputer" placeholder="Masukkan Jumlah Komputer" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Periode/bulan </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="periode" placeholder="Masukkan Periode Bulan" required>                                
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Token </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="token" placeholder="Token Terisi Automatis" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Tanggal Aktivasi </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_akt" placeholder="Tanggal Aktivasi" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Tanggal Expired </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_exp" placeholder="Tanggal Expired" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" name="flex" value="0">
                                </div>
                            </div>


                            <div class="card-footer bg-white">
                                <button type="submit" class="btn btn-info float-right">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">

            </div>
        </div>
    </section>
</div>
    
@endsection