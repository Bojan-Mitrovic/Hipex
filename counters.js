const counters = document.querySelectorAll('.counter');
const speed = 500;

// for each counter number 
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        // counting spped rate
        const inc = target / speed;


        console.log(inc);
        console.log(count);

        if (count < target) {

            counter.innerText = Math.ceil(count + inc);

            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }

    };
    updateCount();
})