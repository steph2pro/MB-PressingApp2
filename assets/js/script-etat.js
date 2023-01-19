const nettoyer=document.querySelector("#nettoyer");
const id=document.querySelector("#id");
const not=document.querySelector(".notification");
//fonction d'affichage de la notification
let showNotification= (message,opt)=>{
  not.textContent=message;
  not.classList.add("show");
  if (opt==true) {
    setTimeout(()=>{
    not.classList.remove("show");
    window.location.href="../vues/vertement_etat.php";
    },3000);

  } else {
    setTimeout(()=>{
    not.classList.remove("show");
    },3000);

  }

}
/*
btn.addEventListener("click",()=>{
	event.preventDefault();
	*/

           nettoyer.addEventListener('click',()=>{
                console.log("click")


	//3. on condittionne les donees
	const data = new FormData();
	data.append('id',id.value);

//envoie des donne a la page php
                    $.ajax({
                       url:'../controlleurs/save_e.php',
                       type:'post',
                       data:data,
                       contentType:false,
                       processData:false,
                       success:function(res){
                        const data=JSON.parse(res);
                        if (data.error != 1) {
                        	showNotification("🧭🧭 etat changer avec success ✔✔🎉",true);
                          
                        } else {
                        	showNotification("🧭🧭"+data.em+"🔥🔥",false);
                            
                        }
                       } 
                    });


            })
      


