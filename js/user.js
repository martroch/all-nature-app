const params = new URLSearchParams(window.location.search);
const userId = params.get('name');

axios.get(`../json/usuarios.json`)
    .then(function(response) {
        
        const selectedUser = response.data.find(function(user){ return user.username === userId; })
        document.querySelector('.name').textContent = selectedUser.name;
        document.querySelector('.email').textContent = selectedUser.email;
        document.querySelector('.image').src = selectedUse.imguser;
    });