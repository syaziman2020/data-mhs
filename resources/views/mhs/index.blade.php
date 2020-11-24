@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h1>Data Mahasiswa</h1>
            </div>
        </div>
        <div class="col-lg-12 margin-tb mb-3">
            <div class="float-right">
                <a href="{{ route('create') }}" class="btn btn-primary">Add Data</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered mb-3" cellpadding=3>
        <thead>
            <tr>
                <th col width="50">ID</th>
                <th col width="120">NPM</th>
                <th col width="220">Nama</th>
                <th col width="220">Jurusan</th>
                <th>Alamat</th>
                <th col width="155">Aksi</th>
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
                    <form action="{{ route('destroy', $mahasiswa->id) }}" method="post">
                        {{-- <a href="{{ route('show', $mahasiswa->id) }}" class="btn btn-info">Show</a> --}}
                        <a href="{{ route('edit', $mahasiswa->id) }}" class="btn btn-success" 
                            role="button">Edit</a>
                        <a href="{{ route('destroy', $mahasiswa->id) }}" class="btn btn-danger" role="button" 
                            onclick="return confirm('Yakin akan menghapus {{ $mahasiswa->nama }}')">Delete</a>
                    </form>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $mhs->links() }}
    </div>
@endsection