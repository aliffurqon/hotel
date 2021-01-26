<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <meta name="author" content="">
	<title>Halaman Login</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
	<!-- Custom fonts for this template -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'?>">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/sb-admin.css'?>">
</head>
<body>
	<body class="bg-primary">
    <div class="container">
      <div class="card card-login mx-auto mt-5"> 
        <div class="card-header text-center">Login User</div>
        <div class="card-body">
          <?php
      if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
          echo "<div class='alert alert-danger alert-danger'>";
          echo $this->session->flashdata('alert');
          echo "</div>";
        }else if($_GET['pesan'] == "logout"){
          if($this->session->flashdata())
          {
            echo "<div class='alert alert-danger alert-success'>";
            echo $this->session->flashdata('Anda Telah Logout');
            echo "</div>";
          }
          //echo "<div class='alert alert-success'>Anda telah logout.</div>";
        }else if($_GET['pesan'] == "belumlogin"){
          if($this->session->flashdata())
          {
            echo "<div class='alert alert-danger alert-primary'>";
            echo $this->session->flashdata('alert');
            echo "</div>";
          }
          //echo "<div class='alert alert-primary'>Silahkan login dulu.</div>";
        }
      }else{
        if($this->session->flashdata())
        {
          echo "<div class='alert alert-danger alert-message'>";
          echo $this->session->flashdata('alert');
          echo "</div>";
        }
      }
    ?>
          <form method="post" action="<?php echo base_url().'welcome/login_aksi'; ?>">
            <div class="form-group">
              <div class="form-label-group">
                <input type="username" name="username" id="inputUsername" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="inputUsername">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group" data-validate = "Password is required">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required" autofocus="autofocus">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
         	<div class="form-group">
          		<input type="submit" value="Login" class="btn btn-success btn-block">
        	</div>
         </form>
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript">
  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>
</body>
</html>