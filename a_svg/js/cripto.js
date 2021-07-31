
async function digestMessage(message) {
  const msgUint8 = new TextEncoder('utf-8').encode(message);                    
  const hashBuffer = await crypto.subtle.digest('SHA-512', msgUint8);           
  const hashArray = Array.from(new Uint8Array(hashBuffer));                     
  const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
  return hashHex;
}

/*
const text = 'An obscure body in the S-K System, your majesty. The inhabitants refer to it as the planet Earth.';
digestMessage(text).then(hash => alert(hash));


/*
-------------------------
fuentes de investigacion:
-------------------------
https://developer.mozilla.org/es/docs/Web/API/SubtleCrypto/digest
https://docs.w3cub.com/dom/subtlecrypto/digest
*/