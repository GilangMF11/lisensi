@extends('backend.layouts.app')
@section('content')
    
    <div class="pt-2 content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard Aktivasi Sister GO</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                            <li class="breadcrumb-item active">Aktivasi</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Aktivasi Sister Go</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="{{ URL::to('add-aktivasi') }}" class="btn btn-primary">Tambah</a>
                                </div>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Nama Toko</th>
                                            <th>Komputer</th>
                                            <th>Token</th>
                                            <th>Token</th>
                                            <th>Aktivasi</th>
                                            <th>Expired</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($aktivasi as $key=>$row)
                                        <tr>
                                            <td class="text-center">{{ $row->nmtoko }}</td>
                                            <td class="text-center">{{ $row->komputer }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <a href="{{ URL::to('/generate/'.$row->id) }}" class="pr-2" id="edit">
                                                        <button class="bg-success border-0">Buat</button>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $row->token }} <br> 
                                              <button class="bg-primary border-0" onclick="copyToClipboard('{{ $row->token }}')">Salin</button></td>
                                            <td class="text-center">{{ $row->tgl_akt }}</td>
                                            <td class="text-center">{{ $row->tgl_exp }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <a href="{{ URL::to('/edit-aktivasi/'.$row->id) }}" class="pr-2" id="edit">
                                                        <button class="bg-success border-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                            </svg>
                                                        </button>
                                                    </a>
                                                    <a href="{{ URL::to('/delete-aktivasi/'.$row->id) }}" id="delete"><button class="bg-danger border-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                    </svg></button></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>

    
<script type="text/javascript">
  $('.show-alert-delete-box').click(function(event){
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: "Are you sure you want to delete this record?",
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          type: "warning",
          buttons: ["Cancel","Yes!"],
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      }).then((willDelete) => {
          if (willDelete) {
              form.submit();
          }
      });
  });

  function copyToClipboard(text) {
    var tempInput = document.createElement("input");
    tempInput.value = text;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("Teks telah disalin ke clipboard!");
  }
</script>

@endsection
