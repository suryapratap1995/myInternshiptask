<link rel="stylesheet" type="text/css" href="form.css">
<?php 
   session_start();
   if($_SESSION['name'] == NULL)
   {
    header('Location:login.php');
   }
   else
   {
   header('Location:index.php');
   }
?>
<br>
<br>
<button style="font-size:25px;margin-left:572px;"><a href="home.php" style="text-decoration:none;color:black;">Home</a></button>&nbsp;&nbsp;<button style="font-size:25px;margin-left:572px;"><a href="logout.php" style="text-decoration:none;color:black;">logout</a></button>
