var vid = document.getElementById("myVideo"); 

function playVid() {
    document.getElementById("playvid-icon").setAttribute("onclick","pauseVid()");
    vid.play(); 
} 

function pauseVid() {
    document.getElementById("playvid-icon").setAttribute("onclick","playVid()");
    vid.pause(); 
}

function openNav() {
    document.getElementById("hamburger-icon").setAttribute("onclick","closeNav()");
    document.getElementById("hamburger-icon").setAttribute("class","fas fa-times");
    const nav1 = document.querySelector(".main-menu .navigation nav");
    const nav2 = document.querySelector(".secondary-menu nav");
    const headtitle = document.querySelector(".heading-title");
    nav1.style.display = "block";
    nav2.style.display = "block";
    headtitle.style.paddingTop = "600px";

}

function closeNav() {
    document.getElementById("hamburger-icon").setAttribute("onclick","openNav()");
    document.getElementById("hamburger-icon").setAttribute("class","fas fa-bars");
    const nav1 = document.querySelector(".main-menu .navigation nav");
    const nav2 = document.querySelector(".secondary-menu nav");
    const headtitle = document.querySelector(".heading-title");
    nav1.style.display = "none";
    nav2.style.display = "none";
    headtitle.style.paddingTop = "158px";
}

function openSearchPopUp() {
    const searchPopUp = document.querySelector(".header-search-form.header-show");
    searchPopUp.style.visibility = "visible";
    searchPopUp.style.opacity = 1;

}

function closeSearchPopUp() {
    const searchPopUp = document.querySelector(".header-search-form.header-show");
    searchPopUp.style.visibility = "hidden";
    searchPopUp.style.opacity = 0;

}

function mediaQuery1024(m2) {
    const nav1 = document.querySelector(".main-menu .navigation nav");
    const nav2 = document.querySelector(".secondary-menu nav");
    const headtitle = document.querySelector(".heading-title");
    if (m2.matches) { // If media query matches
        nav1.style.display = "block";
        nav2.style.display = "block";
        headtitle.style.paddingTop = "158px";
    } else {
        document.getElementById("hamburger-icon").setAttribute("onclick","openNav()");
        document.getElementById("hamburger-icon").setAttribute("class","fas fa-bars");
        nav1.style.display = "none";
        nav2.style.display = "none";
    }
}

var m2 = window.matchMedia("(min-width: 1024px)")
mediaQuery1024(m2)
m2.addListener(mediaQuery1024)

/* Section -4 Slides */
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
/* .Section -4 Slides */