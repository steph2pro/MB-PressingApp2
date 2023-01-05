const counters=document.querySelectorAll('.counter');
const speed=5;
counters.forEach(count=>{
	const updateCount=()=>{
		//=+ pour la convertion de la chaine recuperer en entier
		const target=+count.getAttribute('data-target');
		const cnt=+count.innerText;
		const inc=target/speed;
		if (cnt<target) {
			count.innerText=Math.floor(cnt+inc);
			setTimeout(updateCount,500);
		} else {
			count.innerText=target;
		}
	}
	updateCount();
})