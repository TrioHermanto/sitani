<?php
$id = $_POST['id'];
$detail = $this->db->query("SELECT * FROM pohon WHERE id = '$id'")->result_array();
?>

<table class="table table-bordered">
    <?php foreach ($detail as $d) : ?>
        <tr>
            <th>Kode Pohon</th>
            <td><?php echo $d['kode']; ?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?php echo $d['name']; ?></td>
        </tr>
        <tr>
            <th>Jenis</th>
            <td><?php echo $d['jenis']; ?></td>
        </tr>
        <tr>
            <th>Usia</th>
            <td><?php echo $d['usia']; ?></td>
        </tr>
        <tr>
            <th>Tanggal Penanaman</th>
            <td><?php echo $d['tgl_penanaman']; ?></td>
        </tr>
        <tr>
            <th>Tanggal Penyemprotan</th>
            <td><?php echo $d['tgl_penyemprotan']; ?></td>
        </tr>
        <tr>
            <th>Tanggal Pemupukan</th>
            <td><?php echo $d['tgl_pemupukan']; ?></td>
        </tr>
        <tr>
            <th>Tanggal Pemanenan</th>
            <td><?php echo $d['tgl_pemanenan']; ?></td>
        </tr>
        <tr>
            <th>Qr Code</th>
            <td style="height: 100px;"><img src="<?php echo base_url('assets/images/pohon/barcode/') . $d['barcode']; ?>" class="img-thumbnail" style="width: 100px; height: 100px;"></td>
        </tr>

    <?php endforeach ?>
</table>