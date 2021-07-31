async function digestMessage(message) {
  const msgUint8 = new TextEncoder('utf-8').encode(message);                    
  const hashBuffer = await crypto.subtle.digest('SHA-512', msgUint8);           
  const hashArray = Array.from(new Uint8Array(hashBuffer));                     
  const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
  return hashHex;
}

function setParrafo(contenido){
    parrafo = document.getElementById("parrafo");
    parrafo.innerHTML = contenido;
}

function myFunction(form) {
	//clave = form.user.value+form.password.value+"...";
	clave = form.password.value;
	digestMessage(clave).then(hash => setParrafo(hash));
	return false;
}

/*

23f080a7a1d8a53205df180fa23109e6213d9398bfc4455de3e97717807abaf31c3b00c6293618f97fe8ec83bbdfcfe7fedc5f15f2bffe3276daff5f3a6c6907

*/