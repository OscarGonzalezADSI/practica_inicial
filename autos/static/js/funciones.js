function generate_table(data)
{
	for(let i=0; i<data.tarjetas.length; i++)
	{
	    const div = document.createElement("div");
		const tbl = document.createElement("table");
		const caption = document.createElement("caption");
		const tblBody = document.createElement("tbody");
		const titulo = data.tarjetas[i].titulo;
		const cellTextTitulo = document.createTextNode(titulo);
		
        div.className ="card";

		caption.appendChild(cellTextTitulo);
		tbl.appendChild(caption);

		for(let ii=0; ii<data.tarjetas[i].info.length; ii++)
		{
		    const row = document.createElement("tr");
			const cellLongitud = document.createElement("td");
			const cellSigla = document.createElement("td");
			const cellValor = document.createElement("td");
			const supInd = document.createElement("sup");
			
			const longitud = data.tarjetas[i].info[ii].longitud;
			const sigla = data.tarjetas[i].info[ii].sigla;
			const valor = data.tarjetas[i].info[ii].valor;
			const superIndice = data.tarjetas[i].info[ii].sup;
				
			const cellTextLongitud = document.createTextNode(longitud);
			const cellTextSigla = document.createTextNode(sigla);
			const cellTextValor = document.createTextNode(valor);
			const cellTextSupInd = document.createTextNode(superIndice);
			
			supInd.appendChild(cellTextSupInd);
				
			cellLongitud.appendChild(cellTextLongitud);
			cellSigla.appendChild(cellTextSigla);
			cellValor.appendChild(cellTextValor);
			supInd.appendChild(cellTextSupInd);
			cellValor.appendChild(supInd);
			
			row.appendChild(cellLongitud);
			row.appendChild(cellSigla);
			row.appendChild(cellValor);
		    tblBody.appendChild(row);
		}
		tbl.appendChild(tblBody);
		div.appendChild(tbl);
		document.body.appendChild(div);
	}
}

function generate_tablew(urlImages, titulo)
{
	const div = document.createElement("div");
	const tbl = document.createElement("table");
	const caption = document.createElement("caption");
	const tblBody = document.createElement("tbody");
	const row = document.createElement("tr");
	const td = document.createElement("td");
	const img = document.createElement("img");
	const cellTextCaption = document.createTextNode(titulo);
	
	div.className ="cardImages";

	caption.appendChild(cellTextCaption);
	tblBody.appendChild(caption);
	
	img.setAttribute("src", urlImages);
	img.setAttribute("width", "304");
	img.setAttribute("height", "228");
	img.setAttribute("alt", "The Pulpit Rock");	
	
	td.appendChild(img);	
	row.appendChild(td);
	tblBody.appendChild(row);
	
	tbl.appendChild(tblBody);
	div.appendChild(tbl);
	document.body.appendChild(div);
}
