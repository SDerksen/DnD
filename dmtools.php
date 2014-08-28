<?php
include('dbconnect.php');
echo "<h1> Initiative ding </h1><hr> <br>";

$players_overview = mysqli_query($dblink, "SELECT player_name, init FROM players");

echo "<form method='post' action=''><table border=1>";
echo "<tr><th>Playername</th><th>Initiative</th>";
while ($players = $players_overview->fetch_assoc()) {
    echo "<tr><th>".$players['player_name']."</th><td><input type='number' name='".$players['player_name']."'></td></tr>";
}

echo "</table><input type='submit' value='Opslaan'></form><br>";

if (isset($_POST)) {
    #arsort($_POST);
    foreach($_POST as $player => $initiative) {
	echo $player;
	$player_init_result = mysqli_query($dblink, "SELECT init FROM players WHERE player_name = ".$player."");
	foreach ( $player_init = $player_init_result->fetch_assoc() ) {
        echo $player_init;
}	
        echo "$player = $initiative <br>";
    }
}

echo "<a href='index.php'> Ga terug naar overzicht</a>";
?>
