<center>
    <table border="1" cellspacing="0" cellpadding="3">
        <thead>
            <tr>
                <th>Nomer </th>
                <th>Nama Petugas</th>
                <th>No.Telpon</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($tampil as $t) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $t['nama']; ?></td>
                    <td><?= $t['no_hp']; ?></td>
                    <td><?= $t['alamat']; ?></td>
                    <td><?= $t['username']; ?></td>
                    <td><?= $t['password']; ?></td>
                    <td><?= $t['level']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</center>
<script>
    window.print();
</script>