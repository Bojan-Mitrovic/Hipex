const headerAboutUs = document.querySelector('.header-intro');
const header = document.querySelector('.header');
const headerOptions = {
        rootMargin: '0px',
    }
    // adding background to header when leave about us intro
export const headerBackground = new IntersectionObserver(function(entries) {

    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

}, headerOptions);

headerBackground.observe(headerAboutUs);