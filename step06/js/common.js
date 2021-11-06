//  これはWPでは使用不可
//  $(function()
  
//  こっちを使用
//  jQuery(function($)

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

  $('.js-btn').click(function(){
    if(('.js-open').hasClass('active')){
      $('.js-open').removeClass('active');
      $('.js-open').fadeOut();
    }else{
      $('.js-open').addClass('active');
      $('.js-open').fadeIn();
    }
  });
    
  $('#top-btn').click(function(){
    $("html,body").animate({scrollTop:0},"300");
  });

  $('.signup-show').click(function() {
      $('#signup-modal').fadeIn();
    });

  $('.login-show').click(function() {
        $('#login-modal').fadeIn();
      });

  $('.close-modal').click(function() {
      $('#signup-modal').fadeOut();
    });

  $('.close-modal').click(function() {
      $('#login-modal').fadeOut();
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

  $('.toggle').click(function(){
    if($(this).hasClass('active')){
      $('.js-text').text('クリックでCLOSE!!');
    }else{
      $('.js-text').text('クリックで下部にOPEN!!');
    }
  });

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