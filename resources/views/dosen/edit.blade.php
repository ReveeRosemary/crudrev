@extends('layout/app')
@section('content')
    <form action="{{url('dosen/' .$data->nidn)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Formulir Edit Data Guru</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>NIDN</label>
                        <input type="number" class="form-control" name="nidn" value="{{$data->nidn}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input type="text" class="form-control" name="nama_dosen" value="{{$data->nama_dosen}}">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="custom-select" name="jeniskelamin">
                            <option value="" selected disabled hidden>--Pilih Jenis Kelamin--</option>
                            <option value="Pria" {{$data->jeniskelamin == 'Pria' ? 'selected': ''}}>Pria</option>
                            <option value="Wanita" {{$data->jeniskelamin == 'Wanita' ? 'selected': ''}}>Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat Dosen</label>
                        <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
                    </div>
                    <div class="form-group">
                        <label>Usia Dosen</label>
                        <input type="number" class="form-control" name="usia" value="{{$data->usia}}">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="SUBMIT" class="btn btn-primary">Simpan</button>
                </div>
                </div>
            </div>
        </div>
    </form>

@endsection