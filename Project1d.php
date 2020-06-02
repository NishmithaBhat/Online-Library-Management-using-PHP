<?php
session_start();
//include "connect.php";
//$msg = "";

$link=mysqli_connect('localhost','root','nishmitha','p1');
if(!$link)
{
    die("Could not connect to MySQL:".mysqli_connect_error($link));
}
else
{
echo "CONNECTION OK";
}
echo "<br><br>";
//if(isset($_SESSION['submit'])) 
//{


/*$name = $_SESSION['name'];



$address = $_SESSION['address'];



$phno = (int)$_SESSION['phno'];



$email=$_SESSION['email'];



$gender=$_SESSION['gender'];



$bname=$_SESSION['bname'];



$bid=(int)$_SESSION['bid'];


$aname=$_SESSION['aname'];

$pname=$_SESSION['pname'];

$genre=$_SESSION['genre'];*/






$query = "INSERT INTO lib(Name,Address,phno,email,gender,bname,bid,aname,pname,genre) VALUES ('".$_SESSION['name']."','".$_SESSION['address']."',".$_SESSION['phno'].",'".$_SESSION['email']."','".$_SESSION['gender']."','".$_SESSION['bname']."',".$_SESSION['bid'].",'".$_SESSION['bname']."','".$_SESSION['pname']."','".$_SESSION['genre']."')";
echo "<br><br>";


if(mysqli_query($link,$query)==true)
{
echo "Details Saved!";
}
else
{
echo "Unable to Save!"."<br>".mysqli_error($link);
}
mysqli_close($link);

//echo $msg;
//}


?>
