<?php
include "koneksi.php";
include "header.php";
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Data ISP</h3>

<?php
    $sId = mysqli_query($conn, "SELECT * FROM db_isp");
    while($db = mysqli_fetch_array($sId)){
        ?>
        <table class="table table-hover table-bordered">
            <tr>
                <td></td>
                <td><input type="hidden" class="form-control" value="<?php echo $db['id'];?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Sekolah</td>
                <td><input type="text" class="form-control" value="<?php echo $db['namasekolah'];?>" readonly></td>
            </tr>
            <tr>
                <td>nspn</td>
                <td><input type="text" class="form-control" value="<?php echo $db['nspn'];?>" readonly></td>
            </tr>
            <tr>
                <td>Alamat Sekolah</td>
                <td><input type="text" class="form-control" value="<?php echo $db['alamat'];?>" readonly></td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td><input type="text" class="form-control" value="<?php echo $db['kode_pos'];?>" readonly></td>
            </tr>
            <tr>
                <td>Kelurahan</td>
                <td><input type="text" class="form-control" value="<?php echo $db['kelurahan'];?>" readonly></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td><input type="text" class="form-control" value="<?php echo $db['kecamatan'];?>" readonly></td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td><input type="text" class="form-control" value="<?php echo $db['kabupaten'];?>" readonly></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td><input type="text" class="form-control" value="<?php echo $db['provinsi'];?>" readonly></td>
            </tr>
            <tr>
                <td>Status Sekolah</td>
                <td><input type="text" class="form-control" value="<?php echo $db['status_sekolah'];?>" readonly></td>
            </tr>
            <tr>
                <td>Waktu Penyelenggaraan</td>
                <td><input type="text" class="form-control" value="<?php echo $db['waktu_penyelenggaraan'];?>" readonly></td>
            </tr>
            <tr>
                <td>Jenjang Pendidika</td>
                <td><input type="text" class="form-control" value="<?php echo $db['jenjang_pendidikan'];?>" readonly></td>
            </tr>
        </table>
    <?php
}
?>

<?php
include "footer.php";
?>