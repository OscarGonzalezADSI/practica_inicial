class Giros{
    constructor(){
        var nombre = document.getElementById("nombre");
        var apellido = document.getElementById("apellido");
        var nombreReceptor = document.getElementById("nombreReceptor");
        var apellidoReceptor = document.getElementById("apellidoReceptor");
        var idGiro = document.getElementById("idGiro");
        var receptor = document.getElementById("receptor");
        var remitente = document.getElementById("remitente");
        var montoRegistrado = document.getElementById("montoRegistrado");
        var fecha = document.getElementById("fecha");
    }
    
    login(remitente, clave, form){
    	this.remitente = remitente;
    	this.form = form;
    	if(this.validaTipoDatoLogin()){
            if(this.getRemitente()){
            	
            	var miLogin = document.getElementById("login");
                var miRegistro = document.getElementById("registro");
                var miformulario = document.getElementById("miformulario");
                var salir = document.getElementById("salir");
                
            	var miRol = document.getElementById("miRol");
            	var miUsuario = document.getElementById("miUsuario");
            	var miNombre = document.getElementById("miNombre");
            	var miApellido = document.getElementById("miApellido");
            	var miSaldo = document.getElementById("miSaldo");
            	
            	
                if(this.miClave == clave){
                
                    miRol.value = this.miRol;
                    miUsuario.value = this.miUsuario;
                    miNombre.value = this.miNombre;
                    miApellido.value = this.miApellido;
                    miSaldo.value = this.aTexto(this.miSaldo);
                	if(this.miRol === "admin"){
                	    miLogin.setAttribute("style","display:none;");
                		miRegistro.setAttribute("style","display:block;");
                		miformulario.setAttribute("style","display:block;");
                	    salir.setAttribute("style","display:block;");
                	}else if(this.miRol === "usuario"){
                		miLogin.setAttribute("style","display:none;");
                		miRegistro.setAttribute("style","display:none;");
                		miformulario.setAttribute("style","display:block;");
                		salir.setAttribute("style","display:block;");
                	}
                	document.getElementById("perfil").setAttribute("style","display:block;");
                }else{
                	alert("clave incorrecta.");
                	miLogin.setAttribute("style","display:block;");
                    formulario.setAttribute("style","display:none;");
                	miformulario.setAttribute("style","display:none;");
                }
            }else{
                alert("usuario no encontrado.");
            }
        }else{
        	alert("error")
        }
    }
    
    salir(){
    	this.remitente = "";
    	this.receptor = "";
    	this.miClave = "";
    	this.montoGiro = 0;
    	this.miRol = "";
    	var miLogin = document.getElementById("login");
    	var miRegistro = document.getElementById("registro");
    	var miformulario = document.getElementById("miformulario");
    	var salir = document.getElementById("salir");
    	
    	var miRol = document.getElementById("miRol");
    	var dniLogin = document.getElementById("dniLogin");
    	var claveLogin = document.getElementById("claveLogin");
    	
    	miRol.innerHTML = "";
    	dniLogin.value = "";
    	claveLogin.value = "";
    	
    	miLogin.setAttribute("style","display:block;");
    	miRegistro.setAttribute("style","display:none;");
    	miformulario.setAttribute("style","display:none;");
    	salir.setAttribute("style","display:none;");
    	
    	document.getElementById("perfil").setAttribute("style","display:none;")
    	document.getElementById("recibo").setAttribute("style","display:none;")
    }
    
    enviar(remitente, receptor, montoGiro, clave, form){
        this.receptor = receptor;
        this.montoGiro = montoGiro;
        this.form = form;
        if(this.validaTipoDato()){
            if(remitente !== ""){
            	if(this.remitente === remitente){
                	if(this.remitente !== this.receptor){
            	    	if(this.getRemitente()){
            		    	if(this.getEmisor()){
            	    			if(this.miClave == clave){
            	 	        		if(this.montoGiro > 0 && this.montoGiro <= usuario[this.llaveRemitente]["saldo"] ){
            	 	        			if(usuario[this.llaveRemitente]["saldo"] > 0){
            				    			this.cambioSaldo()
            		 	    				this.registroGiro()
            		 	    				window.location="#recibo";
            		 	    				
            		 	    			}else{
            		 	    	    		alert("saldo insuficiente.")
            		 	    			}
            						}else{
            				    		alert("monto no permitido.")
            						}
            					}else{
            			    		alert("clave incorrecta.")
            					}
            				}else{
         		   				alert("Usuario receptor no identificado.")
            				}
            			}else{
            	    		alert("Esta cometiendo un acto ilegal.")
            			}
            		}else{
                		alert("La auto-consignación es ilegal.")
            		}
        		}else{
            		alert("Credenciales incorrectas.")
        		}
    		}else{
    			alert("Por favor, debe idenficarse")
    		}
    	}else{
    		alert("Esta usando tipos de datos no admitidos")
    	}
    }
    
	validaTipoDato(){
		if(typeof this.remitente !== 'string'){
			return false;
		}
		if(typeof this.receptor !== 'string'){
			return false;
		}
		if(typeof this.montoGiro !== 'number'){
			return false;
		}
		if(typeof this.montoGiro === NaN){
	     	return false;
		}
		return true;
	}
	
	validaTipoDatoLogin(){
		if(typeof this.remitente !== 'string'){
			return false;
		}
		return true;
	}
	
	valGetRemitente(formRemitente){
		for(let i=0; usuario.length > i; i++){
			if(usuario[i]["idUsuario"] == formRemitente){
				this.llaveRemitente = i
				this.clave = usuario[i]["clave"]
				return true
			}
		}
		return false;
	}
	
	getRemitente(){
		for(let i=0; usuario.length > i; i++){
			if(usuario[i]["idUsuario"] == this.remitente){
				this.llaveRemitente = i
				this.miUsuario = usuario[i]["idUsuario"]
				this.miClave = usuario[i]["clave"]
				this.miNombre = usuario[i]["nombre"]
				this.miApellido = usuario[i]["apellido"]
				this.miSaldo = usuario[i]["saldo"]
				this.miRol = usuario[i]["rol"]
				return true
			}
		}
		return false;
	}
	
	getEmisor(){
		for(let i=0; usuario.length > i; i++){
			if(usuario[i]["idUsuario"] == this.receptor){
				this.llaveReceptor = i
				return true
			}
		}
		return false;
	}
	
	cambioSaldo(){
		let saldoRemitente = parseInt(usuario[this.llaveRemitente]["saldo"])
		let saldoReceptor = parseInt(usuario[this.llaveReceptor]["saldo"])
	
		saldoRemitente -= this.montoGiro
		saldoReceptor += this.montoGiro
	
		usuario[this.llaveRemitente]["saldo"] = String(saldoRemitente)
		usuario[this.llaveReceptor]["saldo"] = String(saldoReceptor)
	}
	
    registroGiro(){
    	var tam = giros.length;
		giros[tam] = {
			"idGiro": String(BigInt(tam+1)),
			"remitente": usuario[this.llaveRemitente]["idUsuario"],
			"receptor": usuario[this.llaveReceptor]["idUsuario"],
			"montoGiro": String(this.montoGiro),
			"saldoRemitente": usuario[this.llaveRemitente]["saldo"],
			"saldoReceptor": usuario[this.llaveReceptor]["saldo"],
			"fecha": new Date()
		}
		
		nombre.value = usuario[this.llaveRemitente]["nombre"];
		apellido.value = usuario[this.llaveRemitente]["apellido"];
		nombreReceptor.value = usuario[this.llaveReceptor]["nombre"];
		apellidoReceptor.value = usuario[this.llaveReceptor]["apellido"];
		idGiro.value = giros[tam]["idGiro"];
		receptor.value = giros[tam]["receptor"];
		remitente.value = giros[tam]["remitente"];
		montoRegistrado.value = this.aTexto(giros[tam]["montoGiro"]);
		fecha.value = giros[tam]["fecha"];
		
		document.getElementById("miSaldo").value = this.aTexto(giros[tam]["saldoRemitente"]);
		
		document.getElementById("idUsuario").value = "";
		document.getElementById("clave").value = "";
		document.getElementById("idReceptor").value = "";
		document.getElementById("montoGiro").value = "";
		document.getElementById("registro").setAttribute("style","display:none;");
		document.getElementById("recibo").setAttribute("style","display:block;");
	}
	
	aRegistro(clave,form){
		if(this.miRol === "admin"){
			var tam = usuario.length;
			usuario[tam] = {
				"idUsuario": form.dniRegistro.value,
				"clave": clave,
				"nombre": form.nombreRegistro.value,
				"apellido": form.apellidoRegistro.value,
				"saldo": form.saldoRegistro.value,
				"rol": form.rolRegistro.value,
			}
			form.dniRegistro.value = "";
			form.claveRegistro.value = "";
			form.nombreRegistro.value = "";
			form.apellidoRegistro.value = "";
			form.saldoRegistro.value = 0;
			form.rolRegistro.value = "usuario";
			alert("Usuario registrado satisfactoriamente.");
		}else{
		    form.dniRegistro.value = "";
		    form.claveRegistro.value = "";
		    form.nombreRegistro.value = "";
		    form.apellidoRegistro.value = "";
		    form.saldoRegistro.value = "";
		    alert("Usted no está autorizado para hacer esta acción.");
		}
	}
	
	aTexto(valor){
		var miSaldo = document.getElementById("miSaldo");
	
		let nroTransformado = new Number(valor);
		let moneda = {
			style: "currency",
			currency: "EUR"
		}
		return nroTransformado.toLocaleString("es-CO", moneda);
	}
	
}