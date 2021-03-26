const header = document.querySelector('.header-wrap');
const slidesContainer = document.querySelector('.slideshow-container');
const sliders = document.querySelectorAll('.icon-wrap');


// header change style when leaves slide container
const headerOptions = {
    rootMargin: '-100px 0px 0px 0px',
}

const fixedHeader = new IntersectionObserver(function(entries, fixedHeader) {

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