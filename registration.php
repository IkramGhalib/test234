<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Electrocure | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<div class="login-box" >
  <div class="login-logo">
    <!-- <img src="images/srsp.png" height="170"> -->
    <br>
	  <a href=""><b>ELECTRO</b>CURE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <?php
    require_once("opendb.php");
    if (isset($_POST['btnlogin'])){
      // text field value form value
      $username=$_POST['txtusername'];
      $password=md5($_POST['txtpassword']);
      // $password="";

      $query = "INSERT INTO signup(username,password) VALUES('$username','$password')";
      $result = $conn->query($query);
      if ($result){
        echo "Sucussful";
      }
    }
    ?>

    <p style="align-content: center;">Enter your Username and password!</p>
    <form id="form1" name="form1" method="post" action="">
          <label for="txtuserid"></label>
          <input class="form-control" placeholder="Username" type="text" name="txtusername" id="txtusername" required="required"/>
          <label for="txtpasswd"></label>
          <input placeholder="Password" class="form-control" type="password" name="txtpassword" id="txtpassword" required="required" />
          <br>
          <input  class="btn btn-primary"  name="btnlogin" type="submit" id="btnlogin" value="Log In" />
          <input class="btn btn-primary" type="reset" name="reset" id="reset" value="Reset" />
    </form>    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
</body>

</html>
<?php $conn = NULL; ?>
