var usuario = [
    {
        "idUsuario": "administrador",
        "clave": "2704b63cad1a7df60dd2befe5bb2da7778f4ef08bd5b95683ebdd2ac9a67828b5ca52abf37698ee437fa5fbd9da39b23b97578585cc6cbd27bb2ea59b6358b69",
        "nombre": "oscar",
        "apellido": "gonzalez",
        "saldo": "500000",
        "rol":"admin"
    },
    {
        "idUsuario": "2",
        "clave": "2704b63cad1a7df60dd2befe5bb2da7778f4ef08bd5b95683ebdd2ac9a67828b5ca52abf37698ee437fa5fbd9da39b23b97578585cc6cbd27bb2ea59b6358b69",
        "nombre": "maria",
        "apellido": "gomez",
        "saldo": "500000",
        "rol":"usuario"
    }
]

const giros = [];

var prueba = new Giros();
var montoEnvio = 0;


function mysetParrafo(clave, form){
    const remitente = form.idUsuario.value
    const receptor = form.idReceptor.value
    const montoGiro = parseInt(montoEnvio)
    prueba.enviar(remitente, receptor, montoGiro, clave, form);
}

function myFunction(form) {
		const text = String(form.clave.value)
		digestMessage(text).then(hash => mysetParrafo(hash, form));
	return false;
}

function registro(form){
	const text = form.claveRegistro.value;
    digestMessage(text).then(hash => prueba.aRegistro(hash,form));
    return false;
}

function aLogin(clave, form){
    const remitente = form.dniLogin.value;
    prueba.login(remitente, clave, form);
}

function login(form){
	const text = form.claveLogin.value;
	digestMessage(text).then(hash => aLogin(hash,form));
	return false;
}

function aNumero(valorTexto){
		let rta = valorTexto;
		let aaa = rta.replace("EUR",'');
		let bbb = aaa.replace(/\./g, "");
		let ccc = bbb.replace(/,/,".")
		let ddd = parseFloat(ccc);
		return ddd;
}



window.addEventListener('DOMContentLoaded', (event) => {

var mon = document.getElementById("montoGiro");

function aTexto(){
	let rta = prueba.aTexto(mon.value);
	mon.value = rta;
	montoEnvio = aNumero(mon.value);
}

mon.addEventListener("mouseout", aTexto, false);

})