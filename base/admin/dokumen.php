<?php
include "koneksi.php";
include "header.php";
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Data Dokumen</h3>

<?php
    $sId = mysqli_query($conn, "SELECT * FROM db_document");
    while($db = mysqli_fetch_array($sId)){
        ?>
        <table class="table table-hover table-bordered">
            <tr>
                <td></td>
                <td><input type="hidden" class="form-control" value="<?php echo $db['id'];?>" readonly></td>
            </tr>
            <tr>
                <td>Naungan Sekolah</td>
                <td><input type="text" class="form-control" value="<?php echo $db['naungan'];?>" readonly></td>
            </tr>
            <tr>
                <td>No SK Pendirian</td>
                <td><input type="text" class="form-control" value="<?php echo $db['no_sk_pendirian'];?>" readonly></td>
            </tr>
            <tr>
                <td>Tanggal SK Pendirian</td>
                <td><input type="text" class="form-control" value="<?php echo $db['tanggal_sk_pendirian'];?>" readonly></td>
            </tr>
            <tr>
                <td>No SK Operasional</td>
                <td><input type="text" class="form-control" value="<?php echo $db['no_sk_operasional'];?>" readonly></td>
            </tr>
            <tr>
                <td>Tanggal SK Operasional</td>
                <td><input type="text" class="form-control" value="<?php echo $db['tanggal_sk_operasional'];?>" readonly></td>
            </tr>
            <tr>
                <td>File SK Operasional</td>
                <td><input type="text" class="form-control" value="<?php echo $db['file_sk_operasional'];?>" readonly></td>
            </tr>
            <tr>
                <td>akreditasi</td>
                <td><input type="text" class="form-control" value="<?php echo $db['akreditasi'];?>" readonly></td>
            </tr>
            <tr>
                <td>No SK akreditas</td>
                <td><input type="text" class="form-control" value="<?php echo $db['no_sk_akreditas'];?>" readonly></td>
            </tr>
            <tr>
                <td>Tanggal SK akreditas</td>
                <td><input type="text" class="form-control" value="<?php echo $db['tanggal_sk_akreditas'];?>" readonly></td>
            </tr>
            <tr>
                <td>No Sertifikat Iso</td>
                <td><input type="text" class="form-control" value="<?php echo $db['no_sertifikat_iso'];?>" readonly></td>
            </tr>
        </table>
    <?php
}
?>

<?php
include "footer.php";
?>