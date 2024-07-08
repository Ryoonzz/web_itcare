<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>ITCare | Mahasiswa | Create</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Buat Data Baru Untuk Mahasiswa</div>
                    <div class="card-body">
                        <form action="{{ route('mahasiswas.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_mahasiswa">Nama Mahasiswa:</label>
                                <input type="text" name="nama_mahasiswa" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="ktm">KTM:</label>
                                <input type="tel" name="ktm" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas:</label>
                                <input type="text" name="kelas" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="kategori_masalah">Kategori masalah:</label>
                                <select name="kategori_masalah" class="form-select" required>
                                    <option value="Lupa password/Student portal">Lupa password/Student portal</option>
                                    <option value="Email tidak bisa login">Email tidak bisa login</option>
                                    <option value="Cetak kartu">Cetak kartu</option>
                                    <option value="Absensi">Absensi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="masalah">Masalah:</label>
                                <input type="text" name="masalah" class="form-control" required>
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