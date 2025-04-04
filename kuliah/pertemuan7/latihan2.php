<?php 

// $_GET
// Variabel superglobal yang bisa isi lewat metode request GET
// Lewat URL

// Isset()
// untuk memeriksa apakah sebuah variabel / key sudah dibuat atau belum
// if (isset($_GET ['nama']));

// Ternary Operator
// Untuk membuat if else menjadi ringkas
// echo "Nama: "(isset($_GET ['nama']) ? $_GET['nama'] : Unknown);

// Null coalescing operator
// Untuk membuat isset lebih ringkas
// ??
// ($_GET['nama'])

echo "nama: . " $_GET ['$nama'];
echo "<br>";
echo "nim: " . $_GET ['nim'];

?>