@extends('master')
@section('isi')
    <h1>Daftar Nama Mahasiswa</h1>
    <div class="mb-3">
        <a class="btn btn-success" href="{{ route('add') }}">Tambah Mahasiswa</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $k => $mhs)
                <tr>
                    <th scope="row">{{ $k + 1 }}</th>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jk }}</td>
                    <td>
                        <form action="{{ route('delete', $mhs->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-primary" href="{{ route('detail', $mhs->id) }}">Detail</a>
                            <a class="btn btn-warning" href="{{ route('edit', $mhs->id) }}">Edit</a>
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
