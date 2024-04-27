@extends('master')
@section('isi')
    <div class="mb-3">
        <a class="btn btn-primary" href="{{ '/' }}">Kembali</a>
    </div>
    <h2>{{ $mahasiswa->nama }}</h2>
    <h3>{{ $mahasiswa->nim }}</h3>
    <h3>{{ $mahasiswa->jk }}</h3>
@endsection
