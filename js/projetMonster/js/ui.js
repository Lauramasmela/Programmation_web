
export function log(message){
	let msn=message
	let actbox = document.querySelector("#actionbox");
	let t= document.createTextNode(`message : ${msn}`);
	actbox.appendChild(t);
}

export function displayStatus(){
	let ul = document.querySelector("ul#status");
	let li = document.querySelector("li");
	alert(li);
}