<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>ITCare</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Data Mahasiswa</div>

                    <div class="card-body">
                        <table class="table">
                            <a href="/mahasiswa/create" class="btn btn-success">Tambahkan Data</a>
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>KTM</th>
                                    <th>Kelas</th>
                                    <th>Kategori masalah</th>
                                    <th>Masalah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswas as $mahasiswa)
                                    <tr>
                                        <td>{{ $mahasiswa->tanggal }}</td>
                                        <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                                        <td>{{ $mahasiswa->ktm }}</td>
                                        <td>{{ $mahasiswa->kelas }}</td>
                                        <td>{{ $mahasiswa->kategori_masalah }}</td>
                                        <td>{{ $mahasiswa->masalah }}</td>
                                        <td>
                                            <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
