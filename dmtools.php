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

echo "<form method='post' action=''><table border=1 id='initiatives'>";
echo "<tr><th>Playername</th><th>Initiative</th>";
while ($players = $players_overview->fetch_assoc()) {
    echo "<tr>
            <td>".$players['player_name']."</td>
	    <td><input type='number' name='".$players['player_name']."'>
	    </td>
          </tr>";
}

echo "</table><input type='submit' value='Opslaan'><input type='button' value='New Row' onclick='newrow()'>
     </form><br>";

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

foreach( $init_array as $player => $initiative ) {
    print("$player - $initiative <br>");
}

echo "<a href='index.php'> Ga terug naar overzicht</a>";
?>
