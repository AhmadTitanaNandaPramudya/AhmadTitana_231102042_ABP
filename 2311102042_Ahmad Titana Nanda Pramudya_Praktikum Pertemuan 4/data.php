<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$profil = [
    'nama'      => 'Budi Santoso',
    'pekerjaan' => 'Web Developer',
    'lokasi'    => 'Jakarta'
];

echo json_encode($profil);
?>
