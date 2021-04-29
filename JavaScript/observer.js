const header = document.querySelector('.header-wrap');
const headerAboutUs = document.querySelector('.header-intro');
const slidesContainer = document.querySelector('.slideshow-container');
const sliders = document.querySelectorAll('.icon-wrap');



export const headerOptions = {
    rootMargin: '-60px 0px 0px 0px',
}

// adding background to header when leave slides 
export const fixedHeader = new IntersectionObserver(function(entries) {

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
export const slideOptions = {
    threshold: 1,
    rootMargin: '0px 0px 60px 0px'
};
export const slideIcons = new IntersectionObserver(function(entries, slideIcons) {

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