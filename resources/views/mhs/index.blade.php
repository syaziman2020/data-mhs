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
                    <form action="{{ route('mhs.destroy', $mahasiswa->id) }}" method="post">
                        {{-- <a href="{{ route('mhs.show', $mahasiswa->id) }}" class="btn btn-info">Show</a> --}}
                        <a href="{{ route('mhs.edit', $mahasiswa->id) }}" class="btn btn-success" role="button">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus {{ $mahasiswa->nama }}')">Delete</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection