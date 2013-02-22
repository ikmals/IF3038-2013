function addEvent(node, type, callback){
	if(node.addEventListener){
		node.addEventListener(type, function(e){
			callback(e, e.target);
			
		}, false);
	}
	else if(node.attachEvent){
		node.attachEvent('on' + type, function(e){
			callback(e, e.srcElement);
		});
	}
}


function shouldBeValidated(field){
	return (
		!(field.getAttribute('readonly') || field.readonly)	&&
		!(field.getAttribute('disabled') || field.disabled)	&&
		(field.getAttribute('pattern') || field.getAttribute('required'))
	); 
}


function instantValidation(field){
	if(shouldBeValidated(field)){
		var invalid = (
			(field.getAttribute('required') && !field.value) ||
			(field.getAttribute('pattern') && field.value && !new RegExp(field.getAttribute('pattern')).test(field.value))
		);

		if(!invalid && field.getAttribute('aria-invalid')){
			field.removeAttribute('aria-invalid');
		}
		else if(invalid && !field.getAttribute('aria-invalid')){
			field.setAttribute('aria-invalid', 'true');
		}
	}
}

var fields = [document.getElementsByTagName('input'), document.getElementsByTagName('textarea')];
for(var a = fields.length, i = 0; i < a; i ++){
	for(var b = fields[i].length, j = 0; j < b; j ++){
		addEvent(fields[i][j], 'change', function(e, target){
			instantValidation(target);
		});
	}
}

function displayResult()
{
	var x=document.getElementById("fileupld").name;
	alert(x);
}

function CheckFiles()
{
	var value = document.getElementById('filename').value.split('.');
	var lenghtValue = value.length;
	if(lenghtValue <= 1) alert("file undefined")
	else {
		if(value[lenghtValue-1].toLowerCase() == "jpeg"||
			value[lenghtValue-1].toLowerCase() == "jpg"||
			value[lenghtValue-1].toLowerCase() == "bmp") alert("file benar");
		else alert("file salah");
	}
}

function playPause()
{ 
	var myVideo=document.getElementById("video1"); 
	if (myVideo.paused) 
		myVideo.play(); 
	else 
		myVideo.pause(); 
} 

function checkUsername(){
	if(document.getElementById('username').value == document.getElementById('password').value){
		document.getElementById('register').setAttribute('disabled', 'true');
	}
	else{
		document.getElementById('register').removeAttribute('disabled');
	}
}

function checkPassword(){
	if(document.getElementById('password').value == document.getElementById('username').value ||
		document.getElementById('password').value == document.getElementById('email').value){
		document.getElementById('register').setAttribute('disabled', 'true');
	}
	else{
		document.getElementById('register').removeAttribute('disabled');
	}
}

function checkConfirmPassword(){
	if(document.getElementById('password').value != document.getElementById('confirmpassword').value){
		document.getElementById('register').setAttribute('disabled', 'true');
	}
	else{
		document.getElementById('register').removeAttribute('disabled');
	}
}

function checkDOB(){
	if(!document.getElementById('dob').getAttribute('aria-invalid')){
		document.getElementById('register').setAttribute('disabled', 'true');
	}
	else{
		document.getElementById('register').removeAttribute('disabled');
	}
}