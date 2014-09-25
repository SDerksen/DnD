<!DOCTYPE html>
<html>
<head>
  <script src="includes/jscript.js"></script>
<title>
</title>
</head>
<body>

<?php
include('includes/dbconnect.php');
#echo "<h1> Initiative ding </h1><hr> <br>";

$players_overview = mysqli_query($dblink, "SELECT player_name, init FROM players");

echo "<form method='post' action=''><table border=1 id='initiatives'>\n";
echo "<tr><th>Playername</th><th>Initiative</th></tr>\n";
while ($players = $players_overview->fetch_assoc()) {
echo "<tr>\n";
echo "  <td>".$players['player_name']."</td>";
echo "<td><input type='number' name='".$players['player_name']."'>";
echo " <td>\n</tr>\n";
}

echo "</table>\n<input type='submit' value='Opslaan'><input type='button' value='New Row' onclick='newrow()'>\n</form>";

if (isset($_POST)) {
$init_array = array();
foreach($_POST as $player => $initiative) {
if ($player == "baddies" ) {
	$init_array[$player] = $initiative;
}
if( $player_init_result = mysqli_query($dblink, "SELECT init FROM players WHERE player_name = '".$player."'") ) {
    while($players_init = $player_init_result->fetch_assoc()) {
	$final_init = $initiative + $players_init['init'];
	$init_array[$player] = $final_init;
    }
} else {
    echo "Er gaat iets fout <br>";
    printf(mysqli_error($dblink));
    echo "<br>";
}
}
}

arsort($init_array);
$counter = 1;
echo "\n<h2>Active initiative</h2>";
echo "\n<table id='order' border=0>";
foreach( $init_array as $player => $initiative ) {
echo "\n<tr id=player-init".$player.">";
echo "\n  <td> $player - $initiative </td>\n  <td><button onclick='delayPlayer(\"player-init".$player."\")'>delayed</button></td> ";
echo "\n  <td><button onclick='insertPlayer(\"player-init".$player."\")'>insert</button></td> \n";
echo "</tr>";
echo "<tr id='emptyspace'>\n </tr>";
$counter++;
}
echo "\n</table> ";
?>

<h2>Delayed persons</h2>
<table id='new-init'>
</table>

<p id='test'></p>

<a href='index.php'> Ga terug naar overzicht</a>
</body>
</html>
