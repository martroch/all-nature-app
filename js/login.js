const adddButton = document.querySelector('#add');
adddButton.addEventListener('click', function() {
	const name = document.querySelector('#name').value;
    const newContact = renderContact(name);
    
    document.querySelector('.contact-list').innerHTML = document.querySelector('.contact-list').innerHTML + newContact;
});

