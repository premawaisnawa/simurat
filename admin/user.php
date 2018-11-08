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

$masukan = mysqli_query($koneksi, "INSERT INTO tb_user(kode_user,username,password,nama,jabatan,nip,email,levelUser,statusUser) VALUES('$kode_user','$username','$password','$nama','$jabatan','$nip','$email','$levelUser','$statusUser')");
  if($masukan) {
    header('location: user.php');
   } else{
    echo "Maaf, Data Belum Valid";
   }
}
?>

<!-- KODE USER -->
<?php
$carikode = mysqli_query($koneksi, "SELECT kode_user from tb_user") or die (mysqli_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  $jumlah_data = mysqli_num_rows($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($jumlah_data[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $jumlah_data + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $kode_otomatis = "USR".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "P0001";
  }
    include("include/sidebar.php");
?>

	<div class="col-md-10">
    <div class="col-md-6">
    <h3><b> DATA USER </b></h3>
  </div>   
  <div class="cari">
    <div class="col-md-3">
<form action="/action_page.php">
  <div class="form-group">
    <input placeholder="Cari" type="text" class="form-control" id="text">
  </div>
</form>
  </div>
    <div class="col-md-1">
      <button type="submit" class="btn btn-default">Tampilkan</button>
    </div>
    <div  class="col-md-1 ico-head">
       <a href="#" data-toggle="modal" data-target="#myModal"><img src="../assets/images/add.png" class="img-responsive" ></a>
    </div>
</div>
<div class=" content">
  			  <div class="panel panel-default">
	<div class="panel-heading">


	<div class="panel-body">
		 <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Username </th>
        <th> Nama  </th>
        <th>Jabatan  </th>
        <th>Nip  </th>
        <th> Action </th>
      </tr>
    </thead>
    <?php include("../koneksi.php"); ?>
    <?php
      $no = 1;
      $data = mysqli_query($koneksi, "SELECT * FROM tb_user ORDER BY kode_user DESC");
      while($d = mysqli_fetch_array($data)){  
    ?>
    <tbody>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d['username'] ?></td>
        <td><?php echo $d['nama'] ?></td>
        <td><?php echo $d['jabatan'] ?></td>
        <td><?php echo $d['nip'] ?></td>
                     
<td><a href="user-edit.php?kode_user=<?php echo $d['kode_user']; ?>"><button type="button" class="btn btn-info">Edit</button></a></td>
<td><a href="user-detail.php?kode_user=<?php echo $d['kode_user']; ?>"><button type="button" class="btn btn-info">Detail</button></a></td>
      </tr> 
    </tbody>

    <?php
}
?>
  </table>
	</div>
</div>
  	</div>
  </div>
</div>
  		<footer class="text-center pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2018 <a>Darmawan</a>
  			</p>
  		</footer>
  	</div>
    </div>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">TAMBAH DATA USER </h4>
        </div>
        <div class="modal-body">
       <form action="#" method="POST">
  <div class="form-group">
    <label for="email">Kode User ( Otomatis )</label>
    <input type="text" class="form-control" value="<?php echo $kode_otomatis; ?>" name="kode_user" readonly="">
  </div>
  <div class="form-group">
    <label for="pwd">Username  </label>
    <input type="text" class="form-control" name="username" placeholder="Masukan Username " required=""  oninvalid="this.setCustomValidity('Data Wajib Diisi!')" >
  </div>
   <div class="form-group">
    <label for="pwd">Password </label>
    <input type="password" class="form-control" name="password" placeholder="Masukan Password" required="">
  </div>
   <div class="form-group">
    <label for="pwd"> NIP* </label>
    <input type="text" class="form-control" name="nip" placeholder="Masukan NIP" >
  </div>
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
    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required="" >
  </div>
   <div class="form-group">
    <label for="pwd"> Email </label>
    <input type="text" class="form-control" name="email" placeholder="Masukan Email">
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
</form>
        </div>
       
      </div>
      
    </div>
  </div>

    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
  
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal2').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('kode_user');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>