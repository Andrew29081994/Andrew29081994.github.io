var topPageValue = 200;

var lastScrollTop = 0;

$(window).scroll(function() { 
  
  var st = $(this).scrollTop(); 

  if (st < topPageValue) {
    $('nav').addClass('scrollTop');
  } else {
    $('nav').removeClass('scrollTop');
  }

  if (st < lastScrollTop){
    $('nav').addClass('scrollUp');
  } else {
    $('nav').removeClass('scrollUp');
  }

  lastScrollTop = st; 

});


$('.menu_icon').click(function(){
  $('.drop_down').slideToggle(500);
});// end click