const params = new URLSearchParams(window.location.search);
const userId = params.get('name');

axios.get(`../json/usuarios.json`)
    .then(function(response) {
        
        const selectedUser = response.data.find(function(user){ return user.username === userId; })
        document.querySelector('.name').textContent = selectedUser.name;
        document.querySelector('.email').textContent = selectedUser.email;
        document.querySelector('.username').textContent = selectedUser.username;
        document.querySelector('.imguser').src = selectedUser.imguser;
        document.querySelector('.sld1').src = selectedUser.sld1;
        document.querySelector('.sld2').src = selectedUser.sld2;
        document.querySelector('.sld3').src = selectedUser.sld3;
        document.querySelector('.sld4').src = selectedUser.sld4;
        document.querySelector('.sld5').src = selectedUser.sld5;
        document.querySelector('.sld6').src = selectedUser.sld6;
        document.querySelector('.sld7').src = selectedUser.sld7;
        document.querySelector('.sld8').src = selectedUser.sld8;
        document.querySelector('.sentence').textContent = selectedUser.sentence;

    });