class Giro{
    constructor(remitente, receptor, clave, montoGiro){
        this.remitente = remitente;
        this.receptor = receptor;
        this.montoGiro = montoGiro;
        this.form = form;
        if(this.validaTipoDato()){
            if(this.getRemitente()){
            	if(this.getEmisor()){
            	    if(this.clave == clave){
            			this.cambioSaldo()
            			this.registroGiro()
            		}else{
            		    console.log("clave incorrecta")
            		}
            	}else{
            		console.log("Usuario receptor no identificado.")
            	}
            }else{
                console.log("Esta cometiendo un acto ilegal.")
            }
        }else{
            console.log("Esta usando tipos de datos no admitidos")
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
		return true;
	}
	
	getRemitente(){
		for(let i=0; usuario.length > i; i++){
			if(usuario[i]["idUsuario"] == this.remitente){
				this.llaveRemitente = i
				this.clave = usuario[i]["clave"]
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
    	let tam = giros.length
		giros[tam] = {
			"idGiro": "1",
			"receptor": usuario[this.llaveRemitente]["idUsuario"],
			"remitente": usuario[this.llaveReceptor]["idUsuario"],
			"saldoRemitente": usuario[this.llaveRemitente]["saldo"],
			"saldoReceptor": usuario[this.llaveReceptor]["saldo"],
			"fecha": new Date()
		}

		form.saldo.value = usuario[tam]["saldo"];
		form.nombre.value = usuario[tam]["nombre"];
		form.apellido.value = usuario[tam]["apellido"];
	}
}