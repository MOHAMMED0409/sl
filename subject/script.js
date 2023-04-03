$('.navTrigger').click(function () {
  $(this).toggleClass('active');
  console.log("Clicked menu");
  $("#mainListDiv").toggleClass("show_list");
  $("#mainListDiv").fadeIn();

});

const tabs = document.querySelectorAll(".tabs-container .tab");
const contents = document.querySelectorAll(".tabs-container .content");

const removeActiveClass = () => {
  tabs.forEach((t) => {
    t.classList.remove("active");
  });

  contents.forEach((c) => {
    c.classList.remove("active");
  });
};

tabs.forEach((t, i) => {
  t.addEventListener("click", () => {
    removeActiveClass();
    contents[i].classList.add("active");
    t.classList.add("active");
  });
});
