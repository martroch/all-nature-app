const params = new URLSearchParams(window.location.search);
const userId = params.get('name');

axios.get(`../json/usuarios.json`)
    .then(function(response) {
        document.querySelector('.name').textContent = response.data.name;
        document.querySelector('.email').textContent = response.data.email;
        document.querySelector('.image').src = response.data.sprites.front_default;
    });