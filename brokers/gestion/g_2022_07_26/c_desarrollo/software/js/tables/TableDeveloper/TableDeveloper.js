class TableDeveloper extends NewTable
{
  title(table, thead, theadtr, data)
  {
    this.titleColumn(theadtr, "developer");
    this.titleColumn(theadtr, "phone");
    thead.append(theadtr);
    table.append(thead);
  }
}
