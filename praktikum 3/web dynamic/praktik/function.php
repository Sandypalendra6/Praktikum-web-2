<?php
// Cara Membuat Fungsi
// function namafungsi(parameter){
// code disini
// }

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;

}

echo "Hasilnya adalah :" . luaspersegi(10);
echo "<br>";

// Bikin Fungsi Nama 

function nama(){
    echo "Namaku Sandy";
}

nama();
echo "<br>";

// Fungsi Menggunakan Parameter
// Parameter Default

function perkenalan($nama = "Sandy"){
    echo "Perkenalan Nama Saya : " .$nama;

}

perkenalan("Fauzan");


?>