const counters = document.querySelectorAll('.counter');
const counterWrap = document.querySelectorAll('.counter-wrap');
const speed = 100;

// for each counter number 
export const risingNumbers = () => {
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            // counting spped rate
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);

                setTimeout(updateCount, 30);
            } else {
                counter.innerText = target;
            }

        };
        updateCount();
    })
}


// start counting when scroll down to the page
export const counterOptions = {
    threshold: 1,
    rootMargin: '0px 0px 60px 0px'
};
export const countingUp = new IntersectionObserver(function(entries, countingUp) {

    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            risingNumbers();
        }
    });

}, counterOptions);

counterWrap.forEach(wrap => {
    countingUp.observe(wrap);
})