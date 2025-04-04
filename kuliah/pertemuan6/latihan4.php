<?php 

// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan tiap elemen


$mahasiswa = [
    [ 
        'nama' => 'Nazriel',
        'nim' => '243040026', 
        'email' => 'nazrielbintang052gmail.com', 
        'jurusan' => 'Teknik Informatika'
    ], 
    [
        'nama' => 'Agung',
        'nim' => '243040020',
        'email' => 'agung@gmail.com', 
        'jurusan' => 'Teknik Industri'
    ],
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
        <li>Nama: <?= $m['nama']; ?> </li>
        <li>NIM: <?= $m['nim']; ?> </li>
        <li>Email: <?= $m['email']; ?> </li>
        <li>Jurusan: <?= $m['jurusan']; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>