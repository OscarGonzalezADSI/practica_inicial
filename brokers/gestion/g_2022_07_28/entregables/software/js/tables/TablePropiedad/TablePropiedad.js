class TablePropiedad extends NewTable
{
  title(table, thead, theadtr, data)
  {
    this.titleColumn(theadtr, "cedula");
    this.titleColumn(theadtr, "ciudad");
    this.titleColumn(theadtr, "barrio");
    this.titleColumn(theadtr, "direccion");
    this.titleColumn(theadtr, "fecha_registro");
    thead.append(theadtr);
    table.append(thead);
  }
}
