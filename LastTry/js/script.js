const openMenuIcon = document.querySelector('#open_menu_icon');
const menu = document.querySelector('#menu');

openMenuIcon.addEventListener('click', () => {
    menu.classList.remove('hided_menu')
    menu.classList.add('displayed_menu')
});

const closeMenuIcon = document.querySelector('#close_menu_icon');

closeMenuIcon.addEventListener('click', () => {
    menu.classList.remove('displayed_menu')
    menu.classList.add('hided_menu')
});