<div class="mybody">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<div class="logo-admin">
				<img src="../assets/images/logo.png">
				<h4> Dinas <br> Kebudayaan </h4>
			</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"> Halaman Utama</a></li>
					<li><a href="user.php">Master Data User</a></li>
				

					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							 Master Data Surat <span class="caret"></span>
						</a>

						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="surat-masuk.php">Surat Masuk</a></li>
									<li><a href="surat-keluar.php">Surat Keluar </a></li>
					

									<!-- Dropdown level 2 -->
									<!--<li class="panel panel-default" id="dropdown">
										<a data-toggle="collapse" href="#dropdown-lvl2">
											<span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
										</a>
										<div id="dropdown-lvl2" class="panel-collapse collapse">
											<div class="panel-body">
												<ul class="nav navbar-nav">
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div> -->
									</li>
								</ul>
							</div>
						</div>
					</li> 

					<li><a href="disposisi.php">Disposisi</a></li>
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl2">
							 Laporan <span class="caret"></span>
						</a>

						<!-- Dropdown level 1-->
						<div id="dropdown-lvl2" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="laporan-suratmasuk.php">Laporan Surat Masuk</a></li>
									<li><a href="laporan-suratkeluar.php">Laporan Surat Keluar </a></li>
									<li><a href="laporan-disposisi.php">Laporan Disposisi </a></li>
					

									<!-- Dropdown level 2 -->
									<!--<li class="panel panel-default" id="dropdown">
										<a data-toggle="collapse" href="#dropdown-lvl2">
											<span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
										</a>
										<div id="dropdown-lvl2" class="panel-collapse collapse">
											<div class="panel-body">
												<ul class="nav navbar-nav">
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div> -->
									</li>
								</ul>
							</div>
						</div>
					</li> 

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
	</div>  		</div>
	<script type="text/javascript">
		$(function () {
	  	$('.navbar-toggle-sidebar').click(function () {
	  		$('.navbar-nav').toggleClass('slide-in');
	  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });


</script>