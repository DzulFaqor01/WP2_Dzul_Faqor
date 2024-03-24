<html>

<head>
    <title>Web Bimo</title>
</head>

<body>
    <h1>Selamat Datang di Web Saya</h1>
    <p> Ini adalah halaman awal atau selamat datang dari web ini <br>
        Tampilan ini muncuk dari view bimo.php <br>
        dipanggil oleh controler welcome yang sudah diatur sebagai default page</p>
    <table>
        <tr>
            <td colspan="2">Daftar isi</td>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="<?= base_url('Contoh1'); ?>">Contoh1</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td><a href="<?= base_url('Latihan1'); ?>">Latihan1</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td><a href="<?= base_url('Matakuliah'); ?>">Form Input Data Mahasiswa</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td><a href="<?= base_url('Web'); ?>">Rental Buku</a></td>
        </tr>
        <tr>
            <td>5</td>
            <td><a href="<?= base_url('Dilemas'); ?>">Di-Lemas</a></td>
        </tr>
        <tr>
            <td>6</td>
            <td><a href="<?= base_url('Autentifikasi'); ?>">Autentifikasi</a></td>
        </tr>
    </table>
</body>

</html>