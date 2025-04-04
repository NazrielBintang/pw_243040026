<?php 

// Array Bersarang / Nested Array


$mahasiswa = [
    [ 'Nazriel', '243040026', 'nazrielbintang052gmail.com', 'Teknik Informatika'], 
    [ 'Agung', '243040020', 'agung@gmail.com', 'Teknik Industri'],
    [ 'Erik, 104030001, Teknik Informatika, erik@gmail.com']
];

// echo $mahasiswa[1][4][2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersarang</title>
</head>
<body>
    
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) : ?>
    <ul>
        <li>Nama: <?= $m[0]; ?> </li>
        <li>NIM: <?= $m[1]; ?> </li>
        <li>Email: <?= $m[2]; ?> </li>
        <li>Jurusan: <?= $m[3]; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>