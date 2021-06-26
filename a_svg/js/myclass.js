
class Myclass{
	
    dom() {
	    var principal = this.principal;
	    var contenido = this.contenido;
	    var titulo = this.titulo;
	    var className = this.className;
	    
	    this.prin = document.getElementsByClassName(principal);
		this.cont = document.getElementsByClassName(contenido);
	    this.titu = document.getElementsByClassName(titulo);
		this.clas = document.getElementsByClassName(className);
		
		this.ball = document.getElementsByClassName("ball");
		this.el_red = document.getElementsByClassName("red"); 
		this.el_green = document.getElementsByClassName("green");
		this.el_yellow = document.getElementsByClassName("yellow");
		this.el_blue = document.getElementsByClassName("blue");
		
	    this.whatsapp = document.getElementsByClassName("whatsapp");
	    this.facebook = document.getElementsByClassName("facebook");
	    this.instagram = document.getElementsByClassName("instagram");
	    this.github = document.getElementsByClassName("github");
		
		this.obj = {
			"ball": this.ball,
			"principal": this.prin,
			"vista": {
				0: this.titu,
				1: this.cont
			},
			"color": {
				0:"#f00",
				1:"#0f0",
				2:"#00f",
				3:"#ff0"
			},
			"seleccion": {}
		}
		
		this.total = {
		    ... this.obj["vista"], 
		    2: this.obj["ball"]
		};
		
		this.job = this.obj["principal"];
		
	}
	
	menu(svg){
		document.getElementById("demo").innerHTML = svg;
	}
	
	agregarEventos(){
		var my = new MyClicks();
		this.agrEvRecorrer(this.el_red,"click",my.accion_rojo);
		this.agrEvRecorrer(this.el_green,"click",my.accion_verde);
		this.agrEvRecorrer(this.el_blue,"click",my.accion_azul);
		this.agrEvRecorrer(this.el_yellow,"click",my.accion_amarillo);
		this.agrEvRecorrer(this.whatsapp,"click",my.whatsapp);
		this.agrEvRecorrer(this.facebook,"click",my.facebook);
		this.agrEvRecorrer(this.instagram,"click",my.instagram);
		this.agrEvRecorrer(this.github,"click",my.github);
	}
	
	removerEventos(){
		var my = new MyClicks();
		this.remEvRecorrer(this.el_red,"click",my.accion_rojo);
		this.remEvRecorrer(this.el_green,"click",my.accion_verde);
		this.remEvRecorrer(this.el_blue,"click",my.accion_azul);
		this.remEvRecorrer(this.el_yellow,"click",my.accion_amarillo);
		this.remEvRecorrer(this.whatsapp,"click",my.whatsapp);
		this.remEvRecorrer(this.facebook,"click",my.facebook);
		this.remEvRecorrer(this.instagram,"click",my.instagram);
		this.remEvRecorrer(this.github,"click",my.github);
	}
	
	evento(className,i,cx,cy,color,time){
		this.className = className;
		this.i = i;
		this.cx = cx;
		this.cy = cy;
		this.color = color;
		this.time = time;
		this.dom();
		this.tempoCambiaPosicion();
	}

	desaparecer(time){
	    this.time = time;
		this.removerEventos();
		this.ocultarContenido();
		this.dom();
		this.tempoAgregarEventos();
	}
	
	bienvenida(principal,titulo,contenido,color,time){
		this.principal = principal;
		this.contenido = contenido;
		this.titulo = titulo;
		this.color = color;
		this.time = time;
		
		this.dom();
		this.tempoExpoContenido();
	}
	
	aparecer(principal,titulo,contenido,color,time){
		this.principal = principal;
		this.contenido = contenido;
		this.titulo = titulo;
		this.color = color;
		this.time = time;
	
		this.ballsEfects();
		this.dom();
		this.tempoExpoContenido();
	}
	
	tempoCambiaPosicion() {		
		var i = this.i;
		var cx = this.cx;
		var cy = this.cy;
		var color = this.color;	
		var time = this.time;
		
		var my = this;
		setTimeout(function(){
			my.cambiaPosicion(i,cx,cy,color);
		},time,"JavaScript");
	}
	
	tempoAgregarEventos() {
		var time = this.time;
		var my = this;
		setTimeout(function(){
			my.agregarEventos();
		},time,"JavaScript");
	}
	
	tempoExpoContenido() {
	    var time = this.time;
		var my = this;
		setTimeout(function(){
			my.expoContenido();
		},time,"JavaScript");
	}
	
	cambiaPosicion(i,cx,cy,color){
		this.clas[i].style.cx = cx;
		this.clas[i].style.cy = cy;
		this.clas[i].style.stroke = color;
	}
			
	expoContenido(){
		this.colorModal();
		this.mostrar();
		this.aparecerContenido();
	}
	
	agrEvRecorrer(obj,evento,accion){
		var tam = Object.keys(obj).length;
		for (let i=0; i< tam; i++){
			obj[i].addEventListener(evento, accion, false);
		}
	}
			
	remEvRecorrer(obj,evento,accion){
		var tam = Object.keys(obj).length;
		for (let i=0; i< tam; i++){
			obj[i].removeEventListener(evento, accion, false);
		}
	}
	
	ocultarContenido(){
		var total = this.total;
	
		var tam = Object.keys(total).length;
		for(let i=0; i< tam; i++){
			this.job = total[i];
			this.ocultar();
		}
	}
	
	aparecerContenido(){
		var vista = this.obj["vista"];
			
		var tam = Object.keys(vista).length;
		for(let i=0; i< tam; i++){
			this.job = vista[i];
			this.mostrar();
		}
	}
	
	ballsEfects(){
		var obj = this.obj;
		var color = this.color;
			
		var ball = obj["ball"];
		var seleccion = obj["seleccion"];
		var objcolor = obj["color"];
			
		var tam = Object.keys(ball).length;
		for(let i=0; i< tam; i++){
			seleccion[objcolor[i]] = ball[i];
		}
		seleccion[color].style.display="block";
	}
	
	ocultar(){
		var tam = Object.keys(this.job).length;
		for (let i=0; i< tam; i++){
			this.job[i].style.display="none";
		}	
	}
	
	mostrar(){
		var tam = Object.keys(this.job).length;
		for (let i=0; i< tam; i++){
			this.job[i].style.display="block";
		}	
	}
	
	colorModal(){
		var principal = this.obj["principal"];
		var color = this.color;
	
		var tam = Object.keys(principal).length;
		for (let i=0; i< tam; i++){
			principal[i].style.stroke = color;
		}
	}
}