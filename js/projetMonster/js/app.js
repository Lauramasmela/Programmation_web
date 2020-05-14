import * as actions from './actions.js';
import * as ui from './ui.js';

let monster;// document.querySelector("#monster");
let actionbox; //= document.querySelector("#actionbox");
let status; //= document.querySelector("#status");
let b2; //= document.querySelector("#b2") ;
let b3; //= document.querySelector("#b3");
let b7; //= document.querySelector("#b7");
let b4;//= document.querySelector("#b4");
let b5; //= document.querySelector("#b5");
let b6;//= document.querySelector("#b6");

export function start(){
	console.log("c'est la fonction start()");
	actions.init('NayroQuintana', 2, 3.50, false);
	ui.displayStatus();
	enregistrementHandler();

}


export function enregistrementHandler(){
	b6 = document.querySelector("#b6");
	b2 = document.querySelector("#b2");
	b3 = document.querySelector("#b3");
	b7 = document.querySelector("#b7");
	b5 = document.querySelector("#b5");
	b5.addEventListener("click", actions.eat);
	b7.addEventListener("click", actions.work);
	b3.addEventListener("click", actions.fight);
	b2.addEventListener("click", actions.run);
	b6.addEventListener("click", actions.showme);
}








