<?php
$daftar_siswa = [
    "Nadine Safwabilla",
    "Inez Eriana",
    "Devana Putri",
    "Regita Azizah",
    "Fensa Dwi",
    "Titania Tirta"
];
 
echo "<h3>Daftar Nama Mahasiswa</h3>";
echo "<ul>";
 
foreach($daftar_siswa as $siswa){
    echo "<li>$siswa</li>";
}
 
echo "</ul>";
 
?>