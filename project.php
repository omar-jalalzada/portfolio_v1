<?php 
$cat = $_GET["cat"];
$proj = $_GET["proj"];

if ($cat == "branding") {
  if ( $proj == "agrion") {
    $p_wrapper_class = 'agrion';
    $p_title = "Agrion";
    $p_file_name = "branding/agrion.php";
  }
  
  if ( $proj == "pantone") {
    $p_wrapper_class = 'pantone';
    $p_title = "Pantone";
    $p_file_name = "branding/pantone.php";
  }
  
  if ( $proj == "zeal") {
    $p_wrapper_class = 'zeal';
    $p_title = "Zeal";
    $p_file_name = "branding/zeal.php";
  }
  
  if ( $proj == "ie") {
    $p_wrapper_class = 'ie';
    $p_title = "Island Earth";
    $p_file_name = "branding/ie.php";
  }
}


if ($cat == "interactive") {
  if ( $proj == "asda") {
    $p_wrapper_class = 'asda';
    $p_title = "ASDA";
    $p_file_name = "interactive/asda.php";
  }
  
  if ( $proj == "life") {
    $p_wrapper_class = 'life';
    $p_title = "Life Technologies";
    $p_file_name = "interactive/life.php";
  }
  
  if ( $proj == "tw") {
    $p_wrapper_class = 'tw';
    $p_title = "Ticket Web";
    $p_file_name = "interactive/tw.php";
  }
  
  if ( $proj == "invitrogen") {
    $p_wrapper_class = 'invitrogen';
    $p_title = "Invitrogen";
    $p_file_name = "interactive/invitrogen.php";
  }
  
  if ( $proj == "wasabi") {
    $p_wrapper_class = 'wasabi';
    $p_title = "Wasabi Grill";
    $p_file_name = "interactive/wasabi.php";
  }
  
  
  if ( $proj == "eats") {
    $p_wrapper_class = 'eats';
    $p_title = "Eats";
    $p_file_name = "interactive/eats.php";
  }
}

if ($cat == "web") {
  if ( $proj == "virtus") {
    $p_wrapper_class = 'virtus';
    $p_title = "Virtus Resources Group LLC";
    $p_file_name = "interactive/virtus.php";
  }
  
  if ( $proj == "wasabi-w") {
    $p_wrapper_class = 'wasabi';
    $p_title = "Wasabi Grill";
    $p_file_name = "interactive/wasabi-w.php";
  }
  
  if ( $proj == "hf") {
    $p_wrapper_class = 'hf';
    $p_title = "Half Full";
    $p_file_name = "interactive/hf.php";
  }
  
  if ( $proj == "wdnm") {
    $p_wrapper_class = 'wdnm';
    $p_title = "Web Design New Media";
    $p_file_name = "interactive/wdnm.php";
  }
  
  if ( $proj == "hurt") {
    $p_wrapper_class = 'hurt';
    $p_title = "Hurt Locker";
    $p_file_name = "interactive/hurt.php";
  }
  
  if ( $proj == "zeal-w") {
    $p_wrapper_class = 'zeal_w';
    $p_title = "Zeal";
    $p_file_name = "interactive/zeal_w.php";
  }
  
  if ( $proj == "htn") {
    $p_wrapper_class = 'htn';
    $p_title = "How To Nap";
    $p_file_name = "interactive/htn.php";
  }
}

/* Imaging and Photography */
if ($cat == "ip") {
  if ( $proj == "apple") {
    $p_wrapper_class = 'apple';
    $p_title = "Apple Care";
    $p_file_name = "imaging/apple.php";
  }
  if ( $proj == "styling") {
    $p_wrapper_class = 'styling';
    $p_title = "Duplicitous";
    $p_file_name = "imaging/duplicitous.php";
  }
  if ( $proj == "grief") {
    $p_wrapper_class = 'grief';
    $p_title = "Human Grief";
    $p_file_name = "imaging/grief.php";
  }
  if ( $proj == "andgny") {
    $p_wrapper_class = 'androgyny';
    $p_title = "Androgyny";
    $p_file_name = "imaging/andro.php";
  }
  if ( $proj == "future") {
    $p_wrapper_class = 'future';
    $p_title = "YEAR 3786 A.D.";
    $p_file_name = "imaging/robot.php";
  }
  if ( $proj == "giant") {
    $p_wrapper_class = 'giant';
    $p_title = "Walking Giant";
    $p_file_name = "imaging/giant.php";
  }
}

/* Motion Graphics & Audio */
if ($cat == "mg") {

  if ( $proj == "mohammad") {
    $p_wrapper_class = 'mohammad';
    $p_title = "Mohammad Ali";
    $p_file_name = "mohammad.php";
  }
  if ( $proj == "smoking") {
    $p_wrapper_class = 'a_smoke';
    $p_title = "Anti Smocking Campaign";
    $p_file_name = "antismocking.php";
  }
  if ( $proj == "monkey") {
    $p_wrapper_class = 'monkey';
    $p_title = "Monkey Freak!";
    $p_file_name = "monkeyfreak.php";
  }
  if ( $proj == "kabul") {
    $p_wrapper_class = 'kabul';
    $p_title = "Kabul is singing";
    $p_file_name = "monkeyfreak.php";
  }
  if ( $proj == "dream") {
    $p_wrapper_class = 'dream';
    $p_title = "I have his dream";
    $p_file_name = "dream.php";
  }
  if ( $proj == "ss") {
    $p_wrapper_class = 'sscore';
    $p_title = "Sound Scoring";
    $p_file_name = "sscore.php";
  }
  if ( $proj == "comp") {
    $p_wrapper_class = 'csound';
    $p_title = "Hand Made SoundTrack";
    $p_file_name = "csound.php";
  }
  
}

if ($cat == "fa") {

  if ( $proj == "afgh") {
    $p_wrapper_class = 'afgh';
    $p_title = "Afghanistan";
    $p_file_name = "fa/afgh.php";
  }
  if ( $proj == "idiom") {
    $p_wrapper_class = 'idiom';
    $p_title = "Idiomatic Expressions";
    $p_file_name = "fa/idiom.php";
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