import * as actions from './actions.js';

export function log(message){
	let msn=message
	let actbox = document.getElementById("actionbox");
	let t= document.createTextNode(`message : ${msn}`);
	actbox.appendChild(t);
}

export function displayStatus(){
	console.log("hola cabrones! - displayStatus");
	console.log(actions.get().money);

	let li1 = document.createElement("li");
	let mNom= document.createTextNode(`nom: `+ actions.get().name);
	li1.appendChild(mNom);
	let li2 = document.createElement("li");
	let mlife= document.createTextNode(`life: `+ actions.get().life);
	li2.appendChild(mlife);
	let li3 = document.createElement("li");
	let mMoney= document.createTextNode(`money: `+ actions.get().money);
	li3.appendChild(mMoney);
	let li4 = document.createElement("li");
	let mAwake= document.createTextNode(`Awake: `+ actions.get().awake);
	li4.appendChild(mAwake);

	let ul = document.getElementById("status");
	console.log(document.getElementById("status"));
	ul.replaceChild(li1, ul.childNodes[0]);
	ul.replaceChild(li2, ul.childNodes[1]);
	ul.replaceChild(li3, ul.childNodes[2]);
	ul.replaceChild(li4, ul.childNodes[3]);
}