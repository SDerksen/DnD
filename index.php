<html>
<head>
  <title>
    DnD 3.5 Tool!
  </title>
</head>

<body>

<?php
include('includes/dbconnect.php');
include('includes/functions.php');

echo("<h1>dnd ding</h1>");

$players_result = mysqli_query($dblink, "SELECT player_id, player_name, ecl FROM players");
?>
<b>Character Sheets</b>
<table border=1>
	<tr>
	    <th></th>
	    <th>Naam</th>
	    <th>Level</th>
	</tr>
<?php 
while ($players = $players_result->fetch_assoc()) {
	echo "
	<tr>
	  <td><a href='charsheet.php?id=".$players['player_id']."&action=view'>Edit</a></td>
	  <td>".$players['player_name']."</td>
	  <td>".$players['ecl']."</td>
	</tr>
	";
	}
?>

</table>
<a href='createchar.php'><input type='button' value='New character'></a>


<p><a href='dmtools.php'> Tools voor de DM</p>
</body>
</html>
