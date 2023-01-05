const loader = document.querySelector('.body');
window.addEventListener('load',()=>{
	setTimeout(()=>{
		loader.classList.add('visible');
	window.location.href='dashboad.php';
	},3000);
	
})