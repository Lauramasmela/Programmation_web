import * as actions from './actions.js';

export function log(message){
	let msn=message
	let actbox = document.getElementById("actionbox");
	let t= document.createTextNode(`message : ${msn}`);
	actbox.appendChild(t);
}

export function displayStatus(){

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
	ul.replaceChild(li1, ul.childNodes[0]);
	ul.replaceChild(li2, ul.childNodes[1]);
	ul.replaceChild(li3, ul.childNodes[2]);
	ul.replaceChild(li4, ul.childNodes[3]);

	fondBoiteMonstre();
	bordureBoiteMonstre()
}

export function fondBoiteMonstre(){

	let changeCouleurVie = document.getElementById("monster");
	
	if(actions.get().life < 5) {		
		changeCouleurVie.classList.remove("orange");
		changeCouleurVie.classList.add("rouge");
	}
	if(actions.get().life < 10 && actions.get().life > 5) {	
		changeCouleurVie.classList.remove("bleu");
		changeCouleurVie.classList.add("orange");
	}

	if(actions.get().life < 20 && actions.get().life > 10) {		
		changeCouleurVie.classList.remove("vert");
		changeCouleurVie.classList.add("bleu");
	}

	if(actions.get().life >= 20) {	
		changeCouleurVie.classList.add("vert");
	}
	
}

export function bordureBoiteMonstre(){
	let changeCouleurVie = document.getElementById("monster");

	if(actions.get().money < 10){
		changeCouleurVie.classList.remove("bordtrois");
		changeCouleurVie.classList.add("bordquatre");
		
	}
	if(actions.get().money < 20 && actions.get().money >= 10 ){
		changeCouleurVie.classList.remove("bordquatre");
		changeCouleurVie.classList.remove("borddeux");
		changeCouleurVie.classList.add("bordtrois");
		
	}
	if(actions.get().money < 30 && actions.get().money >= 20){
		changeCouleurVie.classList.remove("bordtrois");
		changeCouleurVie.classList.remove("bordeun");		
		changeCouleurVie.classList.add("borddeux");
	}
	if(actions.get().money < 40 && actions.get().money >= 30){	
		changeCouleurVie.classList.remove("borddeux");
		changeCouleurVie.classList.add("bordeun");
	}
	
}




