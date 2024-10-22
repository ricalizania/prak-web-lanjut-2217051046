@extends ('layouts.app')

@section ('content')

<div class="tambah-user" style="position: absolute; top: 10px; right: 150px;">
    <button type="button" class="btn btn-primary mb-3" style="width: 120px; height: 30px; font-size: 13px; padding: 10px; background-color: #245277; color: white;" onclick="window.location.href='{{ route('user.create') }}'">Tambah User
    </button>
</div>

<h2 style="text-align: center; position: absolute; top: 0px; right: 650px;">List Data</h2>

<!-- <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kelas as $user) { ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td style="padding: 10px;">
                <img src="{{ asset('img/' . $user->foto) }}" alt="Foto User" width="100">
            </td>
            <td><?= $user['jurusan'] ?></td>
            <td><?= $user['semester'] ?></td>
            <td>
                
            
                <button type="button" class="btn btn-primary" style= "background-color: #28a745; color: white;" onclick="window.location.href='{{ route('user.edit', $user['id']) }}'">Edit</button>
                <button type="button" class="btn btn-detail btn-sm" style= "background-color: gold; color: white;" onclick="window.location.href='{{ route('user.show', $user['id']) }}'">Detail</button> 
                <button class="btn btn-delete btn-sm" style= "background-color: red; color: white;" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus user ini?')) { document.getElementById('delete-form-{{ $user['id'] }}').submit(); }">Delete</button>
                <form id="delete-form-{{ $user['id'] }}" action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table> -->

<div class="card-container" style="display: flex; flex-wrap: wrap; gap: 1rem;">
        @foreach ($kelas as $user)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/' . $user->foto) }}" alt="Foto User" width="100">
                <div class="card-body">
                    <h5 class="card-title"><strong><?= $user['nama']?></strong></h5>
                    <p class="card-text">
                        NPM: <?= $user['npm']?> <br>
                        Kelas: <?= $user['nama_kelas']?> <br>
                        Jurusan: <?= $user['jurusan']?> <br>
                        Semester: <?= $user['semester'] ?>
                    </p>
                    <button type="button" class="btn btn-primary" style= "background-color: #28a745; color: white;" onclick="window.location.href='{{ route('user.edit', $user['id']) }}'">Edit</button>
                <button type="button" class="btn btn-detail btn-sm" style= "background-color: gold; color: white;" onclick="window.location.href='{{ route('user.show', $user['id']) }}'">Detail</button> 
                <button class="btn btn-delete btn-sm" style= "background-color: red; color: white;" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus user ini?')) { document.getElementById('delete-form-{{ $user['id'] }}').submit(); }">Delete</button>
                <form id="delete-form-{{ $user['id'] }}" action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection