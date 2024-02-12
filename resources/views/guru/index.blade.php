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
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Nama Guru</h6>
                        </div>
                        <div class="card-body">
                            <a href="{{route('guru.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NIP</th>
                                            <th>Nama Guru</th>
                                            <th>Alamat Guru</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Pendidikan Guru</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($guru as $guru)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$guru->NIP}}</td>
                                            <td>{{$guru->Nama_Guru}}</td>
                                            <td>{{$guru->Alamat_Guru}}</td>
                                            <td>{{$guru->Jenis_Kelamin}}</td>
                                            <td>{{$guru->Pendidikan_Guru}}</td>
                                            <td>
                            <a class="btn btn-sm btn-primary" href="{{url('guru/'.$guru->NIP.'/edit')}}">Edit</a>
                            
        
                            <form action="{{url('guru/'.$guru->NIP)}}" method="POST"  style="display: inline-block;">
                           
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