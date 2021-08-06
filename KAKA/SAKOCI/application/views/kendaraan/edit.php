<?php echo form_open('kendaraanserver/edit'); ?>
<?php echo form_hidden('id', $data_kendaraan[0]->id); ?>
<style> 
        body{ 
            background-color: #1E90FF; 
        } 
        h1{ 
            height: 25px; 
            padding: 80px; 
            margin-bottom: 25px; 
            margin-top: 5px; 
            color: #FFF; 
        } 
        td{ 
            color: #FFF; 
        } 
</style>
<h1 align=center>Edit Data Kendaraan</h1>
<table align=center>
    <tr><td>ID</td><td><?php echo form_input('id', $data_kendaraan[0]->id, "disabled"); ?></td></tr>
    <tr><td>No Kendaraan</td><td><?php echo form_input('no_kendaraan', $data_kendaraan[0]->no_kendaraan); ?></td></tr>
    <tr><td>merk</td><td><?php echo form_input('merk', $data_kendaraan[0]->merk); ?></td></tr>
    <tr><td>tahun_pembuatan</td><td><?php echo form_input('tahun_pembuatan', $data_kendaraan[0]->tahun_pembuatan); ?></td></tr>
    <tr><td>Tipe</td><td><?php echo form_input('tipe', $data_kendaraan[0]->tipe); ?></td></tr>
    <tr><td>jenis</td><td><?php echo form_input('jenis', $data_kendaraan[0]->jenis); ?></td></tr>
    <tr><td>no_rangka</td><td><?php echo form_input('no_rangka', $data_kendaraan[0]->no_rangka); ?></td></tr>
    <tr><td>no_mesin</td><td><?php echo form_input('no_mesin', $data_kendaraan[0]->no_mesin); ?></td></tr>
    <tr><td>warna</td><td><?php echo form_input('warna', $data_kendaraan[0]->warna); ?></td></tr>
    <tr><td>warna_tnkb</td><td><?php echo form_input('warna_tnkb', $data_kendaraan[0]->warna_tnkb); ?></td></tr>
    <tr><td>no_bpkb</td><td><?php echo form_input('no_bpkb', $data_kendaraan[0]->no_bpkb); ?></td></tr>
    <tr><td align=center colspan="2">
    <?php echo form_submit('submit', 'Simpan'); ?>
    <?php echo anchor('kendaraanserver', 'Kembali'); ?></td></tr>
</table>
<?php
echo form_close();
?>