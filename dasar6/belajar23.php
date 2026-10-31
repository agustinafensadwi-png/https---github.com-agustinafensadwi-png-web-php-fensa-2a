<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Laut Bercerita",
        "penulis" => "Leila S. Chudori"
    ],
    [
        "judul" => "Bumi Manusia",
        "penulis" => "Pramoedya Ananta Toer"
    ],
    [
        "judul" => "Hujan",
        "penulis" => "Tere Liye"
    ]
];
 
// menampilkan array
foreach($artikel as $item){
    echo "<h2>Buku ".$item["judul"]."</h2>";
    echo "<p>Penulis ".$item["penulis"]."<p>";
    echo "<br>";
}
 
?>