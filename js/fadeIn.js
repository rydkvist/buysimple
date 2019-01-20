$(document).ready(function(){
    $("#header").fadeIn(2250);
    $("#cube").fadeIn(2750);
    $("#info").fadeIn(3250);
  });
function addToCart(id) {
    $.get("save.php?id=" + id, function(data) {
      $(".status").html(data); 
    });
    $(".status").fadeTo(3000, 0.7).slideDown(500, function(){
      $(".status").slideUp(500);
      });
  }