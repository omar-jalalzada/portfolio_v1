/* Author: Omar Jalalzada */


x$(".box").each(function(box){
  x$(box).on('mouseover', function(){
    x$(this).addClass('over')
  });
  x$(box).on('mouseout', function(){
    x$(this).removeClass('over')
  });


});







