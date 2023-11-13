<!DOCTYPE html>
<html lang="en">

<head>
    <title>input form DI-LEMAS</title>
</head>

<body>
    <h3>Silahkan Masukkan Data Siswa</h3>
    <form action="<?= base_url('Dilemas/cetak'); ?>" method="post">
        <table>
            <tr>
                <td width='120'>Nama Siswa</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM </td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Kelas </td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Tempat Lahir </td>
                <td><input type="text" name="tmptlhr"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td><input type="text" name="tgllhr" placeholder="dd-mm-yyyy"></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <td>
                    <input type="radio" name="jeniskel" value="Laki - Laki">Laki-Laki
                    <input type="radio" name="jeniskel" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama </td>
                <td> <select name="agama">
                        <option value="------">
                        <option value="Islam">Islam
                        <option value="Kristen">Kristen
                        <option value="Katolik">Katolik
                        <option value="Budha">Budha
                        <option value="Hindu">Hindu
                        <option value="Protestan">Protestan
                        <option value="Khonghucu">Khonghucu
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>

        </table>
    </form>
</body>

</html>