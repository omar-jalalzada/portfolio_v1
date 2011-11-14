/* Author: Omar Jalalzada */

/* Contact me functionality */
/*
  x$("#contact_me")[0].on('click', function(){
    console.log("cabs sa here");
  });
*/

// Auto Scroll the page
x$(window).on( 'load', function(){
  setTimeout(function(){
   if (window.pageYOffset < 50) {
    window.scrollTo(0,1);}
  },0);
});

// Contact Me Button
x$(document).on("DOMContentLoaded", function() {
  x$("#contact_me").each(function(btn){
    x$(btn).on('click', function(){
      x$("#contact_me_container").addClass("active");
    });
  });
  
  x$("#bg_module").each(function(module){
    var bHeight = document.body.offsetHeight + 'px'
    x$(module).setStyle('height', bHeight);
    x$(module).on('click', function(){
      x$("#contact_me_container").removeClass("active")
    });  
  });
});

/* Mouse over action for the display boxes */
x$(document).on("DOMContentLoaded", function() {
  x$(".box").each(function(box){
    x$(box).on('mouseover', function (){
      x$(box).addClass('over');
/*
      function timeMsg() {
        var t = setTimeout( function overMouse() {
          x$(box).addClass('over');
        },1000); 
      };    
     return timeMsg();
*/
    });
    
    x$(box).on('mouseout', function(){
      x$(this).removeClass('over')
    });
    
  });
});

/* Late loading the images for faster page loads */
x$(document).on("DOMContentLoaded", function() {


  // Home page
  x$('body.home_page').each(function () {
    x$(".box").each(function(boxes){
   
      x$(boxes).find(".lateload").each(function(pics){
        x$(pics).addClass("pic");
      });
   
/*
      function timeLoad() {
        var t = setInterval( function overMouse() {
 
          x$(boxes).find(".lateload").each(function(pics){
            x$(pics).addClass("pic");
          });
 
          console.log("cabsa here!");
        },5000); 
      }; 

    return timeLoad();
*/
  
   });
  });
  // Ending Homepage 
  
  x$('body.project').each(function () {
    x$(".img").each(function(boxes, index){
      x$(boxes).find(".lateload").each(function(pics){
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





