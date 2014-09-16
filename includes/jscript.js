function newrow() {
    var table = document.getElementById('initiatives');

    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.innerHTML = "Bad guys";
    cell2.innerHTML = "<input type='number' name='baddies'>";
}
