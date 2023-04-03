$(".btn").click(function(){
    $(".input").toggleClass("active").focus;
    $(this).toggleClass("animate");
    $(".input").val("");
  });
  
  $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});