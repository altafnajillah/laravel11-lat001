@extends('master')
@section('isi')
    <form action="{{ route('update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}">
        </div>
        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="lk" value="Laki-laki"
                    {{ $mahasiswa->jk == 'Laki-laki' ? 'checked' : '' }}>
                <label class="form-check-label" for="lk">
                    Laki-laki
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="pr" value="Perempuan"
                    {{ $mahasiswa->jk == 'Perempuan' ? 'checked' : '' }}>
                <label class="form-check-label" for="pr">
                    Perempuan
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
