<?php 
class calculation{
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
    
}
$c1=new calculation();
$c1->a =20;
$c1->b =20;


echo "Value of c1:".$c1->sum()."\n";

// session_start();
// if(isset($_SESSION['username'])) {
//   echo '<h1>Welcome '.$_SESSION['username'].'</h1>';
//   echo '<h4><a href="logout.php">Logout</a></h4>';
// } else { 
//   header('location:index.php');
// }

session_start();
if(isset($_SESSION['username'])){
    echo '<h1>Welcome to '.$_SESSION['username'].'</h1>';
    echo '<h4><a href="logout.php">Logout</a></h4>';
}
else{
    echo '<h1>Access denied</h1>';
    // header('location:login.php');
}

// echo '<h1>Welcome to Page</h1>';
?>


