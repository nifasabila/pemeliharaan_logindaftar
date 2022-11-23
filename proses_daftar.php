<?php
include("koneksi.php");
if(isset($_POST['kirim'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $umur=$_POST['umur'];
    $gmail=$_POST['gmail'];

   
    $sql="INSERT INTO user (username,password,umur,gmail) VALUES ('$username','$password','$umur','$gmail')";
    $query=mysqli_query($koneksi,$sql);

}else{
    ("akses dilarang");
}
?>