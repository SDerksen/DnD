<?php
include('includes/dbconnect.php');
include('includes/functions.php');

echo("<h1>dnd ding</h1>");

$players_result = mysqli_query($dblink, "SELECT player_id, player_name, ecl FROM players");

echo "<b>Character Sheets</b><table border=1>
	<tr>
	    <th>ID</th>
	    <th>Naam</th>
	    <th>Level</th>
	    </tr>";
while ($players = $players_result->fetch_assoc()) {
	echo "
	<tr>
	  <td><a href='charsheet.php?id=".$players['player_id']."&action=view'>".$players['player_id']."</a></td>
	  <td>".$players['player_name']."</td>
	  <td>".$players['ecl']."</td>
	</tr>
	";
	}
	echo "</table>";
    echo "<a href='createchar.php'><input type='button' value='New character'></a>";

	echo "<br><br><a href='dmtools.php'> Tools voor de DM</a>";
?>


