<?php 
   session_start();
   if($_SESSION['name'] == NULL)
   {
    header('Location:login.php');
   }
?>





<html>
<head>
<link rel="stylesheet" type="text/css" href="testimonial.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="div1"><div class="div2"><div class="what">
<p class="p">TESTIMONIAL</p>
<h1 class="hi">What People Say</h1>

</div>
<div class="block"><img src="Img2.jpg" alt="Avatar" class="avatar"><p class="pb">lorium ipsum dolor sit amet.concectetur adipiscing elit.sed do eiusmod tempor incididunt ut</p>
<h4 class="h4">JOHN GOMEZ</h4>
</div><div class="block"><img src="download.jpeg" alt="Avatar" class="avatar"><p class="pb">lorium ipsum dolor sit amet.concectetur adipiscing elit.sed do eiusmod tempor incididunt ut</p>
<h4 class="h4">OLIVIA GOMEZ</h4></div><div class="block"><img src="images.jpeg" alt="Avatar" class="avatar"><p class="pb">lorium ipsum dolor sit amet.concectetur adipiscing elit.sed do eiusmod tempor incididunt ut</p>
<h4 class="h4">RIKY GOMEZ</h4></div>
<div class="butt">
<button class="button"> < </button> <button class="button"> > </button>
</div>
</div>
<div class="div3"><div class="num"><h1 class="award">15</h1><hr class="hr"><p class="happy">Award received</p></div><div class="num"><h1 class="award">250</h1><hr class="hr"><p class="happy">Project Finished</p></div><div class="num"><h1 class="award">1210</h1><hr class="hr"><p class="happy">Happy Clients</p></div><div class="num"><h1 class="award">503</h1><hr class="hr"><p class="happy">Downloads</p></div></div>

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

