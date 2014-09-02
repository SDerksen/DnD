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
        echo "Player name = $player <br>";
	if( $player_init_result = mysqli_query($dblink, "SELECT init FROM players WHERE player_name = '".$player."'") ) {
	    while($players_init = $player_init_result->fetch_assoc()) {
	        echo "Player initiatives = $players_init  <br>";
		var_dump($players_init);
            }
	} else {
	    echo "Er gaat iets fout <br>";
	    printf(mysqli_error($dblink));
	    echo "<br>";
        }
	#foreach($player_init = $player_init_result->fetch_assoc()) {
        #    echo $player_init;
#}	
        #echo "Final order : $player = $initiative <br>";
    }
}

echo "<a href='index.php'> Ga terug naar overzicht</a>";
?>
