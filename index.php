<?php  
include ("include/header.php");
?>
<body>

<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <img class="logo" src="assets/images/logo.png" class="img-responsive" alt="" />
         <h4 class="text-center title-logo"> Sistem Informasi Manajemen Surat </h4>
          <input type="text" name="username" placeholder="Username" required class="form-control input-lg"  />
          
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
          
          </div>
          
        </form>
  </div>
</div>
</body>