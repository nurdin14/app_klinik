<center>
    <table border="1" cellspacing="0" cellpadding="3">
        <thead>
            <tr>
                <th>Nomer </th>
                <th>No.RM</th>
                <th>Nama Pasien</th>
                <th>Umur</th>
                <th>No.Telpon</th>
                <th>Alamat</th>
                <th>Alergi Obat</th>
                <th>Anamnesa</th>
                <th>Diagnosa</th>
                <th>Terapi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($tampil as $t) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $t['id_pasien']; ?></td>
                    <td><?= $t['nama']; ?></td>
                    <td><?= $t['umur']; ?></td>
                    <td><?= $t['no_hp']; ?></td>
                    <td><?= $t['alamat']; ?></td>
                    <td><?= $t['alergi_obat']; ?></td>
                    <td><?= $t['anamnesa']; ?></td>
                    <td><?= $t['diagnosa']; ?></td>
                    <td><?= $t['terapi']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</center>
<script>
    window.print();
</script>