@extends('layout/app')
@section('content')
@if($errors->any())
@foreach($errors->all() as $err)
    <form action="{{route('guru.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Revee Admin - Formulir Edit Data Guru</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control" name="NIP" value="{{old('NIP')}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input type="text" class="form-control" name="Nama_Guru" value="{{old('Nama_Guru')}}">
                    </div>
                    <div class="form-group">
                        <label>Alamat Guru</label>
                        <input type="text" class="form-control" name="Alamat_Guru" value="{{old('Alamat_Guru')}}">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="Jenis_Kelamin" value="{{old('Jenis_Kelamin')}}">
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan Guru</label>
                        <input type="text" class="form-control" name="Pendidikan_Guru" value="{{old('Pendidikan_Guru')}}">
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