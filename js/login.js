
import { renderContact } from "contact.js"

const adddButton = document.querySelector('#add');
adddButton.addEventListener('click', function() {
	const name = document.querySelector('#name').value;
	const password = document.querySelector('#password').value;
    const newContact = renderContact(name, password);

    document.querySelector('.contact-list').innerHTML = document.querySelector('.contact-list').innerHTML + newContact;
});

