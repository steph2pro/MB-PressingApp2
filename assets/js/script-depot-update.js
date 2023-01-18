
const btn=document.querySelector(".mon-button");
const proprietaire=document.querySelector("#proprietaire");
const id=document.querySelector("#id");
const marque=document.querySelector("#marque");
const style=document.querySelector("#style");
const couleur=document.querySelector("#couleur");
const qualite=document.querySelector("#qualite");
const quantite=document.querySelector("#quantite");
const anormalie=document.querySelector("#anormalie");
const prix=document.querySelector("#prix");
const prixT=document.querySelector("#prixT");
const description=document.querySelector("#description");
const not=document.querySelector(".notification");
const prof=document.querySelector("#preImg");
const pf=document.querySelector("#profile");
//fonction de recharge de l'image
	prof.addEventListener('mouseover',()=>{
		
		
			 let form_data=new FormData();
                let img=$("#profile")[0].files;
                //verifiation si l'image a ete selectioner
                if (img.length>0) {
                    form_data.append('profile',img[0]);
                    $.ajax({
                       url:'../controlleurs/load_img.php',
                       type:'post',
                       data:form_data,
                       contentType:false,
                       processData:false,
                       success:function(res){
                       	console.log(res);
                       	/**/
                        const data=JSON.parse(res);
                        if (data.error != 1) {
                           let path="../assets/images/profiles/prof-imp/"+data.src;
                           $("#preImg").attr("src",path);
                           $("#preImg").fadeOut(1).fadeIn(1000);
                          
                        } else {
                            showNotification("🧭🧭"+data.em+"🔥🔥");
                        }
                       } 
                    });
                } else {
                    console.log('choisissez une image a enregistrer');
                }
	});
//fonction d'affichage de la notification
let showNotification= (message,opt)=>{
  not.textContent=message;
  not.classList.add("show");
  if (opt==true) {
    setTimeout(()=>{
    not.classList.remove("show");
    window.location.href="../vues/vertement_plus.php";
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
$(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
	if (style.value !='' && marque.value !='' && qualite.value !='' && quantite.value !='' &&
	 couleur.value !='' && anormalie.value !='' && prix.value!='' && description.value!='') {
	btn.style.backgroundColor='dodgerblue';


	//3. on condittionne les donees
	const data = new FormData();
  data.append('proprietaire',proprietaire.value);
	data.append('id',id.value);
	data.append('marque',marque.value);
  data.append('style',style.value);
	data.append('qualite',qualite.value);
	data.append('quantite',quantite.value);
	data.append('couleur',couleur.value);
	data.append('anormalie',anormalie.value);
	data.append('prix',prix.value);
	data.append('description',description.value);



                
                let img=$("#profile")[0].files;
                //verifiation si l'image a ete selectionerlet form_data=new FormData();
                if (img.length>0) {
                    data.append('profile',img[0]);
                    $.ajax({
                       url:'../controlleurs/update_d.php',
                       type:'post',
                       data:data,
                       contentType:false,
                       processData:false,
                       success:function(res){
                        const data=JSON.parse(res);
                        if (data.error != 1) {
                        	showNotification("🧭🧭 depot modiffier avec success 🔥🔥",true);
                           let path="../assets/images/depot/"+data.src;
                           $("#preImg").attr("src",path);
                           $("#preImg").fadeOut(1).fadeIn(1000);
                        } else {
                        	showNotification("🧭🧭"+data.em+"🔥🔥",false);
                            
                        }
                       } 
                    });
                } else {
                        	showNotification("🧭🧭 veuillez choisir une autre image 🔥🔥",false);
                    
                }
} else {
		btn.style.backgroundColor='red';
		showNotification("🧭🧭veillez remplir tout les champs🔥🔥");
	}

            })
        });



		
/*requeteAjax.onload = function(){
		console.log(requeteAjax);
		const resultat = JSON.parse(requeteAjax.response);
		console.log(resultat);
		if (resultat.status=="success") {
			showNotification("🧭🧭utilisateur creer avec success🔥🔥");

		}else{
			showNotification("🧭🧭l'utilisateur n'as pas pu etre creer🔥🔥");
			
		}
		requeteAjax.send();
		}
		requeteAjax.close();});*/
	
	

