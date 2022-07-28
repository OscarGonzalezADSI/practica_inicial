class TablePago extends NewTable
{
  title(table, thead, theadtr, data)
  {
    this.titleColumn(theadtr, "id_pago");
    this.titleColumn(theadtr, "cedula");
    this.titleColumn(theadtr, "nombres");
    this.titleColumn(theadtr, "apellidos");
    this.titleColumn(theadtr, "celular");
    this.titleColumn(theadtr, "monto_pago");
    this.titleColumn(theadtr, "ciudad");
    this.titleColumn(theadtr, "barrio");
    this.titleColumn(theadtr, "direccion");
    this.titleColumn(theadtr, "fecha_registro");
    thead.append(theadtr);
    table.append(thead);
  }
}
