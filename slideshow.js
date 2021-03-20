// var index = 1;
// showSlides(index);

// function currentSlide(n) {
//     showSlides(index = n);
//     console.log('current slides');
// }

// function showSlides(n) {
//     var i;
//     var slides = document.querySelectorAll('.slides');
//     var dots = document.querySelectorAll('.dot');

//     if (n > slides.length) {
//         index = 1
//     }
//     if (n < 1) {
//         index = slides.length
//     }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace("active", "");
//     }
//     slides[index - 1].style.display = "block";
//     dots[index - 1].className += " active";
// }

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 6000); // Change image every 2 seconds
}