$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

// book list

$(document).ready(function(){

    $('.deletebutton').click(function(){
          //$(this).parent().parent().parent().addClass("deleteme");
          $(this).closest('.book').addClass("deleteme");
          // $(this).delay(50000).addClass("hideme");
      });
  
  });