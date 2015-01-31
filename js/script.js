$(document).ready(function() {

  $(".menu-container").click(function() {
    $(".overlay").toggleClass("hide-menu").fadeIn();
  });

  $(".btn-close").click(function(){
    $(".overlay").toggleClass("hide-menu").fadeOut();
  });

  $(".device-md").queue(function(){
      $(this).addClass("slideUp").delay(250);
  });

  $(".device-sm").queue(function(){
      $(this).addClass("slideUp").delay(600);
  });
});