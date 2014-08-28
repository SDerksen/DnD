<?php
include('dbconnect.php');
if (!empty($_GET['id'])) {
$player_id = $_GET['id'];


$overview_result = mysqli_query($dblink, "SELECT * FROM players WHERE player_id = ".$player_id."");
$player_overview = $overview_result->fetch_assoc();
echo "<h1> Charsheet ".$player_overview['player_name']."</h1><hr>";


if($_GET['action'] == 'edit') {
	
    if (isset($_POST['player_name']) && isset($_POST['level']) && isset($_POST['str']) &&
        isset($_POST['dex']) && isset($_POST['con']) && isset($_POST['wis']) &&
        isset($_POST['intel']) && isset($_POST['cha']) && isset($_POST['class']) &&
        isset($_POST['hp']) && isset($_POST['ac']) && isset($_POST['movement']) && 
        isset($_POST['initiative']) && isset($_POST['batt']) && isset($_POST['fort']) && 
        isset($_POST['ref']) && isset($_POST['will']) && 

        !empty($_POST['player_name']) && !empty($_POST['level']) && !empty($_POST['str']) &&
        !empty($_POST['dex']) && !empty($_POST['con']) && !empty($_POST['wis']) &&
        !empty($_POST['intel']) && !empty($_POST['cha']) && !empty($_POST['class']) &&
        !empty($_POST['hp']) && !empty($_POST['ac']) && !empty($_POST['movement']) && 
        !empty($_POST['initiative']) && !empty($_POST['batt']) && !empty($_POST['fort']) && 
        !empty($_POST['ref']) && !empty($_POST['will'])) {
			if (mysqli_query($dblink, "UPDATE players SET 
			    player_name = '".$_POST['player_name']."', ecl = ".$_POST['level' ].", 
            		    str = ".$_POST['str'].", dex = ".$_POST['dex'].",
			    con = ".$_POST['con'].", wis = ".$_POST['wis'].", 
            		    intel = ".$_POST['intel'].", cha = ".$_POST['cha'].", `class-levels` = '".$_POST['class']."', 
			    hp = ".$_POST['hp'].", alignment = ".$_POST['alignment'].", 
            		    movement = ".$_POST['movement'].", init = ".$_POST['initiative'].",
			    bab = ".$_POST['batt'].", fort = ".$_POST['fort'].", 
            		    ref = ".$_POST['ref'].", will = ".$_POST['will']." 
			    WHERE player_id = ".$player_id."")) {
			        echo "Data is opgeslagen.";
			} else {
			    echo "<br>Error in opslaan";
			    print(mysqli_error($dblink));
			}
    } else {
            echo "Niet alle velden zijn ingevuld.";
    }
    echo "<form action='' method='post' ><table border=1>";
	echo "
    <th>Naam</th>
	<td><input type='text' name='player_name' value=".$player_overview['player_name']."></td><tr>
	<th>ECL</th>
	<td><input type='text' name='level' value=".$player_overview['ecl']."></td>
	</tr><tr>
	<th>Strength</th>
	<td><input type='number' name='str' value=".$player_overview['str']."></td>
	</tr><tr>
	<th>Dexterity</th>
	<td><input type='number' name='dex' value=".$player_overview['dex']."></td>
	</tr><tr>
	<th>Constitution</th>
	<td><input type='number' name='con' value=".$player_overview['con']."></td>
	</tr><tr>
	<th>Wisdom</th>
	<td><input type='number' name='wis' value=".$player_overview['wis']."></td>
	</tr><tr>
	<th>Intelligence</th>
	<td><input type='number' name='intel' value=".$player_overview['intel']."></td>
	</tr><tr>
	<th>Charisma</th>
	<td><input type='number' name='cha' value=".$player_overview['cha']."></td>
	</tr><tr>
	<th>Class</th>
	<td><input type='text' name='class' value=".$player_overview['class-levels']."></td>
	</tr><tr>
	<th>HP</th>
	<td><input type='number' name='hp' value=".$player_overview['hp']."></td>
	</tr><tr>
	<th>Movement Speed</th>
	<td><input type='number' name='movement' value=".$player_overview['movement']."></td>
	</tr><tr>
	<th>Initiative</th>
	<td><input type='number' name='initiative' value=".$player_overview['init']."></td>
	</tr><tr>
	<th>Base Attack Bonus</th>
	<td><input type='number' name='batt' value=".$player_overview['bab']."></td>
	</tr><tr>
	<th>Fortitude Save</th>
	<td><input type='number' name='fort' value=".$player_overview['fort']."></td>
	</tr><tr>
	<th>Reflex Save</th>
	<td><input type='number' name='ref' value=".$player_overview['ref']."></td>
	</tr><tr>
	<th>Will Save</th>
	<td><input type='number' name='will' value=".$player_overview['will']."></td>
	</tr><tr>
	<th>Race</th>
	<td><input type='text' name='race' value=".$player_overview['race']."></td>
        </tr><tr>
	<td><input type='submit' value='Toepassen'>
    <a href='charsheet.php?id=".$player_id."&action=view'>
    <input type='button' value='Annuleren'></a></td>
	</table>
	</form>";
} elseif ($_GET['action'] == 'view') {
    echo "<table border='1'>";
	echo "
	<th>Naam</th>
	<td>".$player_overview['player_name']."</td><tr>
	<th>ECL</th>
	<td>".$player_overview['ecl']."</td>
	</tr><tr>
	<th>Strength</th>
	<td>".$player_overview['str']."</td>
	</tr><tr>
	<th>Dexterity</th>
	<td>".$player_overview['dex']."</td>
	</tr><tr>
	<th>Constitution</th>
	<td>".$player_overview['con']."</td>
	</tr><tr>
	<th>Wisdom</th>
	<td>".$player_overview['wis']."</td>
	</tr><tr>
	<th>Intelligence</th>
	<td>".$player_overview['intel']."</td>
	</tr><tr>
	<th>Charisma</th>
	<td>".$player_overview['cha']."</td>
	</tr><tr>
	<th>Class</th>
	<td>".$player_overview['class-levels']."</td>
	</tr><tr>
	<th>HP</th>
	<td>".$player_overview['hp']."</td>
	</tr><tr>
	<th>Movement Speed</th>
	<td>".$player_overview['movement']."</td>
	</tr><tr>
	<th>Initiative</th>
	<td>".$player_overview['init']."</td>
	</tr><tr>
	<th>Base Attack Bonus</th>
	<td>".$player_overview['bab']."</td>
	</tr><tr>
	<th>Fortitude Save</th>
	<td>".$player_overview['fort']."</td>
	</tr><tr>
	<th>Reflex Save</th>
	<td>".$player_overview['ref']."</td>
	</tr><tr>
	<th>Will Save</th>
	<td>".$player_overview['will']."</td>
	</tr>
	</tr><tr>
	<th>Race</th>
	<td>".$player_overview['race']."</td>
        </tr><tr>
    ";

echo "</table>";
echo "<a href='charsheet.php?id=".$player_id."&action=edit'><input type=button value='Aanpassen'></a>";

}
echo "<a href='index.php'> Ga terug naar overzicht</a>";
} else {
    echo "Er is geen ID mee gegeven.<br>";
    echo "<a href='index.php'><input type='button' value='Ga terug'></a></td>";

}
