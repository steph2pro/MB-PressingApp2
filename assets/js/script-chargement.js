const loader = document.querySelector('.body');
const dash = document.querySelector('.dash');
window.addEventListener('load',()=>{
	setTimeout(()=>{
		loader.classList.add('visible');
	},3000);
	dash.style.display='block';
})