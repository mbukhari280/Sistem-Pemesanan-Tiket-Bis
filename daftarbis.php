<style>
#daftar{
background:#transparent;
border:1px solid #ccc;
margin:auto;
width:400px;
padding:4px;
border-radius:3px;
}
.texbox{
border:1px solid #ccc;
height:25px;
}
.texarea{
border:1px solid #ccc;
}
.btn{
width:85px;
height:30px;
color:#099;
font-weight:bold;
margin-bottom:3px;
}
.btn:hover{
background:#333;
color:#fff;
font-weight:bold;
cursor:pointer;
border:2px solid #099;
border-radius:4px;
}
</style>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if ($_POST['act']=="add"){
$sql_add="INSERT INTO tiket_bis (no_ktp,nm_penumpang,jenis_kelamin,rute,nama_bis,kelas_bis,jumlah_tiket) VALUES ("
."'".$_POST['no_ktp']."',
'".$_POST['nm_penumpang']."',
'".$_POST['jenis_kelamin']."',
'".$_POST['rute']."',
'".$_POST['nama_bis']."',
'".$_POST['kelas_bis']."',
'".$_POST['jumlah_tiket']."') ";
@mysql_query($sql_add);
echo'<script>alert("Data Berhasil Disimpan");window.location ="tampilbis.php";</script>';
}
?>
<div id="daftar">
<p align="center">&raquo;FORM PEMESANAN TIKET BIS&laquo;</p>
<table border="0px">
<form method="post" enctype="multipart/form-data">
<tr><td>No KTP</td> <td>:</td> <td><input name="no_ktp" size="25" class="texbox"></td></tr>
<tr><td>Nama Penumpang</td> <td>:</td> <td><input name="nm_penumpang" size="25" class="texbox"></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><select name="jenis_kelamin" class="texbox" value="<?php $_POST['jk']?>">
<option value="pilih">--Pilih--</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select></td></tr>
<tr><td>Rute</td><td>:</td><td><select name="rute" class="texbox" value="<?php $_POST['agama']?>>
<option value="pilih">--Pilih--</option>
<option value="pilih">--Pilih--</option>
<option value="JKTBALI">JKT - BALI</option>
<option value="JKTKUDUS">JKT - KUDUS</option>
<option value="JKTJOGJA">JKT - JOGJA</option>
<option value="JKTSBY">JKT - SURABAYA</option>
</select></td></tr>
<tr><td>Nama Bis</td> <td>:</td><td><input name="nama_bis" size="25" class="texbox"></td></tr>
<tr><td>Kelas Bis</td><td>:</td><td><select name="kelas_bis" class="texbox" value="<?php $_POST['jk']?>">
<option value="pilih">--Pilih--</option>
<option value="Non AC">Ekonomi</option>
<option value="VIP">VIP</option>
<option value="Super">Super Eksekutif</option>
</select></td></tr>
<tr><td>Jumlah Tiket</td> <td>:</td><td><input name="jumlah_tiket" size="25" class="texbox"></td></tr>
<tr><td><input type="submit" value="Simpan" class="btn">
<input type="hidden" name="act" value="add"></td></tr>
</table>
</form>
</div>