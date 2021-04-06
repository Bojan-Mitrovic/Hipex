const header = document.querySelector('.header-wrap');
const headerAboutUs = document.querySelector('.header-intro');
const slidesContainer = document.querySelector('.slideshow-container');
const sliders = document.querySelectorAll('.icon-wrap');



const headerOptions = {
    rootMargin: '-100px 0px 0px 0px',
}

// adding background to header when leave slides 
const fixedHeader = new IntersectionObserver(function(entries) {

    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

}, headerOptions);

fixedHeader.observe(slidesContainer);




// icons sliding inside 
const slideOptions = {
    threshold: 1,
    rootMargin: '0px 0px 60px 0px'
};
const slideIcons = new IntersectionObserver(function(entries, slideIcons) {

    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add('appear');
            slideIcons.unobserve(entry.target);
        }
    });

}, slideOptions);

sliders.forEach(slider => {
    slideIcons.observe(slider);
})