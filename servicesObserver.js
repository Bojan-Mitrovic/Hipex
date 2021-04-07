const topContainer = document.querySelector('.header-background')
const header = document.querySelector('.header');
const headerOptions = {
        rootMargin: '-100px 0px 0px 0px',
    }
    // adding background to header when leave about us intro
const headerBackground = new IntersectionObserver(function(entries) {

    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

}, headerOptions);

headerBackground.observe(topContainer);