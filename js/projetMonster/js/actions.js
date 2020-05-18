import {log, displayStatus} from './ui.js';

let name = 'nihl';
let life = 20;
let money = 2.0;
let awake = true;
let interval;


export function get(){
	return {name, life, money, awake};		
} 

export function init(n, l, m, estAwake){	
	name=n;
	life=l;
	money=m;
	awake=estAwake;
}

export function showme() {
	alert(`Nom: ${name} \nVie: ${life} \nArgent: ${money} \nReveillé: ${awake}`);
}

export function run(){
	if(awake==true){	
		retireVie(1);	
		displayStatus();	
	}

}

export function fight(){
	if(awake){		
		retireVie(3);
		displayStatus();
	}
}

export function work(){
	if(awake) {
		retireVie(1);	
		money = money + 2;
		displayStatus();
	}
}

export function eat(){
	if(awake){
		if(aAssezArgent(3)){
			retireVie(-2);
			money=money -3;
		}else{
			log("il a pas assez d'argent");
		}
		displayStatus();
	}	
}

export function estVivant(){
	return life > 0;
}

export function aAssezArgent(val){
	return money >= val;
}

export function displayMort(){
	if(life<=0){
		log('le monstre est mort');
	}	
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

export function sleep(){
	if(awake){
		awake=false;
		displayStatus();
		setTimeout(reveil, 10000);
	}		
}

export function reveil() {
	awake=true;
	retireVie(-1);
	displayStatus();
}

export function actionsHasard(){
	let entier = Math.floor(Math.random() * Math.floor(4));
	switch (entier) {
		case 0: run();
		break;
		case 1: fight();
		break;
		case 2: sleep();
		break;
		case 3: eat();
		break;
		case 4: work();
		break;
	}
}

export function tuerMonstre(){
	life=0;
	displayStatus();
}

export function donnerVieMonstre(){
	life=40;
	money=100;
	awake=true;
	displayStatus();	
}









