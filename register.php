<?php

    if(isset($_REQUEST['username']) && isset($_REQUEST['email']) && isset($_REQUEST['company']) && isset($_REQUEST['pass1']) && isset($_REQUEST['pass2'])){

     $username = $_REQUEST['username']; 
     $email = $_REQUEST['email'];
     $company = $_REQUEST['company'];
     $pass1 = $_REQUEST['pass1'];
     $pass2 = $_REQUEST['pass2'];


     if(strlen($username) <= 0) {      
       die("Username must be greater than 0 characters\n");
     }
     if(strlen($email) <= 0) {
       die("Email must be greater than 0 characters\n");
     } 
     if(strlen($company) <= 0) {
       die("Company name must be greater than 0 characters\n");
     }
     if($pass1 != $pass2 && $pass1 <= 0) {
       die("Passwords are not the same.");
     }

     $hash = hash('sha256', $pass1);


     # connect to world database on local computer                                                                                                
     check(mysql_connect("localhost", "root", "123456"), "connect");

     $connect = mysql_connect("localhost", "admin", "admin");
        # in order to insert data into database tables, database is already there built via mySQL command from terminal
        # connect with the database

     check(mysql_select_db("product"), "selecting db"); 

     # mysql_real_escape_string() This function must always (with few exceptions) be used to make data safe before sending a query to MySQL. 
     $username = mysql_real_escape_string($username);
     $email = mysql_real_escape_string($email);
     $company = mysql_real_escape_string($company); 

     # this $query query is to send the "insert values" query into a table
     $query = "INSERT INTO admins ( username, hash, email, company ) VALUES ( '$username', '$hash', '$email', '$company' );";
     $results = mysql_query($query);

     check($results, "adding user"); // if not pass show error message

     header("Location: registered.php");
    }

    function check($result, $message) { 
      if (!$result) {
        die("SQL error in $message: " . mysql_error());
      }

      $_SESSION['username'] = $_REQUEST['username'];
      $_SESSION['email'] = $_REQUEST['email'];
      $_SESSION['company'] = $_REQUEST['company'];     

    }
?>
