<?php
session_start();
if(isset($_POST['bname']))
{
    $_SESSION['bname']=$_POST['bname'];
}

if(isset($_POST['bid']))
{
    $_SESSION['bid']=$_POST['bid'];
}

if(isset($_POST['aname']))
{
    $_SESSION['aname']=$_POST['aname'];
}

if(isset($_POST['pname']))
{
    $_SESSION['pname']=$_POST['pname'];
}

if(isset($_POST['genre']))
{
    $_SESSION['genre']=$_POST['genre'];
}
echo "ORDER DETAILS:";
echo "<br><br>";
echo "NAME IS: ";
echo $_SESSION['name'];
echo "<br><br>";
echo "ADDRESS IS: ";
echo $_SESSION['address'];
echo "<br><br>";
echo "PHONE NUMBER IS: ";
echo $_SESSION['phno'];
echo "<br><br>";
echo "EMAIL ID IS: ";
echo $_SESSION['email'];
echo "<br><br>";
echo "GENDER IS: ";
echo $_SESSION['gender'];
echo "<br><br>";
echo "BOOK NAME IS: ";
echo $_SESSION['bname'];
echo "<br><br>";
echo "BOOK ID IS: ";
echo $_SESSION['bid'];
echo "<br><br>";
echo "AUTHOR NAME IS: ";
echo $_SESSION['aname'];
echo "<br><br>";
echo "PUBLICATION NAME IS: ";
echo $_SESSION['pname'];
echo "<br><br>";
echo "GENRE IS: ";
echo $_SESSION['genre'];
echo "<br><br>";
?>

<html>
<form method="post" action="Project1d.php">
<br><br><br>
<input type="submit" name="submit" value="CLICK HERE TO CONFIRM">
</form>
</html>
