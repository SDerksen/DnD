<?php
include('dbconnect.php');

echo("<h1>dnd ding</h1>");

$players_result = mysqli_query($dblink, "SELECT player_id, name, level FROM players");

echo "<table border=1>
	<tr>
		<th>ID</th>
		<th>Naam</th>
		<th>Level</th>
	</tr>
	";
while($players = $players_result->fetch_assoc()) {
	echo "
	<tr>
	  <td><a href='charsheet.php?id=".$players['player_id']."&action=view'>".$players['player_id']."</a></td>
	  <td>".$players['name']."</td>
	  <td>".$players['level']."</td>
	</tr>
	";
	}
?>
