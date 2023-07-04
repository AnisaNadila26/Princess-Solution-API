<?php
header("Content-Type: application/vnds-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa.xls"); ?>
<html lang="en">
<body>
    <center>
        <h1>Data Kursus Mengemudi<br>CV. PRINCESS SOLUTION</h1>
    </center>
    <table border="1">
        <thead>
            <tr>
                <th scope="col">No.Registrasi</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat, Tanggal Lahir</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telpon</th>
                <th scope="col">Tanggal Pendaftaran</th>
                <th scope="col">Jenis Kendaraan</th>
                <th scope="col">Instruktur</th>
                <th scope="col">Paket</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($siswa as $row) :
            ?>
                <tr>
                    <td scope="row"><?= $row['no_registrasi'] ?></td>
                    <td scope="row"><?= $row['nama'] ?></td>
                    <td scope="row"><?= $row['ttl'] ?></td>
                    <td scope="row"><?= $row['pekerjaan'] ?></td>
                    <td scope="row"><?= $row['alamat'] ?></td>
                    <td scope="row"><?= $row['telpon'] ?></td>
                    <td scope="row"><?= $row['created_at'] ?></td>
                    <td scope="row"><?= $row['kode_kendaraan'] ?></td>
                    <td scope="row"><?= $row['instruktur'] ?></td>
                    <td scope="row"><?= $row['paket'] ?></td>
                    <td scope="row"><?= $row['status'] ?></td>
                </tr>
            <?php endforeach; ?>

            <?php
            foreach ($alumni as $row) :
            ?>
                <tr>
                    <td scope="row"><?= $row['no_registrasi'] ?></td>
                    <td scope="row"><?= $row['nama'] ?></td>
                    <td scope="row"><?= $row['ttl'] ?></td>
                    <td scope="row"><?= $row['pekerjaan'] ?></td>
                    <td scope="row"><?= $row['alamat'] ?></td>
                    <td scope="row"><?= $row['telpon'] ?></td>
                    <td scope="row"><?= $row['created_at'] ?></td>
                    <td scope="row"><?= $row['kode_kendaraan'] ?></td>
                    <td scope="row"><?= $row['instruktur'] ?></td>
                    <td scope="row"><?= $row['paket'] ?></td>
                    <td scope="row"><?= $row['status'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>