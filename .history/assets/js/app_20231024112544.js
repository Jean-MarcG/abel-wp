/**
* File primary-navigation.js.
*
* Required to open and close the mobile navigation.
*/

/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
navToggle = document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== CHANGE BACKGROUND HEADER ===============*/
const scrollHeader = () =>{
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    this.scrollY >= 50 ? header.classList.add('bg-header') 
    : header.classList.remove('bg-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
    const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
    : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SCROLL REVEAL ANIMATION ===============*/

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 400,
    // reset: true, // Animation repeat
})

sr.reveal('.hero__container, .formation__container, .package__title, .package__subtitle, .forward__container, .agences, .footer__before, .footer__after', {origin: 'bottom'})
sr.reveal('.permisPresentation__title, .permisPresentation__description', {origin: 'bottom'})
sr.reveal('.package__card--left, .permis__description--left', {origin: 'left'})
sr.reveal('.package__card--right, .permis__description--right', {origin: 'right'})

/*=============== SCROLL TEXT ANIMATION ===============*/

document.addEventListener("DOMContentLoaded", function() {
    const scrollingText = document.querySelector(".scrolling-text__content");
    
    // Vérifiez si le texte existe
    if (scrollingText) {
        const text = scrollingText.textContent;
        scrollingText.innerHTML += text;
    }
});

/*=============== COPY TEXT ===============*/

const copyEmail = document.getElementById("copyEmail");

copyEmail.addEventListener("click", function (Event) {
    navigator.clipboard.writeText("info@autoecoleabel.fr").then(() => {
        document.querySelector('.contact__left button').innerHTML = 'info@autoecoleabel.fr <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 7.95349L8.02326 13.9767L20.5 1.5" stroke="#D93513" stroke-width="3"/></svg>';
    })
});

// Signature
if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
    var args = ['\n %c with <3 by @jmg \u2730 http://www.2212.fr/ \n\n','background: #1C4F96; padding:5px 0;color: #333333;'];
    window.console.log.apply(console, args);
} else if (window.console) {
    window.console.log('@jmg - http://www.2212.fr/');
}


