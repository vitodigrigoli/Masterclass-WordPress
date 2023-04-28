const popup = document.querySelector('.popup')
const form = document.querySelector('.form')
const popup_text =  document.querySelector('.popup__text  p')
const honeypot = document.querySelector('.hp')
const loader = document.querySelector('.arc')
const togglePopup  = () => popup.classList.toggle('popup--visible')



form.addEventListener('submit', event => {

    event.preventDefault()
    loader.classList.remove('d-none')
    
    togglePopup()

    if( honeypot.value === '' ){

        emailjs.init("WdWbCWEwENLI_KOyG");
    
        emailjs.sendForm('service_cl4zhwy', 'template_qwnxuhb', event.target)

    
        .then( response =>  {
            loader.classList.add('d-none')
            popup_text.innerHTML = "Messaggio inviato con successo!"
            event.target.reset

        }, error => {
            popup_text.innerHTML = "Invio non riuscito. Riprova più tardi"
        });
    }

})