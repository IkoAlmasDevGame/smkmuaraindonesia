<?php
include "koneksi.php";
include "function.php";
include "header.php";
?>

<link rel="stylesheet" href="../../assets/css/bootstrap.css" type="text/css">
<script src="../../assets/js/jquery.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.js" type="text/javascript"></script>

<h3><span class="glyphicon glyphicon-breifcase"></span> Data Pendaftaran Siswa / Siswi Baru</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Murid Baru</button>

<?php
$per_hal=10;
$jumlah_record=mysqli_query($conn,"SELECT * from db_pendaftaran");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	<a style="margin-bottom:10px" href="#" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
<?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "data"){
            echo "<center>Data Sudah Terhapus ...</center>";
        }else if($_GET['pesan'] == "simpan"){
            echo "<center>Data Sudah tersimpan di database ...</center>";            
        }else if($_GET['pesan'] == "editor"){
            echo "<center>Data Anda Sudah selesai di edit...</center>";
        }
    }
?>
</div>

<form method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Murid di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br>
<table class="table table-bordered table-hover">
    <tr>
        <td>No</td>
        <th>Nama Lengkap</th>
        <th>Nama Panggilan</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>No Telephone</th>
        <th>Opsi</th>
    </tr>
    <?php
    if(isset($_GET['cari'])){
        $carinama = $_GET['cari'];
        $nm = mysqli_query($conn, "SELECT * FROM db_pendaftaran WHERE nama_panggilan like '%$carinama%'");
    }else{
        $nm = mysqli_query($conn, "SELECT * FROM db_pendaftaran limit $start, $per_hal");
    }
    $no = 1;
    while($db = mysqli_fetch_array($nm)){
    ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?php echo $db['nama_lengkap'];?></td>
            <td><?php echo $db['nama_panggilan'];?></td>
            <td><?=provinsi($db['tempat_lahir']);?></td>
            <td><?=tbt($db['tanggal_lahir']);?></td>
            <td><?=jk($db['jenis_kelamin']);?></td>
            <td><?=agama($db['agama']);?></td>
            <td><?php echo $db['no_telepon'];?></td>
            <td>
                <a href="det_siswa.php?id=<?php echo $db['id'];?>" class="btn btn-warning">Detail</a>
                <a href="edit.php?id=<?php echo $db['id'];?>" class="btn btn-primary">Edit</a>
                <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){
                    location.href='delete.php?id=<?php echo $db['id'];?>'}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<ul class="pagination">			
	<?php 
		for($x=1;$x<=$halaman;$x++){
		?>
		<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
		<?php
	    }
	?>						
</ul>
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				    <h4 class="modal-title">Tambah Siswa/Siswi Baru</h4>
			</div>
            <div class="modal-body">
                <form method="POST" action="act_daftar.php">
                    <div class="form-group">
                        <div class="input-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <label>Nama Panggilan</label>
                            <input type="text" name="nama_panggilan" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <label>Tempat Lahir</label>
                            <select name="tempat_lahir" class="form-control">
                                <?php
                                $dprov = mysqli_query($conn, "SELECT * FROM db_provinsi");
                                while($dp = mysqli_fetch_array($dprov)){
                                ?>
                                <option value="<?php echo $dp['id'];?>"><?php echo $dp['daerah'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                        <div class="input-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <?php
                                $djk = mysqli_query($conn, "SELECT * FROM db_jeniskelamin");
                                while($dg = mysqli_fetch_array($djk)){
                                ?>
                                <option value="<?php echo $dg['id'];?>"><?php echo $dg['gender'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Agama</label>
                            <select name="agama" class="form-control">
                                <?php
                                $da = mysqli_query($conn, "SELECT * FROM db_agama");
                                while($dap = mysqli_fetch_array($da)){
                                ?>
                                <option value="<?php echo $dap['id'];?>"><?php echo $dap['agama'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>No Telephone</label>
                            <input type="text" name="no_telepon" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <label>Nama Lengkap Ayah</label>
                            <input type="text" name="nama_ayah" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <label>Ayah bekerja sebagai</label>
                            <select name="ayah_bekerja_sebagai" class="form-control">
                                <?php
                                $dworkfather = mysqli_query($conn, "SELECT * FROM db_pekerjaan");
                                while($dwf = mysqli_fetch_array($dworkfather)){
                                ?>
                                <option value="<?php echo $dwf['id'];?>"><?php echo $dwf['pekerjaan'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Pendidikan Terakhir Ayah</label>
                            <select name="pendidikan_ayah" class="form-control">
                                <?php
                                $dpa = mysqli_query($conn, "SELECT * FROM db_pendidikan");
                                while($dper = mysqli_fetch_array($dpa)){
                                ?>
                                <option value="<?php echo $dper['id'];?>"><?php echo $dper['pendidikan'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Nama Lengkap Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <label>Ibu bekerja sebagai</label>
                            <select name="ibu_bekerja_sebagai" class="form-control">
                                <?php
                                $dworkfather = mysqli_query($conn, "SELECT * FROM db_pekerjaan");
                                while($dwfi = mysqli_fetch_array($dworkfather)){
                                ?>
                                <option value="<?php echo $dwfi['id'];?>"><?php echo $dwfi['pekerjaan'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Pendidikan Terakhir Ibu</label>
                            <select name="pendidikan_ibu" class="form-control">
                                <?php
                                $dpa = mysqli_query($conn, "SELECT * FROM db_pendidikan");
                                while($dperi = mysqli_fetch_array($dpa)){
                                ?>
                                <option value="<?php echo $dperi['id'];?>"><?php echo $dperi['pendidikan'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="submit" value="SIMPAN DATA" class="btn btn-primary" name="simpan_data">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>