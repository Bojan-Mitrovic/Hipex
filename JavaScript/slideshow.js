export var i = 1;
export var slideIndex = 2;
export var globalTimeoutVariable;

// function for dot commands
export function currentSlide(n) {
    var slides = document.querySelectorAll('.slides');
    var dots = document.querySelectorAll('.dot');

    //reset the timeout created by showSlides
    clearTimeout(globalTimeoutVariable);


    switch (n) {
        case 1:
            slides[0].style.display = 'block';
            slides[1].style.display = 'none';
            slides[2].style.display = 'none';
            // dots changing
            dots[0].style.background = 'black';
            dots[1].style.background = 'white';
            dots[2].style.background = 'white';

            slideIndex = 0;
            i = 2;
            break;
        case 2:
            slides[0].style.display = 'none';
            slides[1].style.display = 'block';
            slides[2].style.display = 'none';
            // dots changing
            dots[0].style.background = 'white';
            dots[1].style.background = 'black';
            dots[2].style.background = 'white';

            slideIndex = 1;
            i = 0;
            break;
        case 3:
            slides[0].style.display = 'none';
            slides[1].style.display = 'none';
            slides[2].style.display = 'block';
            // dots changing
            dots[0].style.background = 'white';
            dots[1].style.background = 'white';
            dots[2].style.background = 'black';

            slideIndex = 2;
            i = 1;
            break;
    }
    //reset timeout on every change
    globalTimeoutVariable = setTimeout(showSlides, 6000);

}

showSlides();


export function showSlides() {
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

    // Change slide every 6 seconds
    globalTimeoutVariable = setTimeout(showSlides, 6000);
}