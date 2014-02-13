$(".btn").each(function() {
  $(this).bind("touchstart", function(e) {
    $(this).toggleClass("touched");
    e.preventDefault();
  }).bind("touchend", function() {
    $(this).toggleClass("touched");
  });
});