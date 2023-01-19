/********************** code de recher che javascript***************************/
if (document.querySelector("#searchc") != null) {
	//selection de l'element et aplication des evernements
	 document.querySelector("#searchc").onkeyup = function() {
	 	//recuperation de l(element chercher)
		var search=this.value.toLowerCase();
		//recuperation de tout les ligne du tableau ou recuperation des element du tableau
		var elements=document.querySelectorAll('#elementsc .elementc');
		//parcour du tableau dans le but de recuperer les ligne
		for(var i=0; i< elements.length;i++){
			//recuperation des donne de chaque celulle
			var datas=elements[i].querySelectorAll('.datac');
			var str='';
			//parcour dan le but de recuperer les elements des cellules	
			for (var j = 0; j <datas.length; j++) {
				//recuperation du text contenue dans chaque ligne
				str = str + datas[j].textContent +'';
			}
			//transformation en miniscule
			str=str.toLowerCase();
			//test si le mot a ete trouver
			if (str.indexOf(search)== -1) {
				//-1 sinifie element non trouve alors on cache l'element
				elements[i].classList.add('hide');
			}else{
				//si non on affiche la ligne
				elements[i].classList.remove('hide');
			}
		}
	}

}