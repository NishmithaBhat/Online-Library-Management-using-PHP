<html>
<head>
<style type="text/css">
body{border-color:"Black";border-width:3p;background-image:url("book2.jpeg");background-size:cover}
</style>
</head>
<body>
<form method="post" action="Project1c.php">
<center>
<font color="White">
<h2>
<font size="19">BOOK DETAILS:</font><br>
<font siz="6.5">Book Name:</font><br>
<input type="text" name="bname" style="height:50px; width:200px"><br><br><br>
<font size="6.5">Book ID:</font><br>
<input type="text" name="bid" style="height:50px; width:200px"><br><br><br>
<font size="6.5">Author Name:</font><br>
<input type="text" name="aname" style="height:50px; width:200px"><br><br><br>
<font size="6.5">Publication Name:</font><br>
<input type="text" name="pname" style="height:50px; width:200px"><br><br><br>
<font size="6.5">Genre:</font><br>
<input type="text" name="genre" style="height:50px; width:200px"><br><br><br>
<input type="submit" name="submit" value="submit" style="height:50px; width:200px">

</h2>
</font>
</center>
</form>
<?php 
session_start();
if(isset($_POST['name']))
{
    $_SESSION['name']=$_POST['name'];
}

if(isset($_POST['address']))
{
    $_SESSION['address']=$_POST['address'];
}

if(isset($_POST['phno']))
{
    $_SESSION['phno']=$_POST['phno'];
}

if(isset($_POST['age']))
{
    $_SESSION['age']=$_POST['age'];
}

if(isset($_POST['email']))
{
    $_SESSION['email']=$_POST['email'];
}

if(isset($_POST['gender']))
{
    $_SESSION['gender']=$_POST['gender'];
}

?>
</body>
</html>






