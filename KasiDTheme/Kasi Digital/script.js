@media screen and (max-width: 1200px){
	#desktop-nav{
		display: none;
	}
	#hamburger-nav{
		display: flex;
	}
} 
function toggleMenu(){
	const menu = document.querySelector(".menu-links");
	const icon = document.querySelector(".hamburger-icon");
	menu.classList.toggle("open");
	icon.classList.toggle("open");
}