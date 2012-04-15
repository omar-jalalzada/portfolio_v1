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
        <li class='interactive'><a href="cat.php?cat=interactive">Interactive</a></li>                
        <li style='display:none;' class='mobile'><a href="cat.php?cat=mobile">Mobile Sites</a></li>                
        <li style='display:none;' class='web_design'><a href="cat.php?cat=web">Web Design</a></li>
        <li class='imaging'><a href="cat.php?cat=ip">Imaging/Photography</a></li>
        <li class='mograph'><a href="cat.php?cat=mg">Motion Graphics/Audio</a></li>
        <li class='fine_art'><a href="cat.php?cat=fa">Fine Art</a></li>
        <li style='display:none;' class='three_d'><a href="cat.php?cat=3d">3D</a></li>
        <li class='about_me' style="display:none;"><a href="about_me.php?about=bali">About Me</a></li>
      </ul>
    </div> <!-- Closing #nav -->
  
    <span id='p_wrapper_class' style="display:none;"><?php echo "$p_wrapper_class" ?></span>
    <div id="sub_nav">
    
      <ul  class="<?php if ( $wrapper_class == 'branding' ) { echo "show";} ?>" >
        <li class='agrion'><a href="project.php?cat=branding&proj=agrion" >Agrion</a></li>
        <li class='pantone'><a class="row" href="project.php?cat=branding&proj=pantone">Pantone</a></li>
        <li class='zeal'><a class="row" href="project.php?cat=branding&proj=zeal">Zeal</a></li>
        <li class='ie'><a class="row" href="project.php?cat=branding&proj=ie" id="row4">Island Earth</a></li>
      </ul>

      <ul  class="<?php if ( $wrapper_class == 'mobile' ) { echo "show";} ?>" >
        <li class='asda'><a href="project.php?cat=mobile&proj=asda" >Asda</a></li>
        <li class='life'><a class="row" href="project.php?cat=mobile&proj=life">LifeTechnologies</a></li>
        <li class='tw'><a class="row" href="project.php?cat=mobile&proj=tw">TicketWeb</a></li>
        <li class='invitrogen'><a class="row" href="project.php?cat=mobile&proj=invitrogen">Invitrogen</a></li>
        <li class='wasabi'><a class="row" href="project.php?cat=mobile&proj=wasabi">Wasabi Grill</a></li>
        <li class='eats'><a class="row" href="project.php?cat=mobile&proj=eats">Eats</a></li>
      </ul>
      
      <ul  class="<?php if ( $wrapper_class == 'web_design' ) { echo "show";} ?>" >
        <li class='virtus'><a href="project.php?cat=web&proj=virtus" >Virtus</a></li>
        <li class='wasabi'><a class="row" href="project.php?cat=web&proj=wasabi-w">Wasabi</a></li>
        <li class='hf'><a class="row" href="project.php?cat=web&proj=hf">Half Full</a></li>
        <li class='wdnm'><a class="row" href="project.php?cat=web&proj=wdnm">WDNM</a></li>
        <li class='hurt'><a class="row" href="project.php?cat=web&proj=hurt">Hurt Locker</a></li>
        <li class='zeal_w'><a class="row" href="project.php?cat=web&proj=zeal-w">Zeal</a></li>
        <li class='htn'><a class="row" href="project.php?cat=web&proj=htn">How To Nap</a></li>
      </ul>
      
      <!-- Digital Imaging and Photography -->
      <ul  class="<?php if ( $wrapper_class == 'imaging' ) { echo "show";} ?>" >
        <li class='apple'><a href="project.php?cat=ip&proj=apple" >Apple Care</a></li>
        <li class='styling'><a class="row" href="project.php?cat=ip&proj=styling">Duplicitous</a></li>
        <li class='grief'><a class="row" href="project.php?cat=ip&proj=grief">Grief</a></li>
        <li class='androgyny'><a class="row" href="project.php?cat=ip&proj=andgny">Androgyny</a></li>
        <li style='display:none;' class='future'><a class="row" href="project.php?cat=ip&proj=future">3786</a></li>
        <li style='display:none;' class='giant'><a class="row" href="project.php?cat=ip&proj=giant">Giant</a></li>
      </ul>
      
      <ul  class="<?php if ( $wrapper_class == 'mograph' ) { echo "show";} ?>" >
        <li class='mohammad'><a href="project.php?cat=mg&proj=mohammad" >Mohammad</a></li>
        <li class='a_smoke'><a class="row" href="project.php?cat=mg&proj=smoking">Stop-Smocking</a></li>
        <li class='monkey'><a class="row" href="project.php?cat=mg&proj=monkey">Monkeys</a></li>
        <li class='kabul'><a class="row" href="project.php?cat=mg&proj=kabul">Kabul Signs</a></li>
        <li class='dream'><a class="row" href="project.php?cat=mg&proj=dream">Dream</a></li>
        <li class='sscore'><a class="row" href="project.php?cat=mg&proj=ss">S-Score</a></li>
        <li class='csound'><a class="row" href="project.php?cat=mg&proj=comp">Custom</a></li>
      </ul>
      

    </div>
  </div> <!-- Closing #nav_conatainer -->
</div> <!-- Closing #box3 -->

