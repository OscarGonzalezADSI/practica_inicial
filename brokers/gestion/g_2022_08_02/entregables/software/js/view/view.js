function viewArrendador(data)
{
	tableId = "arrendador";
	name = "Arrendadores";
	className = "customers";
	new TableArrendador(tableId, name, className, data);
}

function viewPerson(data)
{
	tableId = "person";
	name = "Personas";
	className = "customers";
	new TablePerson(tableId, name, className, data);
}

function viewArrendatario(data)
{
	tableId = "arrendatario";
	name = "Arrendatarios";
	className = "customers";
	new TableArrendatario(tableId, name, className, data);
}

function viewPropiedad(data)
{
	tableId = "propiedad";
	name = "Propiedades";
	className = "customers";
	new TablePropiedad(tableId, name, className, data);
}

function viewContrato(data)
{
	tableId = "contrato";
	name = "contratos";
	className = "customers";
	new TableContrato(tableId, name, className, data);
}

function viewContratosArrendador(data)
{
	tableId = "contratosArrendador";
	name = "Contratos como arrendador";
	className = "customers";
	new TableContrato(tableId, name, className, data);
}

function viewContratosArrendatario(data)
{
	tableId = "contratosArrendatario";
	name = "Contratos como arrendatario";
	className = "customers";
	new TableContrato(tableId, name, className, data);
}

function viewPago(data)
{
	tableId = "pago";
	name = "Pagos realizados por el cliente hasta la fecha";
	className = "customers";
	new TablePago(tableId, name, className, data);
}
