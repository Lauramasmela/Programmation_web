import {log, displayStatus} from './ui.js';


let name = 'nihl';
let life = 20;
let money = 2.0;
let awake = true;


export function get(){
	return {name, life, money, awake};		
} 

export function init(n, l, m, estAwake){	
	name=n;
	life=l;
	money=m;
	awake=estAwake;
	console.log("init(nlm)")	
}
/*
export function showme() {
    alert(`Nom: ${name} \nVie: ${life} \nArgent: ${money} \nReveillé: ${awake}`);
}
*/

export function showme() {
    alert(`Nom: ${name} \nVie: ${life} \nArgent: ${money} \nReveillé: ${awake}`);
}

export function run(){
	console.log("run run");
	retireVie(1);
	displayStatus();
}

export function fight(){
	console.log("fight!");
	retireVie(3);
	displayStatus();					
}

export function work(){
	console.log("work!");
	retireVie(1);	
	money = money + 2;
	displayStatus();	
}

export function eat(){
	console.log("eat!");
	if(aAssezArgent(3)){
		retireVie(-2);
		money=money -3;
	}else{
		log("il a pas assez d'argent");
	}
	displayStatus();		
}

export function estVivant(){
	return life > 0;
}

export function aAssezArgent(val){
	return money >= val;
}

export function displayMort(){
	log('le monstre est mort');
}

export function retireVie(val){
	if(estVivant()){
		life = life - val;
		if(!estVivant()){
			life = 0;
		}else{
			displayMort();
		}
	}else{
		displayMort();
	}
}






