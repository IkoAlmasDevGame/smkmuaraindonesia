<?php
include "koneksi.php";
include "header.php";
include "function.php";
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Data Siswa/Siswi</h3>
<a class="btn" href="daftar.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $qId = mysqli_query($conn, "SELECT * FROM db_pendaftaran WHERE id='$id'");
    if($d = mysqli_fetch_array($qId)){
    ?>
    <table class="table table-hover table-bordered">
        <tr>
            <td></td>
            <td><input type="hidden" name="id" value="<?php echo $d['id'];?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="nama_lengkap" class="form-control" value="<?php echo $d['nama_lengkap'];?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Panggilan</td>
            <td><input type="text" name="nama_panggilan" class="form-control" value="<?php echo $d['nama_panggilan'];?>" readonly></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" class="form-control" value="<?=provinsi($d['tempat_lahir']);?>" readonly></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $d['tanggal_lahir'];?>" readonly></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin" class="form-control" value="<?=jk($d['jenis_kelamin']);?>" readonly></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><input type="text" name="agama" class="form-control" value="<?=agama($d['agama']);?>" readonly></td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td><input type="tel" name="no_telepon" class="form-control" value="<?php echo $d['no_telepon'];?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Lengkap Ayah</td>
            <td><input type="text" name="nama_ayah" class="form-control" value="<?php echo $d['nama_ayah'];?>" readonly></td>
        </tr>
        <tr>
            <td>Ayah Bekerja Sebagai</td>
            <td><input type="text" name="ayah_bekerja_sebagai" class="form-control" value="<?=pekerjaanAyah($d['ayah_bekerja_sebagai']);?>" readonly></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir Ayah</td>
            <td><input type="text" name="pendidikan_ayah" class="form-control" value="<?=pendidikanAyah($d['pendidikan_ayah']);?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Lengkap Ibu</td>
            <td><input type="text" name="nama_ibu" class="form-control" value="<?php echo $d['nama_ibu'];?>" readonly></td>
        </tr>
        <tr>
            <td>Ibu Bekerja Sebagai</td>
            <td><input type="text" name="ibu_bekerja_sebagai" class="form-control" value="<?=pekerjaanIbu($d['ibu_bekerja_sebagai']);?>" readonly></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir Ibu</td>
            <td><input type="text" name="pendidikan_ibu" class="form-control" value="<?=pendidikanIbu($d['pendidikan_ibu']);?>" readonly></td>
        </tr>
    </table>
    <?php
    }
}
?>

<?php
include "footer.php";
?>