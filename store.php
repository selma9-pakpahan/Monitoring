<?php

define('__IN_SCRIPT__', true);

require './includes/connection.php';
require './helpers/get.php';

$idListrik = get('ID_Listrik', 0);
$date = date('Y-m-d H:i:s');
$voltage = get('Voltage', 0);
$current = get('Current', 0);
$power = get('Power', 0);
$energy = get('Energy', 0);
$frequency = get('Frequency', 0);
$pf = get('PF', 0);

try {
    $stmt = $mysqli->prepare("INSERT INTO `meter`(`ID_Listrik`, `Date`, `Voltage`, `Current`, `Power`, `Energy`, `Frequency`, `PF`) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->execute([
        $idListrik,
        $date,
        $voltage,
        $current,
        $power,
        $energy,
        $frequency,
        $pf
    ]);
} catch (\Throwable $th) {
}
