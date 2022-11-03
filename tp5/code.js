function verif(){
    nom=document.getElementById("n").value;
exp=/[a-zA-Z]/;
if (exp.text(nom)==false){alert("utilise les alphabets uniquement")}
}
function valid(){
    document.getElementById("p").value=document.getElementById("p").value.replace(/[^a-z]/,'');

}
function mail(){
    em=document.getElementById("m").value;
if (/[gmail.com$]/.test(em)==false)
{
    alert("mail invalide");
}
}
function num()
{
    nb=document.getElementById("b");
if((/[0-9]/&&length==8).test(nb)==false)
{alert("numero invalide ")}
}