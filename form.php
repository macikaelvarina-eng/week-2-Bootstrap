<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form pengaduan suara desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <body style="background-color: #FFC0CB !important;">
        <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h3 class="card-title mb-0">Form pengaduan suara desa</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
<label for="nama" class="form-label">Nama warga</label>
<input type="text" class="form-control" id="nama" name="nama"
       placeholder="Masukkan nama warga" required>
</div>

<div class="mb-3">
    <label for="nomor" class="form-label">nomor telfon</label>
    <input type="text" class="form-control" id="nomor" name="nomor"
           placeholder="Masukkan nomor telfon warga" required>
</div>

<div class="mb-3">
    <label for="dusun" class="form-label">dusun</label>
    <select class="form-select" id="dusun" name="dusun" required>
        <option value="">-- Pilih dusun --</option>
        <option value="Dusun kerajan">Dusun kerajan</option>
        <option value="Dusun Ajung oloh">Dusun Ajung oloh</option>
        <option value="Dusun Ajung Tengah">Dusun Ajung Tengah</option>
        <option value="Dusun Sumber Malang">Dusun Sumber Malang</option>
    </select>
</div>

<div class="mb-3">
    <label for="aduan" class="form-label">aduan</label>
    <textarea class="form-control" id="aduan" name="aduan" rows="3"
              placeholder="aduan atau saran yang ingin di sampaikan" required></textarea>
</div>

<div class="d-flex gap-2">
    <button type="submit" class="btn btn-info">Simpan Data</button>
    <button type="reset" class="btn btn-danger">Reset</button>
</div>

</form>
</div>
            </div>

            <div class="mt-3">
                <a href="belajar.php" class="btn btn-outline-primary">Kembali ke Halaman Belajar</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
