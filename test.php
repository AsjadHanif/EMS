<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f0f0f0;
}

th input[type="text"] {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
}

th input[type="text"]:focus {
    border-color: #aaa;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
    </style>
</head>
<body>
      <table id="myTable">
        <thead>
            <tr>
                <!-- table headers will be generated dynamically -->
            </tr>
        </thead>
        <tbody>
            <!-- table body will be generated dynamically -->
        </tbody>
    </table>
    <script>
        // assume you have a table with an id "myTable"
var table = document.getElementById("myTable");

// define the columns and their corresponding filter keys
var columns = [
  { id: "name", filterKey: "name" },
  { id: "id", filterKey: "id" },
  { id: "pseudoId", filterKey: "pseudoId" },
  { id: "sales", filterKey: "sales" },
  { id: "date", filterKey: "date" },
  { id: "role", filterKey: "role" }
];

// define the data for the table
var data = [
  { name: "John", id: 1, pseudoId: "john123", sales: 100, date: "2022-01-01", role: "admin" },
  { name: "Jane", id: 2, pseudoId: "jane456", sales: 200, date: "2022-01-15", role: "moderator" },
  // ...
];

// create the table headers with filter inputs
var headers = columns.map((column) => {
  var th = document.createElement("th");
  th.textContent = column.id;
  var input = document.createElement("input");
  input.type = "text";
  input.placeholder = `Filter by ${column.id}`;
  th.appendChild(input);
  return th;
});

table.tHead = document.createElement("thead");
table.tHead.appendChild(document.createElement("tr"));
headers.forEach((th) => table.tHead.rows[0].appendChild(th));

// create the table body with data
var body = document.createElement("tbody");
data.forEach((row) => {
  var tr = document.createElement("tr");
  columns.forEach((column) => {
    var td = document.createElement("td");
    td.textContent = row[column.id];
    tr.appendChild(td);
  });
  body.appendChild(tr);
});
table.appendChild(body);

// add event listeners to the filter inputs
headers.forEach((th) => {
  var input = th.querySelector("input");
  input.addEventListener("input", (e) => {
    var filterValue = e.target.value.toLowerCase();
    var filteredData = data.filter((row) => {
      var columnValue = row[th.textContent.toLowerCase()];
      return columnValue.toString().toLowerCase().includes(filterValue);
    });
    body.innerHTML = "";
    filteredData.forEach((row) => {
      var tr = document.createElement("tr");
      columns.forEach((column) => {
        var td = document.createElement("td");
        td.textContent = row[column.id];
        tr.appendChild(td);
      });
      body.appendChild(tr);
    });
  });
});
    </script>
</body>
</html>