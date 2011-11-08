/* Author: Omar Jalalzada */

/* Contact me functionality */
/*
  x$("#contact_me")[0].on('click', function(){
    console.log("cabs sa here");
  });
*/
x$(document).on("DOMContentLoaded", function() {
  x$("#contact_me").each(function(btn){
    x$(btn).on('click', function(){
      x$("#contact_me_container").addClass("active");
    });
  });
  
  x$("#bg_module").on('click', function(){
    x$("#contact_me_container").removeClass("active")
  })
});

/* Mouse over action for the display boxes */
x$(document).on("DOMContentLoaded", function() {
  
  x$(".box").each(function(box){
    console.log(box)
    x$(box).on('mouseover', function(){
      x$(this).addClass('over')
    });
    x$(box).on('mouseout', function(){
      x$(this).removeClass('over')
    });
  });
  
});

/* Late loading the images for faster page loads */
x$(document).on("DOMContentLoaded", function() {

  x$('body.home_page').each(function () {
   x$(".box").each(function(){
    x$(this).find(".lateload").each(function(pics){
      x$(pics).addClass("pic");
    });
   });
  });
  
});



// The following code is only for iphone and ipad

/*
var agent = navigator.userAgent.toLowerCase();
var is_iphone = (agent.indexOf('iphone')!=-1);
var is_ipad = (agent.indexOf('ipad')!=-1);
if (is_iphone | is_ipad) { 
  x$(".box").each(function(box){
    x$(box).on('touchstart', function(){
      x$(this).addClass('over')
    });
    x$(box).on('touchmove', function(){
      x$(this).removeClass('over')
    });
  });
}
*/
/*
if (is_iphone) { 
  x$("#box3").addClass("yeaBuddy");
}
*/





