<?php
include('dbconnect.php');
if (!empty($_POST)) {
    $query = "INSERT INTO players
         (player_name, ecl, str, dex, con, wis,
                intel, cha, `class-levels`, hp, movement,
               init, bab, fort, ref, will, race, alignment)
         VALUES (
         '".$_POST['player_name']."', '".$_POST['ecl']."', '".$_POST['str']."',
         '".$_POST['dex']."', '".$_POST['con']."', '".$_POST['wis']."' ,
         '".$_POST['intel']."', '".$_POST['cha']."', '".$_POST['class']."',
         '".$_POST['hp']."', '".$_POST['movement']."',
         '".$_POST['initiative']."', '".$_POST['batt']."', '".$_POST['fort']."',
         '".$_POST['ref']."', '".$_POST['will']."', '".$_POST['race']."', '".$_POST['alignment']."')";
    if (mysqli_query($dblink, $query)) {
        echo "Gegevens opslaan gelukt";
    } else {
        echo "Fout: <br>";
        mysqli_error($dblink);
        echo "<br>";
        #var_dump($query);
    }
}
    echo "
    <h1> New character </h1> <hr><br>
    <form action='' method='post'>
    <table border=1>
    <th>Naam</th>
    <td><input type='text' name='player_name' value=''></td><tr>
    <th>ECL</th>
    <td><input type='text' name='ecl' value=''></td>
    </tr><tr>
    <th>Strength</th>
    <td><input type='number' name='str' value=''></td>
    </tr><tr>
    <th>Dexterity</th>
    <td><input type='number' name='dex' value=''></td>
    </tr><tr>
    <th>Constitution</th>
    <td><input type='number' name='con' value=''></td>
    </tr><tr>
    <th>Wisdom</th>
    <td><input type='number' name='wis' value=''></td>
    </tr><tr>
    <th>Intelligence</th>
    <td><input type='number' name='intel' value=''></td>
    </tr><tr>
    <th>Charisma</th>
    <td><input type='number' name='cha' value=''></td>
    </tr><tr>
    <th>Class</th>
    <td><input type='text' name='class' value=''></td>
    </tr><tr>
    <th>HP</th>
    <td><input type='number' name='hp' value=''></td>
    </tr><tr>
    <th>Movement Speed</th>
    <td><input type='number' name='movement' value=''></td>
    </tr><tr>
    <th>Initiative</th>
    <td><input type='number' name='initiative' value=''></td>
    </tr><tr>
    <th>Base Attack Bonus</th>
    <td><input type='number' name='batt' value=''></td>
    </tr><tr>
    <th>Fortitude Save</th>
    <td><input type='number' name='fort' value=''></td>
    </tr><tr>
    <th>Reflex Save</th>
    <td><input type='number' name='ref' value=''></td>
    </tr><tr>
    <th>Will Save</th>
    <td><input type='number' name='will' value=''></td>
    </tr><tr>
    <th>Race</th>
    <td><input type='text' name='race' value=''></td>
    </tr><tr>
    <th>Alignment</th>
    <td><input type='text' name='alignment' value=''></td>
    </tr><tr>
        <td><input type='submit' value='Toepassen'><a href='index.php'><input type='button' value='Annuleren'></a></td>
    </table>
    </form>";

?>
