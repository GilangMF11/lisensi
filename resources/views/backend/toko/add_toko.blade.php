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
                    <li class="breadcrumb-item"><a href="/all-toko">Toko</a></li>
                    <li class="breadcrumb-item active">Tambah Toko</li>
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
                            Tambah Toko
                        </h5>
                    </div>
                    <div class="card-body">
                        <form role="form" action="{{ URL::to('/insert-toko') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" name="kdtoko" placeholder="Masukkan Kode Toko">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Nama Toko </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nmtoko" placeholder="Masukkan Nama" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Alamat </label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required></textarea>                                </div>
                            </div>

                            <fieldset>
                                <div class="form-group">
                                    <label for="name">Pilih Provinsi</label>
                                    {!! Form::select('provinsi', $provinsi, '', [
                                        'class' => 'form-control',
                                        'placeholder' => 'Pilih Provinsi',
                                        'id' => 'province_id',
                                    ]) !!}
                                </div>
                                <div class="form-group" id="form-kota">
                                    <label for="name">Pilih Kota</label>
                                    {!! Form::select('route_get_kota', $route_get_kota, '', [
                                        'class' => 'form-control',
                                        'placeholder' => 'Pilih Kota',
                                        'id' => 'city_id',
                                    ]) !!}
                                </div>
                                <div class="form-group" id="form-kecamatan">
                                    <label for="name">Pilih Kecamatan</label>
                                    {!! Form::select('route_get_kecamatan', $route_get_kecamatan, '', [
                                        'class' => 'form-control',
                                        'placeholder' => 'Pilih Kecamatan',
                                        'id' => 'district_id',
                                    ]) !!}
                                </div>
                                <div class="form-group" id="form-kelurahan">
                                    <label for="name">Pilih Kelurahan</label>
                                    {!! Form::select('route_get_kelurahan', $route_get_kelurahan, '', [
                                        'class' => 'form-control',
                                        'placeholder' => 'Pilih Kelurahan',
                                        'id' => 'village_id',
                                    ]) !!}
                                </div>
                            </fieldset>
                            


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
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('body').on('change', '#province_id', function() {
            let id = $(this).val();
            let route = "{{ route('get.kota') }}";
            $.ajax({
                type: 'get',
                url: route,
                data: {
                    province_id: id
                },
                success: function(data) {
                    $('#form-kota').html(data);
                    // Hapus pilihan kecamatan dan kelurahan setelah pilihan provinsi berubah
                    $('#form-kecamatan').html('');
                    $('#form-kelurahan').html('');
                }
            })
        })

        $('body').on('change', '#city_id', function() {
            let id = $(this).val();
            let route = "{{ route('get.kecamatan') }}";
            $.ajax({
                type: 'get',
                url: route,
                data: {
                    city_id: id
                },
                success: function(data) {
                    $('#form-kecamatan').html(data);
                    // Hapus pilihan kelurahan setelah pilihan kota berubah
                    $('#form-kelurahan').html('');
                }
            })
        })

        $('body').on('change', '#district_id', function() {
            let id = $(this).val();
            let route = "{{ route('get.kelurahan') }}";
            $.ajax({
                type: 'get',
                url: route,
                data: {
                    kecamatan_id: id
                },
                success: function(data) {
                    $('#form-kelurahan').html(data);
                }
            })
        })
    })
</script>


@endsection