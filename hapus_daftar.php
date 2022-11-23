<?php
include("koneksi.php");
isset($_GET['simpan']);
$kode = $_GET['id'];
$sql= "DELETE FROM user where id=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('Location:daftar.php?status=sukses');
}else{

    die("akses dilarang");
}

?>