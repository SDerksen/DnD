<?php

function calculate_str($dblink, $roll, $player) {
    $strength_result = mysqli_query($dblink, "SELECT str FROM players WHERE player_name = '".$player."'");
    $strength = mysqli_fetch_row($strength_result);
    $result = ( $strength[0]  - 10) / 2 + $roll;
    $result = round($result, 0, PHP_ROUND_HALF_DOWN);
    return $result;
}

function calculate_dex($dblink, $roll, $player) {
    $dex_result= mysqli_query($dblink, "SELECT dex FROM players WHERE player_name = '".$player."'"); 
    $dex = mysqli_fetch_row($dex_result);
    $result = ( $dex[0] - 10) / 2 + $roll;
    $result = round($result, 0, PHP_ROUND_HALF_DOWN);
    return $result;
}

function calculate_con($dblink, $roll, $player) {
    $con_result = mysqli_query($dblink, "SELECT con FROM players WHERE player_name = '".$player."'");
    $con =mysqli_fetch_row($con_result);
    $result = ($con[0] - 10) / 2 + $roll;

    $result = round($result, 0, PHP_ROUND_HALF_DOWN);
    return $result;
}

function calculate_intel($dblink, $roll, $player) {
    $intel_result = mysqli_query($dblink, "SELECT intel FROM players WHERE player_name = '".$player."'");
    $intel = mysqli_fetch_row($intel_result);
    $result = ($intel[0]- 10) / 2 + $roll;

    $result = round($result, 0, PHP_ROUND_HALF_DOWN);
    return $result;
}

function calculate_wis($dblink, $roll, $player) {
    $wis_result = mysqli_query($dblink, "SELECT wis FROM players WHERE player_name = '".$player."'");
    $wis = mysqli_fetch_row($wis_result);
    $result = ($wis[0] - 10) / 2 + $roll;

    $result = round($result, 0, PHP_ROUND_HALF_DOWN);
    return $result;
}

function calculate_cha($dblink, $roll, $player) {
    $cha_result = mysqli_query($dblink, "SELECT cha FROM players WHERE player_name = '".$player."'");
    $cha = mysqli_fetch_row($cha_result);
    $result = ($cha[0] - 10) / 2 + $roll;

    $result = round($result, 0, PHP_ROUND_HALF_DOWN);
    return $result;
}
