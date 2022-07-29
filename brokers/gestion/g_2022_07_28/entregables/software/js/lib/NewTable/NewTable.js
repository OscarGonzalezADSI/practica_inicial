class NewTable
{
  constructor(tableId, name, className, data)
  {
    const table = document.getElementById(tableId);
    const caption = document.createElement('caption');
    const thead = document.createElement('thead');
    const theadtr = document.createElement('tr');
    
    table.setAttribute("class", className);
    
    this.tableCaption(table, caption, name);
    this.title(table, thead, theadtr, data);
    this.records(table, data);
  }
  
  tableCaption(table, caption, name)
  {
    const captionText = document.createTextNode(name);
    caption.appendChild(captionText);
    table.append(caption);
  }
  
  title(table, thead, theadtr, data)
  {
    const oneRecord = Object.keys(data[0]);
    for(let i=0; oneRecord.length >i; i++)
    {
      this.titleColumn(theadtr, oneRecord[i]);
    }
    thead.append(theadtr);
    table.append(thead);
  }
  
  titleColumn(theadtr, text)
  {
    const theadtrth = document.createElement('th');
    const thtext = document.createTextNode(text);
    theadtrth.append(thtext);
    theadtr.append(theadtrth);
  }

  records(table, data)
  {
    const oneRecord = data.length;
    const rows = [];
    for(let i=0; oneRecord >i; i++)
    {
      rows[i] = table.insertRow();
      this.rowRecord(table, rows, data, i);
    }
  }
  
  rowRecord(table, rows, data, i)
  {
    const dataLength = Object.keys(data[0]).length;
    const row = rows[i];
    for(let ii=0; dataLength > ii; ii++)
    {
      this.rowColumn(table, row, data, i, ii);
    }
  }
  
  rowColumn(table, row, data, i, ii)
  {
    const text = data[i][Object.keys(data[0])[ii]];
    const textz = document.createTextNode(text);
    const cell = row.insertCell();
    cell.appendChild(textz);
  }
  
}
