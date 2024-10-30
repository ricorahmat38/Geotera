/*=============show menu============*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    //validate that variable exist

     if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            //we add the show-menu class to the div tag with nav_menu class
            nav.classList.toggle('show-menu')
        })
     }
}
showMenu('nav-toggle','nav-menu')

/*=============remove menu mobile============*/
const navLink = document.querySelectorAll('.nav_link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    //ketika kita nge klik nav link, maka show menu akan tertutup
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click',linkAction))

/*=============scroll section actice link============*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrolly = window.pageYOffset

    sections.forEach(current => {
        const sectionHeight = current.offsetheight
        const sectiontop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrolly <= sectionTop + sectionHeight){
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.add('active-link')
        
        }else{
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.remove('active-link') 
        }
    })
}
window.addEventListener('scroll',scrollActive)

/*=============change background header============*/
function scrollHeader(){
    const nav = document.getElementById('header')

    //ketika scroll sebanyak 200, maka header akan berubah
    if(this.scrolY >= 200) nav.classList.add('scroll-header');
    else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============show scroll top============*/
function scrollTop(){
    const scrollTop = document.getElementById('scroll-top');
 
    if(this.scrollY >= 560) scrollTop.classList.add('show-scroll');
    else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)

/*=============dark light theme============*/
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-toggle-right'

const selectedTheme = localStorage.getItem('selected-theme')
const selectedicon = localStorage.getItem('selected-icon')


const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.body.classList.contains(iconTheme) ? 'bx-toggle-left' : 'bx-toggle-right'

//berikut cara agar awakmu pas metu tema e tetep
if (selectedTheme){
    document.body.classList[selectedTheme == 'dark' ? 'add' : 'remove'](darkTheme)
    themeButton.classList[selectedicon == 'bx-toggle-left' ? 'add' : 'remove'](iconTheme)
}

//mengaktifkan lek ngga mematikan tema
themeButton.addEventListener('click', () => {

    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme) 
    
    localStorage.setItem('selected-theme',getCurrentTheme())
    localStorage.setItem('selected-icon',getCurrentIcon())

})



/*=============slide show============*/
var slideIndex = 1;
showSlides(slideIndex);

//next/previous controls
function plusSlides(n){
    showSlides(slideIndex += n);

}

//thumbnail image controls
function currentSlide(n) {
 showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if(n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i=0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += "active"
}

/*=============scroll reveal============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 2000,
    reset: true
});

sr.reveal(` .home, .about_data, .about_img, 
           .services_content, .products, 
           .size_data, .size_img, 
           .contact_data, .contact_button, 
           .footer_content, .detail_img, .detail_data`,{
    interval:200
})
           


