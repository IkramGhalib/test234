<?php 
$x=4;
$y=4;
$c=$x+$y;
$d=array("Ikram","Mansoor","Zia");
echo "<b><i>$c</i></b>"."<br>";
// echo "<b><i>$d</i></b>"
var_dump($d)."\n";
define("test",50);
echo test ."<br>";
$c=($x+$y)*2;
var_dump($c)."\n";
// if statment
if($x>$y){
    echo "X is greater<br>";
}
echo "Here is statement <br> ";
echo" here is the changes find it";

if($x===$y){
    echo "X is greater<br>";
}
echo "Here is statement <br>";
// new
if($x===$y):
    echo "X is greater<br>";
endif;
echo "Here is statement <br>";

// new one
if($x!=$y){
    echo true;
}
// new one
if($x<>$y){
    echo true;
}

echo $x<>$y."<br>";
// new
$a=10;
$b=20;
$c;
$c=$a+$b;
if($c<3){
    echo "c value is greater";

}
else{
    echo "Nothing is greeatrer<br>";
}

$name="ikram";
$gender="male";
$age=24;
if ($gender=="male" || $age==24){
    echo "welcome to PHP &nbsp;". $name ."<br>";
}
else{
    echo "welcome to backend";
}
$weight=80;
$height=5.9;
if ($weight<60 && $height>5.8){
    echo "Normal Health";

}
elseif($weight>60 && $height>5.8){
    echo "Not Normal Health";
}
?>
<?php
// elseif:

    $weight=80;
$height=5.9;
if ($weight<60 && $height>5.8):
    echo "Normal Health";
elseif($weight>60 && $height>5.8):
    echo "Not Normal Health";
endif;
?>
