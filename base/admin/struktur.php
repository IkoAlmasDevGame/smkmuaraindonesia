<?php
include "header.php";
include "koneksi.php";
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Struktur Organisasi</h3>

<form method="POST">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Nama Anggota di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br>
<table class="table table-hover table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>Jabatan Anggota</th>
    </tr>
    <?php
    if(isset($_POST['cari'])){
        $no = 1;
        $carinama = $_POST['cari'];
        $sNama = mysqli_query($conn, "SELECT * FROM db_struktur WHERE nama_anggota like '%$carinama%'");
        while($d = mysqli_fetch_array($sNama)){
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $d['nama_anggota'];?></td>
            <td><?php echo $d['jabatan'];?></td>
        </tr>
        <?php
        }
    }    
    ?>
</table>

<?php
include "footer.php";
?>