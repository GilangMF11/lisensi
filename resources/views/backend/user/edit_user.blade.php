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
                    <li class="breadcrumb-item"><a href="/all-user">Pengguna</a></li>
                    <li class="breadcrumb-item active">Edit Pengguna</li>
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
                            Edit Pengguna
                        </h5>
                    </div>
                    <div class="card-body">
                        <form role="form" action="{{ URL::to('/update-user/'.$edit->id) }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Username </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" value="{{ $edit->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Email </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Nama" value="{{ $edit->email }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Password </label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Password" value="{{ $edit->password }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> User Type </label>
                                <div class="col-sm-10">
                                   <select name="role" id="fromselect" class="form-control">
                                    <option value="Admin" {{ 'Admin' == $edit->role ? 'selected' : '' }}>Admin</option>
                                    <option value="Manager" {{ 'Manager' == $edit->role ? 'selected' : '' }}>Manager</option>
                                    <option value="Customer" {{ 'Customer' == $edit->role ? 'selected' : '' }}>Customer</option>

                                   </select>
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