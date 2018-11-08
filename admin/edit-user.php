<?php
    include "../koneksi.php";

        $id = $_GET['kode_user'];      
         $query_edit = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE kode_user='$id'");
//$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_edit)) {  
?>
		
        <form action="#" method="post">
            <input type="hidden" name="id" value="<?php echo $d['kode_user']; ?>">
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $d['email']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>     
        <?php } 
?>