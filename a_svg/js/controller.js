var myclass = new Myclass();
var mybuttons = new Buttons();

function init() {
        
    var btn = new Buttons();
    var my = new MyClicks(event);
    
	var el2 = document.getElementById("puntero2");
	var el3 = document.getElementById("puntero3");
	var el4 = document.getElementById("puntero4");
	var el5 = document.getElementById("puntero5");
	var el6 = document.getElementById("puntero6");
	var el7 = document.getElementById("puntero7");
		
	el2.ontouchmove = my.moveTouch2;
	el5.ontouchmove = my.moveTouch5;
	el3.ontouchmove = my.moveTouch3;
	el6.ontouchmove = my.moveTouch6;
	el4.ontouchmove = my.moveTouch4;
	el7.ontouchmove = my.moveTouch7;
		
	el2.onclick = my.click2;
	el3.onclick = my.click3;
	el4.onclick = my.click4;
	el5.onclick = my.click5;
	el6.onclick = my.click6;
	el7.onclick = my.click7;
}

function accion_bienvenida(){
	myclass.bienvenida("principal","tit_bien","con_bien","#fff",500);
}

document.addEventListener("DOMContentLoaded",function(event){
	myclass.menu(svg);
	myclass.dom();
	accion_bienvenida();
	myclass.agregarEventos();
	mybuttons.tempoAddEvents();
});