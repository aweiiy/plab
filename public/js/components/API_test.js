id = [];
var i;
for (i = 1; i <= 10; i++) {
    id[i] = i;
}

$.get('https://jsonplaceholder.typicode.com/users', { id:id},
    function(returnedData){
        drawTable(returnedData);
    });

function drawTable(data) {
    for (var i = 0; i < data.length; i++) {
        drawRow(data[i]);
    }
}

function drawRow(rowData) {
    var row = $("<tr />")
    $("#personDataTable").append(row);
    row.append($("<td>" + rowData.id + "</td>"));
    row.append($("<td>" + rowData.name + "</td>"));
    row.append($("<td>" + rowData.email + "</td>"));
    row.append($("<td>" + rowData.phone + "</td>"));
    row.append($("<td>" + rowData.website + "</td>"));
}
