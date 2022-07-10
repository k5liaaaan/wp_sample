jQuery(function($){

  $(function() {
    var nav = $('.nav');
    $('li', nav)
    .mouseover(function(e) {
    $('ul', this).stop().slideDown('fast');
    })
    .mouseout(function(e) {
    $('ul', this).stop().slideUp('fast');
    });
  });

  $('a[href^="#"]').click(function() {
  var speed = 400;
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $('body,html').animate({scrollTop:position}, speed, 'swing');
  return false;
  });

  $('.slider').slick({
    //autoplay: true,
    //autoplaySpeed: 3000,
    //speed: 400,
    //dots: true,
    //infinite: true
    dots:true,
    arrows:false
  });


  function navslide() {
    $(this).toggleClass("active").next().slideToggle();
    //$(this).slideToggle(300);
    //$(this).toggleClass("active");
  }
  $(".toggle").click(navslide);

  if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
    
  }

  if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
    
  }

});