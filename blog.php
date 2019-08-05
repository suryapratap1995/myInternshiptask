<?php 
   session_start();
   if($_SESSION['name'] == NULL)
   {
    header('Location:login.php');
   }
?>




<html>
<head>
<link rel="stylesheet" type="text/css" href="blog.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<src="http://www.vitorazevedo.net/external_files/loading_small.png">
</head>
<body>
<header class="header sticky" id="myheader"><h1 class="h1">Avita</h1>
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

<div class="div1"><div class="new"><h1 class="hn">Latest News</h1></div>
<div class="div2"><div class="imageblog"><div class="blog"><img src="Img9.jpg" class="image"></div><div class="blog"><h3 class="h3">Single Blog Post Title Goes Here</h3><p class="date"><strong>date:</strong> 6-12-2018 <strong> Kevein watson</stron></p><p class="pp">Sed ut perspiciatis unde omnis iste netus eror sit valumtatum accusantium doloremqu loudantium totam,rem aperium eaque epsa quae ab illo inventor varitatis at quesi architecto biatae vitae dicta sant explicabo</p></div>
<div class="blog"><h3 class="h3">Single Blog Post Title Goes Here</h3><p class="date"><strong>date:</strong> 13-10-2017 <strong> Vivek kumar</stron></p><p class="pp">Sed ut perspiciatis unde omnis iste netus eror sit valumtatum accusantium doloremqu loudantium totam,rem aperium eaque epsa quae ab illo inventor varitatis at quesi architecto biatae vitae dicta sant explicabo</p></div><div class="blog"><img src="Img10.jpg" class="image2" id="loading"></div>
</div>
</div>




<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</body>
</html>
