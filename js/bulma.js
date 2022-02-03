// NAVBAR
// Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
 // Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
  } 


// BACK TO TOP BUTTON 
// Get the button:
mybutton = document.getElementById("backToTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 

// REVEAL ANIMATION
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } 
  }
}

window.addEventListener("scroll", reveal);