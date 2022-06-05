function password(){
    var a = document.getElementById('pwd');
    if (a.type==="password"){
		a.type="text";
	}else{
		a.type="password";
	}

	var b = document.getElementById('pwd2');
    if (b.type==="password"){
		b.type="text";
	}else{
		b.type="password";
	}
}

