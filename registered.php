<?php
$title = "Registered!";
?>

<html>

    <head>
        <title><?= $title ?></title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="index.js"></script>

    </head>

    <body>

<?php

print_r($_SESSION);
if(isset($_SESSION['username']))
    print "hello";
print $_SESSION['username'];
echo $_SESSION['company'];

?>  
        <div id="main-content">


            <h3>You have registered in administration system as <?= $_SESSION['username'] ?></h3>
            <table border="1">
                <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Email</th>
                </tr>

                <tr>

                    <td><?= $_SESSION['username'] ?></td>
                    <td><?= $_SESSION['email'] ?></td>
                    <td><?= $_SESSION['company'] ?></td>

                </tr>

                <h3>please log in into the administration system</h3>
                <h4><a href = "index.php">Log In</a></h4>

            </table> 

        <div style="clear: both;"></div>        

        </div>
    </body>
</html>
