import {log, displayStatus} from './ui.js';

let monster = (function(){
	name = 'nihl';
 life = 20;
 money = 2.0;
 awake = true;

 return {
 	 get(){
	/*return shownme();	*/
	return 
	name, 
	life, 
	money, 
	awake		
	},	
 }

});

export function init(n, l, m, a){	
	name:n;
	life:l;
	money:m;
	awake:a;	
}

export function run(){

}

export function fight(){

}

export function work(){

}

export function eat(){

}


