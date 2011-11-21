<?php 
$cat = $_GET["cat"];
$proj = $_GET["proj"];

if ($cat == "branding") {
  if ( $proj == "agrion") {
    $p_wrapper_class = 'agrion';
    $p_title = "Agrion";
    $p_file_name = "agrion.php";
  }
  
  if ( $proj == "pantone") {
    $p_wrapper_class = 'pantone';
    $p_title = "Pantone";
    $p_file_name = "pantone.php";
  }
  
  if ( $proj == "zeal") {
    $p_wrapper_class = 'zeal';
    $p_title = "Zeal";
    $p_file_name = "zeal.php";
  }
  
  if ( $proj == "ie") {
    $p_wrapper_class = 'ie';
    $p_title = "Island Earth";
    $p_file_name = "ie.php";
  }
}


if ($cat == "mobile") {
  if ( $proj == "asda") {
    $p_wrapper_class = 'asda';
    $p_title = "ASDA";
    $p_file_name = "asda.php";
  }
  
  if ( $proj == "life") {
    $p_wrapper_class = 'life';
    $p_title = "Life Technologies";
    $p_file_name = "life.php";
  }
  
  if ( $proj == "tw") {
    $p_wrapper_class = 'tw';
    $p_title = "Ticket Web";
    $p_file_name = "tw.php";
  }
  
  if ( $proj == "invitrogen") {
    $p_wrapper_class = 'invitrogen';
    $p_title = "Invitrogen";
    $p_file_name = "invitrogen.php";
  }
  
  if ( $proj == "wasabi") {
    $p_wrapper_class = 'wasabi';
    $p_title = "Wasabi Grill";
    $p_file_name = "wasabi.php";
  }
  
  
  if ( $proj == "eats") {
    $p_wrapper_class = 'eats';
    $p_title = "Eats";
    $p_file_name = "eats.php";
  }
  
  
}
include("header.php");
 
 
if ( $p_title == null  ) {
  echo "<div id=\"wrapper\">";
}

else {
  echo "<div id=\"wrapper\" class=\"$p_wrapper_class project_wrapper\">";
  include("nav.php"); 
  include("projects/$p_file_name"); 
  echo "</div> <!-- Ending #Wrapper -->";  
}

?>

<?php include("footer.php"); ?>