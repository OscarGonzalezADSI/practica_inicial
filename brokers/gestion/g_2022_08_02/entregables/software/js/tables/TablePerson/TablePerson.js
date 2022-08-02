class TablePerson extends NewTable
{
  title(table, thead, theadtr, data)
  {
    this.titleColumn(theadtr, "nombres");
    this.titleColumn(theadtr, "apellidos");
    this.titleColumn(theadtr, "correo");
    this.titleColumn(theadtr, "cedula");
    this.titleColumn(theadtr, "celular");
    this.titleColumn(theadtr, "direccion");
    this.titleColumn(theadtr, "fecha_registro");
    thead.append(theadtr);
    table.append(thead);
  }
}
