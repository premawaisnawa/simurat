<?php
  include("include/header.php");
  include("include/sidebar.php");
?>

  <div class="col-md-10 ">

    <h3><b> LAPORAN SURAT KELUAR </b></h3>

    <div class="col-md-6">
 <form action="/action_page.php">
  <div class="form-group">
    <label for="date">Dari Tanggal:</label>
    <input type="date" class="form-control" id="date">
  </div>
  <div class="form-group">
    <label for="date">Sampai Tanggal:</label>
    <input type="date" class="form-control" id="date">
  </div>
  <button type="submit" class="btn btn-default">Tampilkan</button>
</form>
  </div>
    <div class="col-md-6">
    <canvas id="myChart" width="150px" height="150px"></canvas>
  </div>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<div class="content-lap">
          <div class="panel panel-default">
   <div class="panel-heading">

  <div class="panel-body">
    
     <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th> Kode Surat </th>
        <th> Tanggal Surat  </th>
        <th> Nomor Surat  </th>
        <th>Tujuan Surat </th>
        <th> Perihal </th>
        <th> Status </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <?php include("../koneksi.php"); ?>
    <?php
      $no = 1;
      $data = mysqli_query($koneksi, "SELECT * FROM tb_skeluar ORDER BY id_suratkeluar DESC");
      while($d = mysqli_fetch_array($data)){  
    ?>
    <tbody>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d['kode_surat'] ?></td>
        <td><?php echo $d['tanggal_surat'] ?></td>
        <td><?php echo $d['nomor_surat'] ?></td>
        <td><?php echo $d['tujuan_surat'] ?></td>
        <td><?php echo $d['perihal'] ?></td>
        <td><?php echo $d['status'] ?></td>
       
        <td> 
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
      <footer class="pull-left footer">
        <p class="col-md-12">
          <hr class="divider">
          Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
        </p>
      </footer>
    </div>