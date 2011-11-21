<a class="box logo" href="/" id="box1">
  <div>
    <h1 class="ir">Omar Jalalzada\'s Portfolio</h1>

  </div>
</a> <!-- closing #box1 -->

<div class="box empty" id="box2"><!-- Empty Space--></div>
<div class="box empty nav" id="box3">

  <div id="header">

    <div id="main_title">

    <?php 

      if ($p_title == null) {
        echo "<h2>$title</h2>";
      } else {
        echo "<h2>$p_title</h2>";
      }
    
    ?>
         
    </div> <!-- Closing #main_title -->

    <div id="nav">
      <span id='wrapper_class' style="display:none;"><?php echo "$wrapper_class" ?></span>
      <ul>
        <li class='branding'><a href="cat.php?cat=branding">Branding</a></li>
        <li class='mobile'><a href="cat.php?cat=mobile">Mobile Sites</a></li>                
        <li class='web_design'><a href="cat.php?cat=web">Web Design</a></li>
        <li class='imaging'><a href="cat.php?cat=ip">Imaging/Photography</a></li>
        <li class='mograph'><a href="cat.php?cat=mg">Motion Graphics/Audio</a></li>
        <li class='fine_art'><a href="cat.php?cat=fa">Fine Art</a></li>
        <li class='three_d'><a href="cat.php?cat=3d">3D</a></li>
        <li class='about_me'><a href="about_me.html">About Me</a></li>
      </ul>
    </div> <!-- Closing #nav -->

    <div id="sub_nav" class="<?php if ( $wrapper_class == 'branding' ) { echo "show";} ?>">
      <ul>
        <li class='agrion'><a href="project.php?cat=branding&proj=agrion" >Agrion</a></li>
        <li class='pantone'><a class="row" href="project.php?cat=branding&proj=pantone">Pantone</a></li>
        <li class='pantone'><a class="row" href="project.php?cat=branding&proj=zeal">Zeal</a></li>
        <li class='ie'><a class="row" href="project.php?cat=branding&proj=ie" id="row4">Island Earth</a></li>
      </ul>
    </div>

    <div id="sub_nav" class="<?php if ( $wrapper_class == 'mobile' ) { echo "show";} ?>">
      <ul>
        <li class='agrion'><a href="project.php?cat=mobile&proj=asda" >Asda</a></li>
        <li class='pantone'><a class="row" href="project.php?cat=mobile&proj=life">LifeTechnologies</a></li>
        <li class='pantone'><a class="row" href="project.php?cat=mobile&proj=tw">TicketWeb</a></li>
        <li class='ie'><a class="row" href="project.php?cat=mobile&proj=invitrogen">Invitrogen</a></li>
        <li class='ie'><a class="row" href="project.php?cat=mobile&proj=wasabi">Wasabi Grill</a></li>
        <li class='ie'><a class="row" href="project.php?cat=mobile&proj=eats">Eats</a></li>
      </ul>
    </div>
    
  </div> <!-- Closing #nav_conatainer -->
  
</div> <!-- Closing #box3 -->
