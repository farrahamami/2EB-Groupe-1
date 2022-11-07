function togglemenu(){
	document.getElementById('sidebar').classList.toggle('active');
}
const inputs = document.querySelectorAll(".input");
function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}
inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
})
function verif1(){
	n = document.getElementById("t1").value;
	if (/[دظ زوةى رؤءذط ك م ن ت ال ب ي س ش ج ح خ ه ع غ ف ق ث ص ض]/.test(n)==false)
	 {
		alert("الرجاء التثبت من الاسم")
	 }
 }


