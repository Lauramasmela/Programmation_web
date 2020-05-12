import * as actions from './actions.js';

//let monster; document.querySelector("#monster");
let actionbox; //= document.querySelector("#actionbox");
let status; //= document.querySelector("#status");
let b2; //= document.querySelector("#b2") ;
let b3; //= document.querySelector("#b3");
let b7; //= document.querySelector("#b7");
let b4;//= document.querySelector("#b4");
let b5; //= document.querySelector("#b5");
//let b6;= document.querySelector("#b6");

export function start(){
	return init(n,l,m,a);
}

export function showme(){
	alerte (`Nom: ${name} \nVie: ${life } \nArgent: ${money} \nReveillé ${awake}`);

	let b6 = document.querySelector("#b6");
	b6.addEventListener("click", showme);
}

let monster = document.querySelector("#monster");
monster.init('nil', 2, 1.0, true);



	


