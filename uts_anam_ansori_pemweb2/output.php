<?php
$wilayah=$_POST['wilayah'];
$jml=$_POST['jml'];
$rawat=$_POST['rawat'];
$sembuh=$_POST['sembuh'];
$meninggal=$_POST['meninggal'];
$op=$_POST['op'];
$nim=$_POST['nim'];
?>
<a href="index.php">Input pasien covid 19</a>
<form method="POST">
<table width="400" border="1" align="center">
<tr>
    <td colspan="3" align="center">Data pasien covid 19</td>
</tr>
<tr>
    <td>Nama Wilayah</td>
    <td>:</td>
    <td><?php echo "$wilayah"?></td>
</tr>
<tr>
    <td>Jumlah Positif</td>
    <td>:</td>
    <td><?php echo "$jml"?></td>
</tr>
<tr>
    <td>Jumlah Dirawat</td>
    <td>:</td>
    <td><?php echo "$rawat"?></td>
</tr>
<tr>
    <td>Jumlah Sembuh</td>
    <td>:</td>
    <td><?php echo "$sembuh"?></td>
</tr>
<tr>
    <td>Jumlah Meninggal</td>
    <td>:</td>
    <td><?php echo "$meninggal"?></td>
</tr>
<tr>
    <td>Nama Operator</td>
    <td>:</td>
    <td><?php echo "$op"?></td>
</tr>
<tr>
    <td>NIM</td>
    <td>:</td>
    <td><?php echo "$nim"?></td>
</tr>
</table>
</form>

 
