<!DOCTYPE html>
<html lang="en">

<head>
    <title>Output form DI-LEMAS</title>
</head>

<body>
    <h3>Informasi Data Siswa</h3>
    <form>
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><?= $nim; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kelas; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?= $tmptlhr; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?= $tgllhr; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $alamat; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $jeniskel; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?= $agama; ?></td>
            </tr>
            <tr>
                <td>
                    <a href="<?= base_url('Dilemas'); ?>">Kembali ke form Input</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>