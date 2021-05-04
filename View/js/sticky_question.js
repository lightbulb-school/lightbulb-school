window.onscroll = function() {sticky_question()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop-200;

function sticky_question() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky_question")
  } else {
    navbar.classList.remove("sticky_question");
  }
}