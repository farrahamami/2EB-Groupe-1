function verif1(){
    n = document.getElementById("t1").value;
    if (/[دظ زوةى رؤءذط ك م ن ت ال ب ي س ش ج ح خ ه ع غ ف ق ث ص ض]/.test(n)==false)
     {
        alert(" الرجاء التثبت من الاسم و اللقب")
     }
 }
 function verifmail(){
    n = document.getElementById("mail").value;
    if (/[@gmail.com$]/.test(n)==false)
     {
        alert(" @gmail.com الرجاء التثبت من انه  ينتهي ")
 }
}

function verifnum(){
    tel= document.getElementById("num").value; 
    if (/[0-9]/.test(tel)==false)
     {
      alert("الرجاء التثبت من رقم الهاتف")

     }
    }
