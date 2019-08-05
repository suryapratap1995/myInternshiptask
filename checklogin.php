<?php 
   
   $user = $_POST['user']; 
   $pwd = $_POST['pwd'];



//if($user == " admin" && $pwd == " admin")
//   { 
 session_start();     
      $_SESSION['name'] = $user;

header("Location: secure.php");
  //    }
  //    else
  //    {
  //      echo ("Error");
  //    }
   
?>
