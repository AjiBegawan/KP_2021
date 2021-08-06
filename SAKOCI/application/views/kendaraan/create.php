<html>
<?php echo form_open_multipart('kendaraanserver/create'); ?>
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
<h1 align=center>Tambah Data</h1>
<table align=center>
    <tr>
        <td>ID</td><td><?php echo form_input('id'); ?></td>
    </tr>
    <tr>
        <td>No_kendaraan</td><td><?php echo form_input('no_kendaraan'); ?></td>
    </tr>        
    <tr>
        <td>Merk</td><td><?php echo form_input('merk'); ?></td>
    </tr> 
    <tr>
        <td>tahun_pembuatan</td><td><?php echo form_input('tahun_pembuatan'); ?></td>
    </tr>
    <tr>
        <td>tipe</td><td><?php echo form_input('tipe'); ?></td>
    </tr>
    <tr>
        <td>jenis</td><td><?php echo form_input('jenis'); ?></td>
    </tr>
    <tr>
        <td>no_rangka</td><td><?php echo form_input('no_rangka'); ?></td>
    </tr>
    <tr>
        <td>no_mesin</td><td><?php echo form_input('no_mesin'); ?></td>
    </tr>
    <tr>
        <td>warna</td><td><?php echo form_input('warna'); ?></td>
    </tr>
    <tr>
        <td>warna_tnkb</td><td><?php echo form_input('warna_tnkb'); ?></td>
    </tr>
    <tr>
        <td>no_bpkb</td><td><?php echo form_input('no_bpkb'); ?></td>
    </tr> 
    <tr>
        <td colspan="2" align=center>
            <?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('Kendaraanserver', 'Kembali'); ?></td></tr>
</table>
<?php
echo form_close();
?>
</html>