<?php
include('dbconnect.php');
echo "<h1> Initiative ding </h1><hr> <br>";

$players_overview = mysqli_query($dblink, "SELECT * FROM players");


echo "<form method='post' action=''><table border=1>";
echo "<tr><th>Playername</th><th>Initiative</th>";
while ($players = $players_overview->fetch_assoc()) {
    echo "<tr><th>".$players['name']."</th><td><input type='number' name='init_".$players['name']."'></td></tr>";
}
echo "</table><input type='submit' value='Opslaan'></form><br><br>";

echo "<a href='index.php'> Ga terug naar overzicht</a>";

if (isset($_POST)) {
    var_dump($_POST);
}
?>
