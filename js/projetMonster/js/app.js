import * as actions from './actions.js';
import * as ui from './ui.js';

let monster;
let actionbox; 
let status; 
let b2; 
let b3; 
let b7; 
let b4;
let b5; 
let b6;
let b1;
let k;

export function start(){
	
	actions.init('NayroQuintana', 50, 50, true);
	setInterval(actions.actionsHasard, 2000); 
	ui.displayStatus();
	enregistrementHandler();
	ui.fondBoiteMonstre();
	ui.bordureBoiteMonstre();
}


export function enregistrementHandler(){
	b6 = document.querySelector("#b6");
	b2 = document.querySelector("#b2");
	b3 = document.querySelector("#b3");
	b7 = document.querySelector("#b7");
	b5 = document.querySelector("#b5");
	b4 = document.querySelector("#b4");
	b1 = document.querySelector("#b1");
	k = document.querySelector("#k");

	
	k.addEventListener("click", actions.tuerMonstre);
	b1.addEventListener("click", actions.donnerVieMonstre);
	b4.addEventListener("click", actions.sleep);
	b5.addEventListener("click", actions.eat);
	b7.addEventListener("click", actions.work);
	b3.addEventListener("click", actions.fight);
	b2.addEventListener("click", actions.run);
	b6.addEventListener("click", actions.showme);
}








