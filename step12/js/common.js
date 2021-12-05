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




  function demo02() {
      $(this).toggleClass("active").next().slideToggle(300);
  }
  $(".toggle").click(demo02);

  $(".toggle").click(function(){
    var $icon = $(this).find('.fas');
    if($icon.hasClass('fa-rotate-180')){
      $icon.removeClass('fa-rotate-180');
    }else{
      $icon.addClass('fa-rotate-180');
    }
  });

  if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
    $('.smp-tg').click(function(){
      $(this).next('ul').slideToggle();
    });
  }

  if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
    
  }

});