@extends('master')

@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Add Data Mahasiswa</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> terjadi kesalahan!
            <ul>
                @foreach ($error->all() as $error)
                    <li>{{ $errorr }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('mhs.store') }}" class="form-group" method="post">
        @csrf
        <input type="text" class="form-control col-3 mb-3" name="npm" id="" placeholder="NPM">
        <input type="text" class="form-control col-3 mb-3" name="nama" id="" placeholder="Nama">
        <input type="text" class="form-control col-3 mb-3" name="jurusan" id="" placeholder="Jurusan">
        <input type="text" class="form-control col-3 mb-3" name="alamat" id="" placeholder="Alamat">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection