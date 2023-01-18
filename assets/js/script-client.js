
const btn=document.querySelector("#submit");
const nom=document.querySelector("#nom");
const numero=document.querySelector("#numero");
const adress=document.querySelector("#adress");
const statut=document.querySelector("#statut");
const commentaire=document.querySelector("#commentaire");
const not=document.querySelector(".notification");
//fonction d'affichage de la notification
let showNotification= (message)=>{
	not.textContent=message;
	not.classList.add("show");
	setTimeout(()=>{
		not.classList.remove("show");
	},3000);
}
/*
btn.addEventListener("click",()=>{
	event.preventDefault();
	*/
$(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
	if (nom.value !='' && adress.value !=''&&
	 numero.value !='' && statut.value !='' && commentaire.value!='') {
	btn.style.backgroundColor='dodgerblue';


	//3. on condittionne les donees
	const data = new FormData();
	data.append('nom',nom.value);
	data.append('adress',adress.value);
	data.append('numero',numero.value);
	data.append('statut',statut.value);
	data.append('commentaire',commentaire.value);


//envoie des donne a la page php
                    $.ajax({
                       url:'../controlleurs/saveClient.php',
                       type:'post',
                       data:data,
                       contentType:false,
                       processData:false,
                       success:function(res){
                        const data=JSON.parse(res);
                        if (data.error != 1) {
                        	showNotification("🧭🧭 client enregistrer avec success ✔✔🎉");
                          
                        } else {
                        	showNotification("🧭🧭"+data.em+"🔥🔥");
                            
                        }
                       } 
                    });

nom.value ='';
adress.value='';
numero.value='';
statut.value='';
commentaire.value='';

} else {
		btn.style.backgroundColor='red';
		showNotification("🧭🧭veillez remplir tout les champs🔥🔥");
	}

            })
        });


