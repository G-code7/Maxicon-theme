alert('this works!');

const menuCTA = document.querySelector('#user-register');
const registerMenu = document.querySelector('.register-menu');


menuCTA.addEventListener('click', toggleRegisterMenu);


function toggleRegisterMenu() {
    console.log('btn activated');
    registerMenu.classList.toggle('inactive');


}