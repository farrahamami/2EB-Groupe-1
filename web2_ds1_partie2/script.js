function clkhere1()
 {
     let nom=document.getElementById("pseudo").value;
     let mdp=document.getElementById("mdp").value;

     if(!nom || !mdp){alert('Il y a quelque champ est vide , remplir tout les données')}
     if(mdp<8){alert('Le mot de passe doit etre au moin 8 caractère ')}
    
 }


 function clkhere2(){
    let pseudoI=document.getElementById("pseudoI").value;
    let mdpI=document.getElementById("mdpI").value;
     let nomI=document.getElementById("nomI").value;
     let prenomI=document.getElementById("prenomI").value;
     let emailI=document.getElementById("emailI").value;
     let civiliteI=document.getElementById("civiliteI").value;
     let villeI=document.getElementById("villeI").value;
     let code_postalI=document.getElementById("code_postalI").value;
     let adresseI=document.getElementById("adresseI").value;
  if(!pseudoI ||!mdpI||!nameI || !prenomI|| !emailI || !civiliteI || !villeI || !code_postalI || !adresseI){alert('Il y a quelque champ est vide , remplir tout les données')}
     else if(passI<8 || emailI.includes('@')==false){alert('Le mot de passe doit etre au moin 8 caractère ou email doit contient @ ')}
     else{alert('Data inserted successfully')}
 }
 function clkhere5()
 {

     let titre=document.getElementById("titre").value;
     let descriptionn=document.getElementById("descriptionn").value;
     let photo=document.getElementById("photo").value;
     let prix=document.getElementById("prix").value;

    

     if(!referance || !categorie ){alert('impsible ')}
     else{alert('data insered ')}
 }