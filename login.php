<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Git Hub Change | Log in</title>
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
      $username1=$_POST['txtusername'];
      $password2=$_POST['txtpassword'];

      $query = "select * from signup where username = :username and password = :password";
      $stmt=$conn->prepare($query);
      // bind paramter the form text value other value
      $stmt->bindParam(':username', $username1);
      $stmt->bindParam(':password', $password2);
      try{
        $result=$stmt->execute();
        // row by row check if any row affected 
        $count=$stmt->rowCount();    
        if($count>0){
          while($row=$stmt->fetch()){
            session_start();
            $_SESSION['username']=$row[1];
            // echo "<script language = \"javascript\" type = \"text/javascript\"> window.location.href=\"index.php\"; </script>";
            // OR Use Redirect to other page
            header("location:wndex.php");
          }
        }
        else{
          echo "<script> alert('Wrong Username and password'); </script>";
        }
      }
      catch(Exception $e){
        
        $e->getMessage();

      }
    }
    ?>

 <?php

//     require_once("opendb.php");

// $msg = "";

// if( isset($_POST['btnlogin']) )
// {

// $txtusername = $_POST['txtusername'];
// $txtpassword = $_POST['txtpassword'];

// $query="";
// $stmt = NULL;
// $result = NULL;

//     $query = "select * from login where username = :username and password = :password";
//     $stmt = $conn->prepare($query);
//     $stmt->bindParam(':username', $txtusername);
//     $stmt->bindParam(':password', $txtpassword);

//     try
//       {
//         $result = $stmt->execute();
//         $count = $stmt->rowCount();

//         if($count > 0){
//             while($row = $stmt->fetch())
//             {
//               session_start();
//               $_SESSION['username'] = $row[1];
//           //     $_SESSION['employee'] = $row;
//               echo "<script language = \"javascript\" type = \"text/javascript\"> window.location.href=\"index.php\"; </script>";
//             }
//          }
//          else{
//            $msg = "Wrong Username or Password!";
//            echo "<script type='text/javascript'>alert('$msg');</script>";
//          }

//       }
//       catch(PDOException $e)
//       {
//         $msg = $e->getMessage();
//       }

// }

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
