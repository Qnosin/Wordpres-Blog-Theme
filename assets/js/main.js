const HamburgerBtn = document.querySelector('.hamburger-btn');
const MobileMenu = document.querySelector('.toggleMyMenu');


HamburgerBtn.addEventListener('click',()=>{
    MobileMenu.classList.toggle('toggleMyMenu-active');
})