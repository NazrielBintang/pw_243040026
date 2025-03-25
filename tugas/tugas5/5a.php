<?php
$mahasiswa = [
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
    ["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
    ["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"],
    ["Muhammad Nazriel Bintang Putra Darajat", "243040026", "Teknik Informatika", "xaden@gmail.com"],
    ["Mochamad Ibnu Elang Dirgantara", "243040005", "Teknik Informatika", "ibnuelang24@gmail.com"],
    ["Fahrizal Raja", "243040006", "Teknik Informatika", "kaniafahrizal@gmail.com"],
    ["Erik Adia Meka", "243040013", "Teknik Informatika", "manusiagorontalo@gmail.com"],
    ["Ikhsan Ferdiansyah", "243040017", "Teknik Informatika", "ikhsangaming@gmail.com"],
    ["Reiza Mohamad Aditia", "243040024", "Teknik Informatika", "reizaaselole@gmail.com"],
    ["Andhika Ashari", "243040034", "Teknik Informatika", "andhikadimari101@gmail.com"],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>