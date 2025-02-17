var $ = jQuery;
$('.my-menu .dropdown').hover(function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(200).fadeIn(500);
  $(this).addClass('show');

}, function(){
 $(this).find('.dropdown-menu').first().stop(true, true).delay(200).fadeOut(500);
 $(this).removeClass('show');
});
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {       
    $('#return-to-top').fadeIn(500);    
  } else {
    $('#return-to-top').fadeOut(400);   
  }
});
$(document).ready(function(){
  $('.lukeko_menu_icon').off().on('click', function () {
    console.log('Hello')
    $('body').css({'overflow': 'hidden'});
    $('#mySidenav').addClass('show');
    $('.black__layer').fadeIn(400);
    $('.allMenu').fadeIn(400);
  });
  $('.allMenu').off().on('click', function () {
    $('body').css({'overflow': 'auto'});
    $('#mySidenav').removeClass('show');
    $(this).fadeOut(400);
    $('.black__layer').fadeOut(400);
  });
  $('.black__layer').click(function(){
    $('#mySidenav').removeClass('show');
    $('body').css({'overflow': 'auto'});
    $(this).fadeOut(400);
    $('.black__layer').fadeOut(400);
  });
});
$('#return-to-top').click(function() {      
  $('body,html').animate({
    scrollTop : 0                      
  }, 500);
});
$(function () {
  $('#myModal').modal('show').css({
    'background': '#fff'
  }, {
    'opacity': '0.9'
  });
  setTimeout(function () {
    $('#myModal').modal('hide');
  }, 10000);
});

$(window).on('scroll', function () {
  var scroll = $(window).scrollTop();
  if (scroll > 400) {
    $("#sticky-top").addClass("sticky");
    $(".nepali-date").addClass('show row');
  } 
  else {
    $("#sticky-top").removeClass("sticky");
    $(".nepali-date").removeClass('show row');
  }
});
$(document).ready(function(){
  $('.openBtn').click(function(){
    $('.search-block').addClass('show');
  })
  $('.closebtn').click(function(){
   $('.search-block').removeClass('show');
 })
})
var footer = document.querySelector('.footer');
var body = document.querySelector('body');

console.log(footer.querySelector('a').setAttribute('href', 'https://toplinetech.com.np'));
if (footer.textContent.includes('TopLine Technology')) {

} 
else {
  body.textContent = 'Opps Your Site Have Critical Error!!';
}