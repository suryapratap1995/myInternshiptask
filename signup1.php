<link rel="stylesheet" type="text/css" href="form.css">
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$con=mysqli_connect("localhost","admin","admin","info");
if(!($con))
echo("server not connect");

$queQ= mysqli_num_rows(mysqli_query($con,"SELECT * FROM `student` WHERE email= '$email'"));


if(empty($queQ)) {
$que=mysqli_query($con,"INSERT INTO `student` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pwd')");
if(!($que))
{
echo "<h1 class='h1' style='color:red'>record not insert</h1>";
}
else
{
echo "<h1 class='h1'>Thank you for sign up</h1>";
}
} 
else 
{
echo "<h1 class='h1'>User Already Exists</h1>";
}
}
?>

<button style="font-size:25px;margin-left:572px;"><a href="login.php" style="text-decoration:none;color:black;">Login</a></button>
