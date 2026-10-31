<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Cerita Pendek Tentang Persahabatan",
    "penulis" => "Fensa Dwi Agustina",
    "jumlah_halaman" => 95
];
 
// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>Penulis: ".$artikel["penulis"]."</p>";
echo "<p>Jumlah Halaman: ".$artikel["jumlah_halaman"]."</p>";
?>