<link rel="stylesheet" type="text/css" href="form.css">
<?php 

    session_start();
    session_destroy();
    {
        echo "<h1 class='h1'>Logged out successfully</h1>";
    }

?>
<br>
<br>
<button style="font-size:25px;margin-left:572px;"><a href="login.php" style="text-decoration:none;color:black;">login</a></button>
