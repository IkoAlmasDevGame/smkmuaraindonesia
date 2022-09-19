<?php
include "koneksi.php";
include "header.php";
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Data Siswa</h3>
<a class="btn" href="daftar.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $edit = mysqli_query($conn, "SELECT * FROM db_pendaftaran WHERE id='$id'");
    if($ed = mysqli_fetch_array($edit)){
    ?>
    <form action="act_edit.php" method="POST">
        <table class="table table-hover table-bordered">
            <tr>
                <td></td>
                <td><input type="hidden" name="id" value="<?php echo $ed['id'];?>"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" class="form-control" value="<?php echo $ed['nama_lengkap'];?>"></td>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td><input type="text" name="nama_panggilan" class="form-control" value="<?php echo $ed['nama_panggilan'];?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>
                    <select name="tempat_lahir" class="form-control">
                    <?php
                        $dprov = mysqli_query($conn, "SELECT * FROM db_provinsi");
                        while($dp = mysqli_fetch_array($dprov)){
                            ?>
                            <option value="<?php echo $dp['id'];?>" <?php if($ed['tempat_lahir'] == $dp['id']){?>selected="" <?php }?>><?php echo $dp['daerah'];?></option>
                        <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $ed['tanggal_lahir'];?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" class="form-control">
                        <?php
                            $djk = mysqli_query($conn, "SELECT * FROM db_jeniskelamin");
                            while($dg = mysqli_fetch_array($djk)){
                        ?>
                            <option value="<?php echo $dg['id'];?>" <?php if($ed['jenis_kelamin'] == $dg['id']){?>selected="" <?php }?>><?php echo $dg['gender'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama" class="form-control">
                        <?php
                            $da = mysqli_query($conn, "SELECT * FROM db_agama");
                            while($dap = mysqli_fetch_array($da)){
                        ?>
                            <option value="<?php echo $dap['id'];?>" <?php if($ed['agama'] == $dap['id']){?>selected="" <?php }?>><?php echo $dap['agama'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>No Telepone</td>
                <td><input type="text" name="no_telepon" class="form-control" value="<?php echo $ed['no_telepon'];?>"></td>
            </tr>
            <tr>
                <td>Nama Lengkap Ayah</td>
                <td><input type="text" name="nama_ayah" class="form-control" value="<?php echo $ed['nama_ayah'];?>"></td>
            </tr>
            <tr>
                <td>Ayah bekerja sebagai</td>
                <td>
                    <select name="ayah_bekerja_sebagai" class="form-control">
                        <?php
                            $dworkfather = mysqli_query($conn, "SELECT * FROM db_pekerjaan");
                            while($dwf = mysqli_fetch_array($dworkfather)){
                        ?>
                            <option value="<?php echo $dwf['id'];?>" <?php if($ed['ayah_bekerja_sebagai'] == $dwf['id']){?>selected="" <?php }?>><?php echo $dwf['pekerjaan'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah</td>
                <td>
                    <select name="pendidikan_ayah" class="form-control">
                        <?php
                            $dpa = mysqli_query($conn, "SELECT * FROM db_pendidikan");
                            while($dper = mysqli_fetch_array($dpa)){
                        ?>
                            <option value="<?php echo $dper['id'];?>" <?php if($ed['pendidikan_ayah'] == $dper['id']){?>selected="" <?php }?>><?php echo $dper['pendidikan'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap Ibu</td>
                <td><input type="text" name="nama_ibu" class="form-control" value="<?php echo $ed['nama_ibu'];?>"></td>
            </tr>
            <tr>
                <td>Ayah bekerja sebagai</td>
                <td>
                    <select name="ibu_bekerja_sebagai" class="form-control">
                        <?php
                            $dworkmother = mysqli_query($conn, "SELECT * FROM db_pekerjaan");
                            while($dwfi = mysqli_fetch_array($dworkmother)){
                        ?>
                            <option value="<?php echo $dwfi['id'];?>" <?php if($ed['ibu_bekerja_sebagai'] == $dwfi['id']){?>selected="" <?php }?>><?php echo $dwfi['pekerjaan'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ibu</td>
                <td>
                    <select name="pendidikan_ibu" class="form-control">
                        <?php
                            $dpi = mysqli_query($conn, "SELECT * FROM db_pendidikan");
                            while($dperi = mysqli_fetch_array($dpi)){
                        ?>
                            <option value="<?php echo $dperi['id'];?>" <?php if($ed['pendidikan_ibu'] == $dperi['id']){?>selected="" <?php }?>><?php echo $dperi['pendidikan'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <div class="input-group">
            <input type="submit" value="SIMPAN DATA" class="btn btn-primary" name="simpan">
        </div>
    </form>
    <?php
    }
}
?>

<?php
include "footer.php";
?>