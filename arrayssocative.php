<?php

require_once('connection.php');
echo "<br>";
echo "<br>";

function arrayFromDatabase(){
    global $koneksi;


$queryData = mysqli_query($koneksi, "SELECT * FROM tb_siswa");

$proses = mysqli_fetch_all($queryData, MYSQLI_ASSOC);

foreach ($proses as $rowData) {
    echo "<br>";
    echo "NIS: ". $rowData['NIS']."<br>";
    echo "name_siswa: ". $rowData['name_siswa']."<br>";
    echo "kelas: ". $rowData['kelas']."<br>";
    echo "<br>";
}
}
function latihanArrayScope(){
    $siswa = [[
        "NIS" => "2001",
        "NAMA" => "Rizky Maul",
        "JURUSAN" => "PPLG",
        "NILAI" => "100",
        
    ]
    ,
    [
        "NIS" => "2002",
        "NAMA" => "Anton",
        "JURUSAN" => "PPLG",
        "NILAI" => "67" 
    ]
    ];

   foreach($siswa as $tampilSiswa) {
    echo "NIS: ". $tampilSiswa["NIS"]. "<br>";
    echo "NAMA: ". $tampilSiswa["NAMA"]. "<br>";
    echo "JURUSAN: ". $tampilSiswa["JURUSAN"]. "<br>";
    echo "NILAI: ". $tampilSiswa["NILAI"]. "<br>";
   } 
}
   
echo "Array Manual: <br>-----------<br>";
latihanArrayScope();
echo "<br>";
echo "Array Database: <br>------------<br>";
arrayFromDatabase();


?>