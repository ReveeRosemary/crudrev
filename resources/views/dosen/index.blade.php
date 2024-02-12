@extends('layout/app')
@section('content')

@if(session('success'))
<p class="alert alert-success">{{session('success')}}</p>
@endif
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabwel</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Nama Dosen</h6>
                        </div>
                        <div class="card-body">
                            <a href="{{route('dosen.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>DosenID</th>
                                            <th>NIDN</th>
                                            <th>Nama Dosen</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat Dosen</th>
                                            <th>Usia</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($dosen as $dosen)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$dosen->nidn}}</td>
                                            <td>{{$dosen->nama_dosen}}</td>
                                            <td>{{$dosen->jeniskelamin}}</td>
                                            <td>{{$dosen->alamat}}</td>
                                            <td>{{$dosen->usia}}</td>
                                            <td>
                            <a class="btn btn-sm btn-primary" href="{{url('dosen/'.$dosen->nidn.'/edit')}}">Edit</a>
                            
        
                            <form action="{{url('dosen/'.$dosen->nidn)}}" method="POST"  style="display: inline-block;">
                           
                            @csrf
                            @method('delete')
              
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')">Delete</button>
                            </form>
                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    @endsection