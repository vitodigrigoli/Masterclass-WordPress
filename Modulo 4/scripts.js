const popup = document.querySelector('.popup')
const form = document.querySelector('.form')
const popup_text =  document.querySelector('.popup__text  p')
const honeypot = document.querySelector('.hp')
const loader = document.querySelector('.arc')

const navbar = document.querySelector('.navbar')
const navbar_menu = document.querySelector('.navbar__menu')
const navbar_toggle = document.querySelector('.navbar__toggle')


const togglePopup  = () => popup.classList.toggle('popup--visible')


const toggleMenu = () => {

    navbar.classList.toggle('navbar--open')
    navbar_toggle.classList.toggle('navbar__toggle--open')
    navbar_menu.classList.toggle('navbar__menu--open')
}

const navbarVisible = () => {
    if (document.documentElement.scrollTop > 200 ){
        navbar.classList.add('navbar--visible')
    }
    else{
        navbar.classList.remove('navbar--visible')
        navbar_toggle.classList.remove('navbar__toggle--open')
        navbar_menu.classList.remove('navbar__menu--open')
        navbar.classList.remove('navbar--open')

    }
}

window.onscroll = () => navbarVisible()


form.addEventListener('submit', event =>  {

    event.preventDefault()
    popup_text.innerHTML = "Stiamo inviando il tuo messaggio. Attendi..."
    loader.classList.remove('d-none')

    togglePopup()

    if( honeypot.value === '' ){

        emailjs.init("WdWbCWEwENLI_KOyG");
    
        emailjs.sendForm('service_6tcm88e', 'template_qwnxuhb', event.target)
            .then( response => {
                loader.classList.add('d-none')
                popup_text.innerHTML = "Messaggio inviato con successo!"
            }, error => {
                loader.classList.add('d-none')
                popup_text.innerHTML = "Invio non riuscito, Riprova più tardi!"
            });
    }
})