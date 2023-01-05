
let bt=document.querySelector(".button");
let boite=document.querySelector(".boite");
let btn=document.querySelector(".btn");

const loader = document.querySelector('.body1');
window.addEventListener('load',()=>{
	boite.style.display='block';
	
});
bt.addEventListener("click",()=>{
	boite.style.display='none';
});