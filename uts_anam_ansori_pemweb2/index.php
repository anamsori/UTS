<html>
<head><title>Form Input Mahasiswa</title>
    <style type="text/css">
    h1{color:black;font-family:"Elephant"}
    </style>
    <style type="text/css">
    td{font-family:Elephant;}
    h3{font-family:Mv Boli;}
    b{color:yellow;}
    table{background-color:026510;}
</style>
</head>
<body bgcolor=green>
    <center>
    <h1>Form Input pasiencovid 19</h1>
    <form method="post" action="output.php">
    <table border="0">
    <tr>
        <td>Nama Wilayah</td>
        <td>:</td>
        <td><select name="wilayah">
            <option value="" selected="selected">Wilayah
            <option value="jakarta">DKI Jakarta</option>
            <option value="jabar">Jawa Barat</option>
            <option value="banten">Banten</option>
            <option value="jateng">Jawa Tengah</option>
        </select>
    </tr>
    <tr>
        <td>jumlah positif</td>
        <td>:</td>
        <td><input type="text" name="jml" size=40/></td>
    </tr>
    <tr>
        <td>Jumlah Dirawat</td>
        <td>:</td>
        <td><input type="text" name="rawat" size=40/></td>
    </tr>
    
    <tr>
        <td>Jumlah sembuh</td>
        <td>:</td>
        <td><input type="text" name="sembuh" size=40/></td>
    </tr>
    <tr>
        <td>Jumlah Meninggal</td>
        <td>:</td>
        <td><input type="text" name="meninggal" size=40/></td>
    </tr>
    <tr>
        <td>Nama Operator</td>
        <td>:</td>
        <td><input type="text" name="op" size=40/></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="text" name="nim" size=40/></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" value="Daftar"/></td>
    </tr>
    </table>
    </form>
    </center>
</body>
</html>