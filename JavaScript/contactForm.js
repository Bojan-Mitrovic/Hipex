// listening for submit
const contactForm = document.querySelector('.contact-form');

contactForm.addEventListener('sumbit', submitForm);

// submit form 
function submitForm(e) {
    e.preventDefault();

    // Get values
    var name = getInputValue('name');
    var email = getInputValue('email');
    var phone = getInputValue('phone');
    var message = getInputValue('message');

    // save message
    saveMessage(name, email, phone, message);

    // show feedback 
    document.querySelector('.message-sent').style.display = 'block';

    // feedback disappear
    setTimeout(function() {
        document.querySelector('.message-sent').style.display = 'none';
    }, 5000);

    //  clear input fields 
    cotanctForm.reset();

    // collect values 
    function getInputValue(id) {
        return document.getElementById(id).value;
    }
    console.log(saveMessage);

}