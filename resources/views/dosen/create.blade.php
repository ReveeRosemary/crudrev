@extends('layout/app')
@section('content')
    <form action="{{route('dosen.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Formulir Tambah Dosen</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>NIDN</label>
                        <input type="number" class="form-control" name="nidn" value="{{old('nidn')}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input type="text" class="form-control" name="nama_dosen" value="{{old('nama_dosen')}}">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin" value="{{old('jeniskelamin')}}">
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat Dosen</label>
                        <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}">
                    </div>
                    <div class="form-group">
                        <label>Usia Dosen</label>
                        <input type="number" class="form-control" name="usia" value="{{old('usia')}}">
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