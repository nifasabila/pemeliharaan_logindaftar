<?php
include("koneksi.php");
isset($_GET['simpan']);
$kode = $_GET['id'];
$sql= "DELETE FROM tb_pemeriksaan where id=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('Location:hewan.php?status=sukses');
}else{

    die("akses dilarang");
}

?>