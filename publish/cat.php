<?php 
include("header.php");
 
if ( $title == null ) {
  echo "<div id=\"wrapper\">";
}

else {
  echo "<div id=\"wrapper\" class=\"$wrapper_class cat_wrapper\">";
  include("nav.php"); 
  include("cat/$file_name"); 
  echo "</div> <!-- Ending #Wrapper -->";  
}

include("footer.php"); 
?>