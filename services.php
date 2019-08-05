<?php 
   session_start();
   if($_SESSION['name'] == NULL)
   {
    header('Location:login.php');
   }
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="services.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="header"><h1 class="h1">Avita</h1>
<nav class="nav">
<li><a href='index.php'>Home</a></li>
<li><a href='about.php'>About</a></li>
<li><a href='services.php'>Services</a></li>
<li><a href='portfolio.php'>Portfolio</a></li>
<li><a href='Testimonial.php'>Testimonial</a></li>
<li><a href='Blog.php'>Blog</a></li>
<li><a href='Contact.php'>Contact</a></li>
<li><a href='logout.php'>logout</a></li>
</nav>
</header>
<div class="div1">
<div class="div2">
<div class="ms">
<p class="p">WHAT I DO</p> 
<h1 class="hi">My Services</h1>
<p class="p1">Sed ut perspiciatis unde omnis iste netus eror sit valumtatum accusantium doloremqu loudantium totam,rem aperium eaque epsa quae ab illo inventor varitatis at quesi architecto biatae vitae dicta sant explicabo</p>

</div>
<div class="camera">
<div class="picon"><div class="cam"><div class="circle"><i style="font-size:21px" class="fa" >&#xf030;</i></div>
<h3 class="h3">Photography</h3>
<p class="pl">lorem ipsum dolor set amet consectatur edipiscing elit</p>
</div>


</div>

<div class="bicon"><div class="cam"><div class="circle"><i style="font-size:21px" class="fa">&#xf19c;</i></div>
<h3 class="h3">Branding</h3>
<p class="pl">lorem ipsum dolor set amet consectatur edipiscing elit</p>
</div>

</div>
<div class="lf">
<a href="#" class="previous">&laquo; </a>
<a href="#" class="next"> &raquo;</a>

  </div>

</div>

  
</div>

</div>
</body>
</html>
