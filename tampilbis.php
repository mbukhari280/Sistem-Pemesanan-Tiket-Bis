<style>
#anggota{
background:#transparent;
border:1px solid #ccc;
margin:auto;
width:710px;
padding:4px;
border-radius:3px;
}
.tabel{
border:1px solid #ccc;
}
#tr{
border:1px solid #ccc;
background:#444;
color:fff;
padding:12px;
text-align:center;
}
</style>
<div id="rpl_test">
<p align="center">DAFTAR PEMESANAN TIKET BIS</p>
<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
$sql="SELECT * FROM tiket_bis";
$result = mysql_query($sql);
echo"<table border='1px'>";
echo"<td>No KTP</td>";
echo"<td>Nama Penumpang</td>";
echo"<td>Jenis Kelamin</td>";
echo"<td>Rute</td>";
echo"<td>Nama Bis</td>";
echo"<td>Kelas Bis</td>";
echo"<td>Jumlah Tiket</td>";
echo"</tr>";
while ($row = mysql_fetch_array($result))
{
echo "<tr>";
echo"<td>".$row['no_ktp']."</td>";
echo"<td>".$row['nm_penumpang']."</td>";
echo"<td>".$row['jenis_kelamin']."</td>";
echo"<td>".$row['rute']."</td>";
echo"<td>".$row['nama_bis']."</td>";
echo"<td>".$row['kelas_bis']."</td>";
echo"<td>".$row['jumlah_tiket']."</td>";
echo"</tr>";
}
echo"</table>";
?>
<a href="daftarbis.php">&laquo; Back</a>
</div>