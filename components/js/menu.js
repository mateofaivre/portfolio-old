const menu = document.querySelector('#toggle');  
const menuItems = document.querySelector('#overlay');  
const menuContainer = document.querySelector('.menu-container');  
const menuIcon = document.querySelector('i');  

function toggleMenu(e) {
    menuItems.classList.toggle('open');
    menuContainer.classList.toggle('full-menu');
    if (menuIcon.className=="fal fa-bars"){
        menuIcon.className="fal fa-times"
    }
    else {
        menuIcon.className= "fal fa-bars" 
    }
    e.preventDefault();
}

menu.addEventListener('click', toggleMenu, false);