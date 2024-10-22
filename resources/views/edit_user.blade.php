@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">

    <h2 style="text-align: center; position: absolute; top: 0px; right: 630px;">Edit Data</h2>

        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" value="{{ old('nama', $user->nama) }}">
 
        <label for="npm">NPM : </label>
        <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM" value="{{ old('npm', $user->npm) }}">
        
        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                {{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        <label for="foto" class="form-label">Foto</label>
        <input class="form-control" type="file" id="foto" name="foto">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <label for="jurusan">Jurusan : </label>
        <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Masukkan Jurusan" value="{{ old('jurusan', $user->jurusan) }}">

        <label for="semester">Semester : </label>
        <input type="text" id="semester" name="semester" class="form-control" placeholder="Masukkan Semester" value="{{ old('semester', $user->semester) }}">

<div class="form-group submit-container">
<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection