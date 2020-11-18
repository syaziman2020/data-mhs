@extends('master')
@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h1>Data Mahasiswa</h1>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="float-right">
                <a href="{{ route('mhs.create') }}" class="btn btn-primary">Add Data</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered" cellpadding=3>
        <thead>
            <tr>
                <th>ID</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th col width="200">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mhs as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->id }}</td>
                <td>{{ $mahasiswa->npm }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->jurusan }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
                <td>
                    <a href="#" class="btn btn-success" role="button">Edit</a>
                    <a href="#" class="btn btn-danger" role="button" onclick="return confirm('Yakin akan menghapus {{ $mahasiswa->nama }}')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection