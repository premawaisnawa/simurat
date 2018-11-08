<?php
  include("include/header.php");
  include("include/sidebar.php");
?>
  <div class="col-md-10">
    <div class="col-md-7">
    <h3><b> DISPOSISI </b></h3>
  </div>   
  <div class="cari">
    <div class="col-md-3">
<form action="/action_page.php">
  <div class="form-group">
    
    <input placeholder="Cari" type="text" class="form-control" id="text">

  </div>
</form>
  </div>
    <div class="col-md-1">   <button type="submit" class="btn btn-default">Tampilkan</button></div>
</div>
<div class=" content">
          <div class="panel panel-default">
  <div class="panel-heading">


  <div class="panel-body">
     <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th> Perihal </th>
        <th> Ditugaskan </th>
        <th> Status </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <?php include("../koneksi.php"); ?>
    <?php
      $no = 1;
      $data = mysqli_query($koneksi, "SELECT * FROM tb_disposisi ORDER BY id_disposisi DESC");
      while($d = mysqli_fetch_array($data)){  
    ?>
    <tbody>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><!-- ?php echo $d['perihal'] ?>--> Undangan Rapat Kesehatan</td>
        <td><?php echo $d['jabatan'] ?></td>
        <td><?php echo $d['status'] ?></td>
    
        <td> <button type="button" class="btn btn-success">Edit</button>
<button type="button" class="btn btn-info">Detail</button></td>

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