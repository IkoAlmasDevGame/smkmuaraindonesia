<?php
include "koneksi.php";
if(isset($_POST['simpan_data'])){
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

    mysqli_query($conn, "INSERT INTO db_pendaftaran VALUES('','$namalengkap','$namapanggilan','$tempatlahir','$tanggallahir','$jeniskelamin','$agama','$telepon',
    '$namaAyah', '$bekerjaAyah', '$pendidikanAyah', '$namaIbu', '$bekerjaIbu', '$pendidikanIbu')");
    header("location:daftar.php?pesan=simpan");
    }
?>