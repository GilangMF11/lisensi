@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Dashboard Lisensi Sister GO</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/all-lisensi">Lisensi</a></li>
                    <li class="breadcrumb-item active">Tambah Lisensi</li>
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
                            Tambah Lisensi
                        </h5>
                    </div>
                    <div class="card-body">
                        <form role="form" action="{{ URL::to('/insert-lisensi') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" name="kdtoko" placeholder="Masukkan Kode Toko">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Nama Pelanggan </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nmpelanggan" placeholder="Masukkan Nama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Nama Toko </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nmtoko" placeholder="Masukkan Nama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Jumlah Komputer </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="jmlkom" placeholder="Masukkan Nama" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Alamat </label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required></textarea>                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Kecamatan </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kecamatan" placeholder="Masukkan Kecamatan" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Kabupaten </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kabupaten" placeholder="Masukkan Kabupaten" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Provinsi </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="provinsi" placeholder="Masukkan Provinsi" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Kode Pos </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kodepos" placeholder="Masukkan Kode Pos" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> No telp </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="notelp" placeholder="Masukan No Telp" required>
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