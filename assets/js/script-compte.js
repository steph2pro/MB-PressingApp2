
const btn=document.querySelector(".mon-button");
const id=document.querySelector("#id");
const nom=document.querySelector("#nom");
const prenom=document.querySelector("#prenom");
const password=document.querySelector("#password");
const adress=document.querySelector("#adress");
const age=document.querySelector("#age");
const numero=document.querySelector("#numero");
const poste=document.querySelector("#poste");
const statut=document.querySelector("#statut");
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
    window.location.href="../vues/compte.php";
    },6000);

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
	if (nom.value !='' && prenom.value !='' && password.value !='' && adress.value !='' && age.value !='' &&
	 numero.value !='' && poste.value !='' && statut.value!='' ) {
	btn.style.backgroundColor='dodgerblue';


	//3. on condittionne les donees
	const data = new FormData();
  data.append('id',id.value);
	data.append('nom',nom.value);
	data.append('prenom',prenom.value);
	data.append('password',password.value);
	data.append('adress',adress.value);
	data.append('age',age.value);
	data.append('numero',numero.value);
	data.append('poste',poste.value);
	data.append('statut',statut.value);



                
                let img=$("#profile")[0].files;
                //verifiation si l'image a ete selectionerlet form_data=new FormData();
                if (img.length>0) {
                    data.append('profile',img[0]);
                    $.ajax({
                       url:'../controlleurs/updateCompte.php',
                       type:'post',
                       data:data,
                       contentType:false,
                       processData:false,
                       success:function(res){
                        const data=JSON.parse(res);
                        if (data.error != 1) {
                        	showNotification("🧭🧭compte modifier avec success 🔥🔥 deconnectez vous et reconectez vous pour voir les modifications",true);
                           let path="../assets/images/profiles/"+data.src;
                           $("#preImg").attr("src",path);
                           $("#preImg").fadeOut(1).fadeIn(1000);
                           nom.value ='';
                           prenom.value ='';
                           password.value ='';
                           adress.value ='';
                           age.value ='' ;
                           numero.value ='';
                           poste.value ='';
                           statut.value='';
                           commentaire.value='';
                        } else {
                        	showNotification("🧭🧭"+data.em+"🔥🔥",false);
                            
                        }
                       } 
                    });
                } else {
                        	showNotification("🧭🧭 veuillez choisir le meme ou un autre profile 🔥🔥",false);
                    
                }
} else {
		btn.style.backgroundColor='red';
		showNotification("🧭🧭veillez remplir tout les champs🔥🔥",false);
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
	
	

