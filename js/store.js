export const storeContact = function(name, password) {
	// Obtenemos el valor, que puede ser un texto o null
	const listInText = window.localStorage.getItem('users');
	// Inicializamos el array
	let listOfUsers = [];
	// Comprobamos si el valor existe o es null. Si no es null, lo leemmos y parseamos
	if (listInText !== null) {
		listOfUsers = JSON.parse(listInText);
	}
};