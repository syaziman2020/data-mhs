@extends('master')

@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data Mahasiswa</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> terjadi kesalahan!
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('mhs.update', $mhs->id) }}" class="form-group" method="post">
        @csrf
        @method('PUT')
        <input type="text" class="form-control col-3 mb-3" name="npm" id="" value="{{ $mhs->npm }}" placeholder="NPM">
        <input type="text" class="form-control col-3 mb-3" name="nama" id="" value="{{ $mhs->nama }}" placeholder="Nama">
        <input type="text" class="form-control col-3 mb-3" name="jurusan" id="" value="{{ $mhs->jurusan }}" placeholder="Jurusan">
        <input type="text" class="form-control col-3 mb-3" name="alamat" id="" value="{{ $mhs->alamat }}" placeholder="Alamat">
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection