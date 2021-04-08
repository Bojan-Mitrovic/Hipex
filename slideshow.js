var i = 1;
var slideIndex = 2;





// function for dot commands
function currentSlide(n) {
    var slides = document.querySelectorAll('.slides');
    var dots = document.querySelectorAll('.dot');




    switch (n) {
        case 1:
            slides[0].style.display = 'block';
            slides[1].style.display = 'none';
            slides[2].style.display = 'none';
            break;
        case 2:
            slides[0].style.display = 'none';
            slides[1].style.display = 'block';
            slides[2].style.display = 'none';
            break;
        case 3:
            slides[0].style.display = 'none';
            slides[1].style.display = 'none';
            slides[2].style.display = 'block';
            break;
    }
}


showSlides();

function showSlides() {
    var slides = document.querySelectorAll('.slides');
    var dots = document.querySelectorAll('.dot');

    i++;
    slideIndex++;
    if (slideIndex > slides.length - 1) {
        slideIndex = 0;
    }
    if (i > slides.length - 1) {
        i = 0;
    }

    // Make slide visible
    slides[slideIndex].style.display = "block";
    // Hide old slide, currentSlide index minus 1
    slides[i].style.display = "none";
    // Dot sign which slide is active
    dots[slideIndex].style.backgroundColor = 'black';
    // Unselect last previous dot
    dots[i].style.backgroundColor = 'white';


    setTimeout(showSlides, 6000); // Change image every 6 seconds
}