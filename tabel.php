<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php include 'breadcrumb.php'; ?>
    <?php include 'pagination.php'; ?>
    <body style="background-color: #FFC0CB !important;">
    <div class="container mt-4">
        <h1 class="mb-4">Data Tabel</h1>

        <table class="table table-striped table-hover table-bordered">
            <thead class="table-danger">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>nomor telefon</th>
                    <th>dusun</th>
                    <th>pengaduan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Machika Eina Humaidah</td>
                    <td>0898765432</td>
                    <td>dusun kerajan</td>
                    <td>jalan di depan gang rumah saya rt.006 rw.004 berlubang dan menjadi rawan kecelakaan</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>chalista eka puspita</td>
                    <td>09876567845</td>
                    <td>dusun ajung oloh</td>
                    <td>jika malam hari banyak pemuda mabuk di jembatan</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>bunga risia imawarda</td>
                    <td>02345666654</td>
                    <td>dusun sumber malang</td>
                    <td>tanah saya sengketa dengan tetangga saya mohon di lihat patoknya, agar kami sepakat batas patok di mana maka kamu butuh pihak desa sebagai saksi</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>agus brigianto</td>
                    <td>0876543234567</td>
                    <td>dusun kerajan</td>
                    <td>gapura di gang saya mau roboh jadi berbahaya untuk warga sekitar</td>
                </tr>
                <tr>
    <td>5</td>
    <td>Aufelia Meiza Maulida Fatimah</td>
    <td>076543234567</td>
    <td>dusun ajung tengah</td>
    <td>jalan bekas rel kereta terlalu tinggi sepertinya butuh di perbaiki atau di bongkar saja karena banyak menyebabkan kecelakaan lalulintas</td>
</tr>
</tbody>
</table>

<a href="form.php" class="btn btn-primary mt-3">Input Form</a>
<a href="belajar.php" class="btn btn-info mt-3">Kembali ke Halaman Belajar</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

