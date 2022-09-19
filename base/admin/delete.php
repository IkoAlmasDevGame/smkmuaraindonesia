<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM db_pendaftaran WHERE id='$id'");
    header("location:daftar.php?pesan=data");
}
?>