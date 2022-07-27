class TableProduct extends NewTable
{
  title(table, thead, theadtr, data)
  {
    this.titleColumn(theadtr, "id");
    this.titleColumn(theadtr, "product");
    this.titleColumn(theadtr, "cost");
    thead.append(theadtr);
    table.append(thead);
  }
}
