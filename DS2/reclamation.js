function togglemenu(){
    document.getElementById('sidebar').classList.toggle('active');
}


function verif1(){
   n = document.getElementById("t1").value;
   if (/[azertyuiopqsdfghjklmwxcvbn]/.test(n)==false)
    {
       alert("verifer nom")
    }
}


function verif3()
{
    p= document.getElementById("t3").value; 
    if (/[0-9]/.test(p)==false)
    {
        alert("verifer numero telephone")
    }
}