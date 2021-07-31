class MyClicks{

	constructor(event) {
		if(!event){
			return false;
		}
	}
	
	accion_rojo(){
		myclass.evento("red",0,120,60,"#ff000080",500);
		myclass.evento("red",0,50,60,"#ff000080",1000);
		myclass.desaparecer(1000);
		myclass.aparecer("principal","tit_rojo","con_rojo","#f00",1000);
	}
	
	accion_verde(){
		myclass.evento("green",0,120,60,"#00ff0080",500);
		myclass.evento("green",0,50,120,"#00ff0080",1000);
		myclass.desaparecer(1000);
		myclass.aparecer("principal","tit_verde","con_verde","#0f0",1000);
	}
	
	accion_azul(){
		myclass.evento("blue",0,120,60,"#0000ff80",500);
		myclass.evento("blue",0,50,180,"#0000ff80",1000);
		myclass.desaparecer(1000);
		myclass.aparecer("principal","tit_azul","con_azul","#00f",1000);
	}
		
	accion_amarillo(){
		myclass.evento("yellow",0,120,60,"#ffff0080",500);
		myclass.evento("yellow",0,50,240,"#ffff0080",1000);
		myclass.desaparecer(1000);
		myclass.aparecer("principal","tit_amarillo","con_amarillo","#ff0",1000);
	}
		
	whatsapp(){
		var obj = document.getElementsByClassName("whatsapp");
		obj[0].style.width="70px";
		obj[0].style.height="70px";
		window.location="https://api.whatsapp.com/send?phone=573228858439&text=Hola%20Oscar,%20he%20visto%20tu%20perfil%20de%20Git%20Hub.";
	}
		
	facebook(){
		var obj = document.getElementsByClassName("facebook");
		obj[0].style.width="40px";
		obj[0].style.height="40px";
		window.location="https://www.facebook.com/oscar.gonzalez.7798";
	}
		
	instagram(){
		var obj = document.getElementsByClassName("instagram");
		obj[0].style.width="40px";
		obj[0].style.height="40px";
		window.location="https://www.instagram.com/oigonzalezp/";
	}
		
	github(){
		var obj = document.getElementsByClassName("github");
		obj[0].style.width="60px";
		obj[0].style.height="60px";
		window.location="https://github.com/OscarGonzalezADSI/";
	}
	
	click2(event) {
		var el222 = document.getElementById("puntero222");
		el222.style.boxShadow = "2px 2px 2px 2px #00000000";
		//window.location="https://es.m.wikipedia.org/wiki/HTML5";
		window.location="miPerfil.html";
	}
		
	click3(event) {
		var el333 = document.getElementById("puntero333");
		el333.style.boxShadow = "2px 2px 2px 2px #00000000";
		//window.location="https://es.m.wikipedia.org/wiki/Hoja_de_estilos_en_cascada";
		window.location="miPerfil.html";
	}
		
	click4(event) {
		var el444 = document.getElementById("puntero444");
		el444.style.boxShadow = "2px 2px 2px 2px #00000000";
		//window.location="https://es.m.wikipedia.org/wiki/JavaScript";
		window.location="estructura.html";
	}
		
	click5(event) {
		var el555 = document.getElementById("puntero555");
		el555.style.boxShadow = "2px 2px 2px 2px #00000000";
		window.location="https://es.m.wikipedia.org/wiki/PHP";
	}
		
	click6(event) {
		var el666 = document.getElementById("puntero666");
		el666.style.boxShadow = "2px 2px 2px 2px #00000000";
		window.location="https://es.m.wikipedia.org/wiki/MySQL";
	}
		
	click7(event) {
		var el777 = document.getElementById("puntero777");
		el777.style.boxShadow = "2px 2px 2px 2px #00000000";
		//window.location="https://es.m.wikipedia.org/wiki/Gr%C3%A1ficos_vectoriales_escalables";
	    //window.location="view.html";
	    window.location="proyectosvg/fibonacci.html";
	}
	
	moveTouch2(event) {
		var rta = new MyMove(event);
		rta.Touch2(event);
	}
	
	moveTouch3(event) {
		var rta = new MyMove(event);
		rta.Touch3(event);
	}
	
	moveTouch4(event) {
		var rta = new MyMove(event);
		rta.Touch4(event);
	}
	
	moveTouch5(event) {
		var rta = new MyMove(event);
		rta.Touch5(event);
	}
	
	moveTouch6(event) {
		var rta = new MyMove(event);
		rta.Touch6(event);
	}
	
	moveTouch7(event) {
		var rta = new MyMove(event);
		rta.Touch7(event);
	}
}