<?php 
   session_start();
   if($_SESSION['name'] == NULL)
   {
    header('Location:login.php');
   }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<form action="" method="post">
<body>
<div class="div1">
<div class="div2">

<header class="header">
<nav class="nav">
<li><a href='index.php'>Home</a></li>
<li><a href='about.php'>About</a></li>
<li><a href='services.php'>Services</a></li>
<li><a href='portfolio.php'>Portfolio</a></li>
<li><a href='testimonial.php'>Testimonial</a></li>
<li><a href='blog.php'>Blog</a></li>
<li><a href='contact.php'>Contact</a></li>
<li><a href='logout.php'>logout</a></li>
</nav>
</header>
<div class="divk"><header class="avita"><h1 class="h1">Avita</h1></header>
<p class="animate seven">
            <span>I'm</span>&nbsp;<strong><span>K</span><span>e</span><span>v</span><span>i</span><span>e</span><span>n</span></strong>&nbsp;<span>w</span><span>a</span><span>t</span><span>s</span><span>o</span><span>n</span><span>|</span>
      
      
        </p>
<p class="lo">lorium ipsum dolor sit amet.concectetur adipiscing elit.sed do<br>
eiusmod tempor incididunt ut.

</p>
<nav class="icon">
<a href="#" class="fab-icon fa fa-facebook"></a>
<a href="#" class="fab-icon fa fa-twitter"></a>
<a href="#" class="fab-icon fa fa-google"></a>
<a href="#" class="fab-icon fa fa-linkedin"></a>
<a href="#" class="fab-icon fa fa-skype"></a>
</nav>

</div>
</div>
</div>
</body>
</html>

