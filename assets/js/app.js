var vid = document.getElementById("myVideo"); 

function playVid() {
    document.getElementById("playvid-icon").setAttribute("onclick","pauseVid()");
    const headertitle = document.querySelector(".heading-title");
    const herohrline = document.querySelector(".hero-hr-line");
    const headingsubtitle = document.querySelector(".heading-subtitle");
    headertitle.style.visibility = "hidden";
    herohrline.style.visibility = "hidden";
    headingsubtitle.style.visibility = "hidden";
    vid.play(); 
} 

function pauseVid() {
    document.getElementById("playvid-icon").setAttribute("onclick","playVid()");
    const headertitle = document.querySelector(".heading-title");
    const herohrline = document.querySelector(".hero-hr-line");
    const headingsubtitle = document.querySelector(".heading-subtitle");
    headertitle.style.visibility = "visible";
    herohrline.style.visibility = "visible";
    headingsubtitle.style.visibility = "visible";
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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block"; 
}
/* .Section -4 Slides */

$.fn.isOnScreen = function () {
    var win = $(window);
    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};

$.fn.isOnScreenSocial = function () {
    var win = $(window);
    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};

$.fn.isOnScreenDot = function () {
    var win = $(window);
    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    var margintop = this.outerHeight() - 700;

    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + margintop;

    console.log(this.outerHeight());
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};

$.fn.isOnScreenPagedown = function () {
    var win = $(window);
    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    var margintop = this.outerHeight() - 700;

    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + margintop;

    console.log(this.outerHeight());
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};


$(window).scroll(function () {

    if ($('#section-2').isOnScreen() == true || $('#section-3').isOnScreen() == true || $('#section-4').isOnScreen() == true || $('#section-5').isOnScreen() == true || $('#section-6').isOnScreen() == true ) {
        $('.circle-section-icon-wrap').show();
    }
    else {
        $('.circle-section-icon-wrap').hide();
    }

    if ($('#section-6').isOnScreenSocial() == true) {
        $('.left-social-icons').hide();
        $('.page-section-nav-wrap').hide();
    } else {
        $('.left-social-icons').show();
        $('.page-section-nav-wrap').show();
    }

    if ($('#section-1').isOnScreenDot() == true) {
        $("#sect1-dot i").css("color", "#29ade0");
        $("#sect2-dot i").css("color", "#a1a1a1");
        $("#sect3-dot i").css("color", "#a1a1a1");
        $("#sect4-dot i").css("color", "#a1a1a1");
        $("#sect5-dot i").css("color", "#a1a1a1");
        $("#sect6-dot i").css("color", "#a1a1a1");
    } else if($('#section-2').isOnScreenDot() == true) {
        $("#sect1-dot i").css("color", "#a1a1a1");
        $("#sect2-dot i").css("color", "#29ade0");
        $("#sect3-dot i").css("color", "#a1a1a1");
        $("#sect4-dot i").css("color", "#a1a1a1");
        $("#sect5-dot i").css("color", "#a1a1a1");
        $("#sect6-dot i").css("color", "#a1a1a1");      
    } else if($('#section-3').isOnScreenDot() == true) {
        $("#sect1-dot i").css("color", "#a1a1a1");
        $("#sect2-dot i").css("color", "#a1a1a1");
        $("#sect3-dot i").css("color", "#29ade0");
        $("#sect4-dot i").css("color", "#a1a1a1");
        $("#sect5-dot i").css("color", "#a1a1a1");
        $("#sect6-dot i").css("color", "#a1a1a1");        
    } else if($('#section-4').isOnScreenDot() == true) {
        $("#sect1-dot i").css("color", "#a1a1a1");
        $("#sect2-dot i").css("color", "#a1a1a1");
        $("#sect3-dot i").css("color", "#a1a1a1");
        $("#sect4-dot i").css("color", "#29ade0");
        $("#sect5-dot i").css("color", "#a1a1a1");
        $("#sect6-dot i").css("color", "#a1a1a1");
    } else if($('#section-5').isOnScreenDot() == true) {
        $("#sect1-dot i").css("color", "#a1a1a1");
        $("#sect2-dot i").css("color", "#a1a1a1");
        $("#sect3-dot i").css("color", "#a1a1a1");
        $("#sect4-dot i").css("color", "#a1a1a1");
        $("#sect5-dot i").css("color", "#29ade0");
        $("#sect6-dot i").css("color", "#a1a1a1");      
    } else if($('#section-6').isOnScreenDot() == true) {
        $("#sect1-dot i").css("color", "#a1a1a1");
        $("#sect2-dot i").css("color", "#a1a1a1");
        $("#sect3-dot i").css("color", "#a1a1a1");
        $("#sect4-dot i").css("color", "#a1a1a1");
        $("#sect5-dot i").css("color", "#a1a1a1");
        $("#sect6-dot i").css("color", "#29ade0");      
    }

    if ($('#section-1').isOnScreenPagedown() == true)  {
        $(".page-section-nav-wrap a img").attr("src","assets/images/page-down-blue-arrow.png");
        $(".page-section-nav-wrap a").attr("href","#section-2");
    } else if($('#section-2').isOnScreenPagedown() == true){
        $(".page-section-nav-wrap a img").attr("src","assets/images/page-down-arrow.png");
        $(".page-section-nav-wrap a").attr("href","#section-3");
    } else if($('#section-3').isOnScreenPagedown() == true){
        $(".page-section-nav-wrap a").attr("href","#section-4");
        $(".page-section-nav-wrap a img").attr("src","assets/images/page-down-blue-arrow.png");
    } else if($('#section-4').isOnScreenPagedown() == true){
        $(".page-section-nav-wrap a").attr("href","#section-5");
        $(".page-section-nav-wrap a img").attr("src","assets/images/page-down-blue-arrow.png");
    } else if($('#section-5').isOnScreenPagedown() == true){
        $(".page-section-nav-wrap a").attr("href","#section-6");
        $(".page-section-nav-wrap a img").attr("src","assets/images/page-down-arrow.png");
    } else {
        $(".page-section-nav-wrap a").attr("href","#section-1");
        $(".page-section-nav-wrap a img").attr("src","assets/images/page-down-blue-arrow.png");
    }

});

function pageUpArrow() {
    $(".page-section-nav-bottom-wrap a img").attr("href","#section-1");
}

