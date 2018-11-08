<?php
	include("include/header.php");

?>

<?php 
 if (isset($_POST['submit'])){
$kode_user = $_POST['kode_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$nip = $_POST['nip'];
$email = $_POST['email'];
$levelUser = $_POST['levelUser'];
$statusUser = $_POST['statusUser'];

$masukan = "UPDATE tb_user SET username='$username', password='$password', $nama='$nama', jabatan='$jabatan', nip='$nip', email='$email', levelUser='$levelUser', statusUser='$statusUser' WHERE kode_user='$kode_user'";
mysqli_query($koneksi,$masukan);
  if($masukan) {
    header('location: user.php');
   } else{
    echo "Maaf, Data Belum Valid";
   }
}

?>

<!-- KODE USER -->
<?php 
 $data =  "SELECT * FROM tb_user where kode_user='$_GET[kode_user]'";
 $hasil= mysqli_query($koneksi,$data);
  $d = mysqli_fetch_array($hasil);
?>
 <!-- Modal -->
<?php  include("include/sidebar.php"); ?> 
    <div class="col-md-10">
<div class="col-md-12">
    <h3><b> EDIT DATA USER </b></h3>
  </div> 
       <form action="" method="POST">
              <div class="col-md-6">
  <div class="form-group">
    <label for="email">Kode User ( Otomatis )</label>
    <input type="text" class="form-control" value="<?php echo"$d[kode_user]"; ?>" name="kode_user" readonly="">
  </div>
  <div class="form-group">
    <label for="pwd">Username  </label>
    <input type="text" class="form-control" name="username" placeholder="Masukan Username " required="" value="<?php echo "$d[username]"; ?>" >
  </div>
   <div class="form-group">
    <label for="pwd">Password </label>
    <input type="password" class="form-control" name="password" placeholder="Masukan Password" required="" value="<?php echo "$d[password]"; ?>">
  </div>
   <div class="form-group">
    <label for="pwd"> NIP* </label>
    <input type="text" class="form-control" name="nip" value="<?php echo "$d[nip]"; ?>" placeholder="Masukan NIP" >

  </div>
  </div>
<div class="col-md-6">
  <div class="form-group">
  <label for="sel1">Jabatan </label>
  <select class="form-control" name="jabatan">
    <option disabled selected>Pilih Jabatan</option>
    <option>Kepala Dinas</option>
    <option>Sekretaris</option>
    <option>Kepala Sub Bagian Keuangan</option>
    <option>Kepala Sub Bagian Umum dan Kepegawaian</option>
    <option>Kepala Sub Bagian Penyusunan dan Pelaporan</option>
    <option>Kepala Bidang Adat</option>
    <option>Kepala Bidang Sejarah dan CB</option>
    <option>Kepala Bidang Kesenian</option>
    <option>Kepala Bidang Dokumentasi</option>
    <option>Kepala Seksi Tradisi</option>
    <option>Kepala Seksi Adat dan Awig</option>
    <option> Kepala Seksi Lembaga Adat</option>
    <option>Kepala Seksi Cagar Budaya</option>
    <option> Kepala Seksi Sejarah</option>
    <option>Kepala Seksi Warisan Budaya</option>
    <option> Kepala Seksi Naskah Kuno</option>
    <option> Kepala Seksi Dokumentasi Budaya</option>
    <option> Kepala Seksi Pelestarian Naskah Kuno</option>
    <option> Kepala Seksi Lembaga Seni</option>
    <option> Kepala Seksi Pelestarian Seni</option>
    <option> Kepala Seksi Sejarah Seni</option>
    <option> Tenaga Kontrak </option>
  </select>
</div>

 <div class="form-group">
    <label for="pwd"> Nama </label>
    <input type="text" class="form-control" name="nama" value="<?php echo "$d[nama]"; ?>"" placeholder="Masukan Nama" required="" >
  </div>
   <div class="form-group">
    <label for="pwd"> Email </label>
    <input type="text" class="form-control" name="email"  value="<?php echo "$d[email]"; ?>" placeholder="Masukan Email">
     <input type="hidden" value="Aktif" class="form-control" name="statusUser" required="">
  </div>
   <div class="form-group">
  <label for="sel1"> Level User </label>
  <select class="form-control" name="levelUser">
    <option disabled selected>Pilih Level User</option>
    <option>Kepala Dinas</option>
    <option>Bagian Umum</option>
    <option>Petugas Administrasi</option>
  </select>
</div>
  <button type="submit" name="submit" class="btn btn-danger ">Simpan </button>
</div>
</form>
        </div>
       
      </div>
      
    </div>
  </div>


 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>