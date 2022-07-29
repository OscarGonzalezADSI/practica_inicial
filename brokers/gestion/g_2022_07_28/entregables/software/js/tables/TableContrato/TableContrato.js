class TableContrato extends NewTable
{
  title(table, thead, theadtr, data)
  {
    this.titleColumn(theadtr, "id_contrato");
    this.titleColumn(theadtr, "cedula_arrendador");
    this.titleColumn(theadtr, "cedula_arrendatario");
    this.titleColumn(theadtr, "ciudad");
    this.titleColumn(theadtr, "barrio");
    this.titleColumn(theadtr, "direccion");
    thead.append(theadtr);
    table.append(thead);
  }
}
