function togglemenu(){
    document.getElementById('sidebar').classList.toggle('active');
}
function verif1(){
   n = document.getElementById("t1").value;
   if (/[دظ زوةى رؤءذط ك م ن ت ال ب ي س ش ج ح خ ه ع غ ف ق ث ص ض]/.test(n)==false)
    {
       alert("الرجاء التثبت من الاسم")
    }
}
function verif2(){
   p = document.getElementById("t2").value;
   if (/[دظزوةىرؤءذطكمنتالبيسشجحخهعغفقثصض]/.test(p)==false)
    {
       alert("الرجاء التثبت من اللقب")
    }
}

function verif4()
{
    mail= document.getElementById("t3").value; 
    if (/[دظ زوةى رؤءذط ك م ن ت ال ب ي س ش ج ح خ ه ع غ ف ق ث ص ض ][@gmail.com]/.test(mail)==false)
    {
        alert("الرجاء التثبت من البريد الالكتروني")
    }
}




function verif3(){
    tel= document.getElementById("t4").value; 
    if (/[0-9]/.test(tel)==false)
     {
      alert("الرجاء التثبت من رقم الهاتف")

     }
}







 
