
import {log, displayStatus} from './ui.js';

let name;
let life;
let money;
let awake;



export function init(n, l, m, a){
	return 
		this.name=n;
	this.life=l;
	this.money=m;
	this.awake=a;	
}
export function get(){
	/*return shownme();	*/
	return this.name; 
	this.life; 
	this.money; 
	this.awake;
		
}
