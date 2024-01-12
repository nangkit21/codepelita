<?php
    $file = mysqli_connect("localhost","root","","db_pendaftaran");
    $data = mysqli_query($file,"SELECT * FROM tb_daftar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No.HP</th>
            <th>Jurusan</th>
            <th>Jalur pendaftaran</th>
            <th>Nama Sekolah Asal</th>
            <th>Alamat Sekolah Asal</th>
            <th>Informasi</th>
        </tr>
        <?php $i = 1;?>
        <?php while ($calon = mysqli_fetch_assoc($data)):?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $calon["nama"]; ?></td>
                <td><?= $calon["Tempat_lahir"]; ?></td>
                <td><?= $calon["Tanggal_lahir"]; ?></td>
                <td><?= $calon["Alamat"]; ?></td>
                <td><?= $calon["No_HP_Siswa"]; ?></td>
                <td><?= $calon["Pilihan_jurusan"]; ?></td>
                <td><?= $calon["Jalur_pendaftaran"]; ?></td>
                <td><?= $calon["Nama_sekolah_asal"]; ?></td>
                <td><?= $calon["Alamat_sekolah_asal"]; ?></td>
                <td><?= $calon["Informasi"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile ; ?>
    </table>
</body>
</html>