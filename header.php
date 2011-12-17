<?php
$cat = $_GET["cat"];

/* For category pages */
if ( $cat == "branding") {
  $wrapper_class = 'branding';
  $title = "Branding";
  $file_name = "Branding.php";
}
else if ( $cat == "interactive") {
  $wrapper_class = 'interactive';
  $title = "Interactive Mobile & Desktop";
  $file_name = "interactive.php";
}
else if ( $cat == "web") {
  $wrapper_class = 'web_design';
  $title = "Web Design and Dev";
  $file_name = "webdesign.php";
}
else if ( $cat == "mobile") {
  $wrapper_class = 'mobile';
  $title = "Mobile Sites";
  $file_name = "mobile.php";
}
else if ( $cat == "ip") {
  $wrapper_class = 'imaging';
  $title = "Digital Imaging & Photography";
  $file_name = "imaging.php";
}
else if ( $cat == "mg") {
  $wrapper_class = 'mograph';
  $title = "Motion Grahpics";
  $file_name = "mg.php";
}
else if ( $cat == "fa") {
  $wrapper_class = 'fine_art';
  $title = "Fine Art";
  $file_name = "fa.php";
}
else if ( $cat == "3d") {
  $wrapper_class = 'three_d';
  $title = "3D";
  $file_name = "3d.php";
}


/* if nothing is defined */
else if ( $cat == null) {
  $title = "Omar Jalalzada's Portfolio";
}


/* About me section */
$about = $_GET["about"];

if ( $about == "bali") {
  $title = "About Me";
  $wrapper_class = 'about_me';
}

?>

<!-- STARTING HEADER.PHP -->
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
  <?php
   
  if ($p_title == null) {
    echo "<title>$title</title>"; 
  } else {
    echo "<title>$p_title</title>";
  }
  
  ?>
	
	<meta name="description" content="Omar's Jalalzada Portfolio Site">
	<meta name="author" content="Omar Jalalzada">
  <meta name="Copyright" content="Copyright © 2011 Omar Jalalzada">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="stylesheet" href="assets/css/main.css">
<!--   <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->
 
  
</head>
<body class="home_page">
      <div id="splash_placeholder"></div>
      
  <!-- Contact me modal container -->
  <div id="contact_me_container">
    <div id="contact_content">
      <p>
          <a class="contact" href="mailto:theboss@ojtwisted.com">
            <span class='icon lateload'></span>
            theboss@ojtwisted.com
          </a>
        
          <a href="tel:16503880106">
            <span class='icon lateload'></span>
            (650) 388-0106
          </a>
        
          <a class="twitter" target="_blank" href="http://twitter.com/#!/ojtwisted">
            <span class='icon lateload'></span>
            Follow me on Twitter
          </a>
        
          <a class="linkedin" target="_blank" href="http://www.linkedin.com/pub/omar-jalalzada/1b/bb2/93b">
            <span class='icon lateload'></span>
            Connect on Linkedin
          </a>
        
      </p>
    </div>
    <div id="bg_module"></div>
  </div>

  <div id="container">
    <div id="contact_me">
      <span class='content'>CONTACT ME</span>
    </div>
    
    <div id="header"> 
      <div id="logo"></div>
      <div id="title"></div>
    </div>
    
      	<div id="main" role="main">
    
  <!-- ENDING HEADER.PHP -->
