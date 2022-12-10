const menu = document.getElementById('menu')
const toggle = document.querySelector('.navbar__toggle')

const toggleMenu = () =>{
	toggle.classList.toggle('navbar__toggle--active')
	menu.classList.toggle('navbar__menu--active')	
}

let elements = document.querySelectorAll('.watch')

const observer = new IntersectionObserver( (items) =>{
	items.forEach( item => {
		if( item.isIntersecting){
			item.target.classList.add('in-view')
		}
		else{
			item.target.classList.remove('in-view')
		}
	})
}, { threshold: 0.5} )

elements.forEach( el => observer.observe(el))


let pictures = document.querySelectorAll(".picture img");

for( let i = 0; i < pictures.length; i++){
	pictures[i].addEventListener('click', () =>{

		if(!document.fullscreenElement){
			pictures[i].requestFullscreen()
		}
		else{
			document.exitFullscreen();
		}
	})
}
