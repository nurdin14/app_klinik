<div style="width: 40%; border: 1px solid black;">
    <table border="0" style="width: 95%;" cellspacing="0" cellpadding="3">
        <tr>
            <td align="top">
                <h5>Apotek <br> <b>Abata Farma</b><br>
                    Jl. Gerakan Koperasi RT04/RW04 Kel. Majalengka Wetan
                </h5>
            </td>
            <td align="top">
                <h5>
                    <b>Praktek Dokter Umum :</b><br>
                    <b>dr.Adhityawan</b><br>
                    SIP : 503/118/DPMPTSP/XII/2019 <br>
                    <b>dr.Tia Indah Wardani</b> <br>
                    SIP : 503/117/DPMPTSP/XII/2019
                </h5>

            </td>
        </tr>
    </table>
    <hr style="margin-top: -3%;">
    <?php foreach ($tampil as $d) : ?>
        <table style="width: 95%; margin-top:-1%;" cellspacing="0" cellpadding="3">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $d['nama'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $d['alamat'] ?></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><?= $d['umur'] ?></td>
            </tr>
        </table>
    <?php endforeach; ?>
</div>

<script>
    window.print();
</script>