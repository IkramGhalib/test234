<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>

    <link rel="stylesheet" href="login.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="conatiner">
        <div class="row">
            <div class="card border-dark mb-3" >
                <div class="card-body">
                    <h5 class="card-title text-center">Login Form</h5>
                    <?php
    require_once("opendb.php");
    if (isset($_POST['login'])){
      // text field value form value
      $email=$_POST['email'];
      $password=$_POST['password'];

      $query = "select * from signup where email = :email and password = :password";
      $stmt=$conn->prepare($query);
      // bind paramter the form text value other value
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', $password);
      try{
        $result=$stmt->execute();
        // row by row check if any row affected 
        $count=$stmt->rowCount();    
        if($count>0){
          while($row=$stmt->fetch()){
            session_start();
            $_SESSION['email']=$row[1];
            // echo "<script language = \"javascript\" type = \"text/javascript\"> window.location.href=\"index.php\"; </script>";
            // OR Use Redirect to other page
            header("location:index.php");
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

                    <form  method= 'POST'>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="row justify-content-center">
                            <button type="login" id="login" name="login" class="btn btn-primary">Login</button>
                        </div>&nbsp;
                        <div class="row justify-content-center">
                            <p class="text-muted">No Account?<a href="signup.php">Sign Up</a> Now.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
