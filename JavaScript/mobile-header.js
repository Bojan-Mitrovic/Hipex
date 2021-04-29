export const navBar = document.querySelector('.mobile-nav-bar');
export const logo = document.querySelector('.mobile-logo');
export const open = document.querySelector('.menu-bar-open');
export const close = document.querySelector('.menu-bar-close');
export const slideControls = document.querySelector('.dot-container');
export const logoOpen = document.querySelector('.logo-open-btn');

// showing navBar 
open.addEventListener('click', function() {

    navBar.style.display = 'block';
    open.style.display = 'none';
    close.style.display = 'block';
    logo.style.display = 'none';
    slideControls.style.display = 'none';
});

// closing navBar 
close.addEventListener('click', function() {

    navBar.style.display = 'none';
    open.style.display = 'block';
    close.style.display = 'none';
    logo.style.display = 'block';
    slideControls.style.display = 'block'
});