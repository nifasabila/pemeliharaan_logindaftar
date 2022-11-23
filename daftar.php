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
    <h1>Daftar Di RS Sumber Waras</h1>
    <h4><a href="logout.php">LOGOUT</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Umur</th>
            <th>Gmail</th>
        </tr>
<?php
include("koneksi.php");
$sql='SELECT * FROM user';
$query=mysqli_query($koneksi,$sql);
while($db_pemeriksaanhewan=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$db_pemeriksaanhewan['id']."</td>";
    echo"<td>".$db_pemeriksaanhewan['username']."</td>";
    echo"<td>".$db_pemeriksaanhewan['password']."</td>";
    echo"<td>".$db_pemeriksaanhewan['umur']."</td>";
    echo"<td>".$db_pemeriksaanhewan['gmail']."</td>";
    echo"<td>";
    echo "<a href='hapus_daftar.php?id=".$db_pemeriksaanhewan['id']."'>Hapus</a>";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
<h4><a href="tambah_daftar.php"><input type="submit" name="daftar" value="daftar"/></h4></a>
</center>
</body>
</html>