function deleteRow(rowId) {
    var row = document.getElementById(rowId);
    row.parentNode.removeChild(row);
}