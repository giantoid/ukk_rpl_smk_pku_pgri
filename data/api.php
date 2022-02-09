<?php
$nik = $_GET['nik'];
$txt_file    = file_get_contents('../data/catatan-perjalanan.txt');
$rows        = explode("\n", $txt_file);
array_shift($rows);

$i = 1;
$array = [];

foreach ($rows as $row => $data) {

    // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
    $row_data = explode('|', $data);

    // $info[$row]['tanggal'] = $row_data[1];
    // $info[$row]['waktu'] = $row_data[2];
    // $info[$row]['lokasi'] = $row_data[3];
    // $info[$row]['suhu'] = $row_data[4];

    if ($row_data[0] == $nik) {
        array_push($array, [
            'tanggal' => $row_data[1],
            'waktu' => $row_data[2],
            'lokasi' => $row_data[3],
            'suhu' => $row_data[4],
        ]);
    }
}

echo json_encode($array);
