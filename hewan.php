<html>
    <head>
</head>
<center>
<body>
<?php
    session_start();
    if($_SESSION['status']!="login"){
     header("location:../login.php?pesan=belum_login");
    }
    ?>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>!anda telah login.</h4>
    <h1>Pemeriksaan Hewan Di RS Sumber Waras</h1>
    <form action="hewan.php" method="get">
        <label>cari:</label>
        <input type="text" name="cari">
        <input type="submit" value="cari">
</form>

<?php
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian:".$cari."</b>";
}
?>
    <h4><a href="logout.php">LOGOUT</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama Pemilik</th>
            <th>Jenis Hewan</th>
            <th>Keluhan</th>
        </tr>
<?php
include("koneksi.php");
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="SELECT * FROM tb_pemeriksaan WHERE nama LIKE '%" .$cari."%'";
    $query=mysqli_query($koneksi,$sql);
}else{
    $sql='SELECT * FROM tb_pemeriksaan';
    $query=mysqli_query($koneksi,$sql);
}
while($db_pemeriksaanhewan=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$db_pemeriksaanhewan['id']."</td>";
    echo"<td>".$db_pemeriksaanhewan['nama']."</td>";
    echo"<td>".$db_pemeriksaanhewan['jh']."</td>";
    echo"<td>".$db_pemeriksaanhewan['keluhan']."</td>";
    echo"<td>";
    echo "<a href='edit.php?id=".$db_pemeriksaanhewan['id']."'>Edit</a>|";
    echo "<a href='hapus.php?id=".$db_pemeriksaanhewan['id']."'>Hapus</a>";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
<h4><a href="tambah.php"><input type="submit" name="tambah" value="tambah"/></h4></a>
</center>
</body>
</html>