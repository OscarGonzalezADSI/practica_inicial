class TableArrendatario extends NewTable
{
  title(table, thead, theadtr, data)
  {
    this.titleColumn(theadtr, "nombres");
    this.titleColumn(theadtr, "apellidos");
    this.titleColumn(theadtr, "cedula");
    this.titleColumn(theadtr, "celular");
    this.titleColumn(theadtr, "direccion");
    this.titleColumn(theadtr, "reg_peronsa");
    this.titleColumn(theadtr, "reg_arrendador");
    thead.append(theadtr);
    table.append(thead);
  }
}
