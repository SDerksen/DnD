function newrow() {
    var table = document.getElementById('initiatives');

    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.innerHTML = "Bad guys";
    cell2.innerHTML = "<input type='number' name='baddies'>";
}

function delayPlayer(text) {
    var name = text;
    var cellcontent = document.getElementById(text);

    var existing = cellcontent.innerHTML; 
    var empty = ''; 
     
    document.getElementById('new-init').innerHTML += existing;
    cellcontent.innerHTML = empty; 
}

function insertPlayer(text) {
    var cellcontent = document.getElementById(text);
    var existing = cellcontent.innerHTML; 
    var table = document.getElementById("emptyspace");
    table.innerHTML = existing;
    
    //document.getElementById('').innerHTML += existing + "<br>";
    //cellcontent.innerHTML = empty; 
}
