<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $namalengkap = $_POST['nama_lengkap'];
    $namapanggilan = $_POST['nama_panggilan'];
    $tempatlahir = $_POST['tempat_lahir'];
    $tanggallahir = $_POST['tanggal_lahir'];
    $jeniskelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $telepon = $_POST['no_telepon'];

    $namaAyah = $_POST['nama_ayah'];
    $bekerjaAyah = $_POST['ayah_bekerja_sebagai'];
    $pendidikanAyah = $_POST['pendidikan_ayah'];

    $namaIbu = $_POST['nama_ibu'];
    $bekerjaIbu = $_POST['ibu_bekerja_sebagai'];
    $pendidikanIbu = $_POST['pendidikan_ibu'];

    $hasil = mysqli_query($conn, "UPDATE db_pendaftaran SET nama_lengkap='$namalengkap', nama_panggilan='$namapanggilan', tempat_lahir='$tempatlahir', 
    tanggal_lahir='$tanggallahir', jenis_kelamin='$jeniskelamin', agama='$agama', no_telepon='$telepon', nama_ayah='$namaAyah', ayah_bekerja_sebagai='$bekerjaAyah', 
    pendidikan_ayah='$pendidikanAyah', nama_ibu='$namaIbu', ibu_bekerja_sebagai='$bekerjaIbu', pendidikan_ibu='$pendidikanIbu' WHERE id='$id'");
    $cek = mysqli_num_rows($hasil) or mysqli_fetch_array($hasil, MYSQLI_BOTH);

    if($cek > 0){
        header("location:daftar.php?pesan=editor");
    }else{
        header("location:edit.php");
    }
}
?>