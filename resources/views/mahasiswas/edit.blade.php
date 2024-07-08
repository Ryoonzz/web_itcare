<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>ITCare | Mahasiswa | Edit</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Data Untuk Mahasiswa</div>
                    <div class="card-body">
                        <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" name="tanggal" class="form-control" value="{{ $mahasiswa->tanggal }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_mahasiswa">Nama Mahasiswa:</label>
                                <input type="text" name="nama_mahasiswa" class="form-control" value="{{ $mahasiswa->nama_mahasiswa }}" required>
                            </div>
                            <div class="form-group">
                                <label for="ktm">KTM:</label>
                                <input type="tel" name="ktm" class="form-control" value="{{ $mahasiswa->ktm }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas:</label>
                                <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kategori_masalah">Kategori masalah:</label>
                                <input type="text" name="kategori_masalah" class="form-control" value="{{ $mahasiswa->kategori_masalah }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="masalah">Masalah:</label>
                                <input type="text" name="masalah" class="form-control" value="{{ $mahasiswa->masalah }}" required>
                            </div>
                            <a href="{{ route('mahasiswas.index') }}" class="btn btn-md btn-danger">Kembali</a>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>
                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>