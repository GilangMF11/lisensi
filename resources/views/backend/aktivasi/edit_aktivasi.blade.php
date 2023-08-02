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
                    <li class="breadcrumb-item"><a href="/all-aktivasi">Aktivasi</a></li>
                    <li class="breadcrumb-item active">Edit Aktivasi</li>
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
                            Edit Lisensi
                        </h5>
                    </div>
                    <div class="card-body">
                        <form role="form" action="{{ URL::to('/update-toko/'.$edit->id) }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Kode Toko </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kdtoko" placeholder="Masukkan Kode Toko" value="{{ $edit->kdtoko }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Nama Toko </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="" placeholder="Masukkan Nama Toko" value="{{ $edit->nmtoko }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Komputer </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="" placeholder="Masukkan Nama Toko" value="{{ $edit->komputer }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Periode </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="periode" placeholder="Masukkan Alamat" value="{{ $edit->periode }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Token </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="token" placeholder="Masukkan Kecamatan" value="{{ $edit->token }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Tanggal Aktivasi </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_akt" placeholder="Masukkan Alamat" value="{{ $edit->tgl_akt }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Tanggal Expaired </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_exp" value="{{ $edit->tgl_exp}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Flex </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="flex" placeholder="Masukkan Flex" value="{{ $edit->flex }}">
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