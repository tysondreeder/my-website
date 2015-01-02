$(document).ready(function() {

  $(".menu-container").click(function() {
    $(".overlay").toggleClass("hide-menu").fadeIn(600);
  });

  $(".btn-close").click(function(){
    $(".overlay").toggleClass("hide-menu").fadeOut(600);
  });

  $(".device-md").queue(function(){
      $(this).addClass("slideUp").delay(250);
  });

  $(".device-sm").queue(function(){
      $(this).addClass("slideUp").delay(600);
  });
});