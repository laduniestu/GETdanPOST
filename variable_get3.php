<?php
$mahasiswa=[
    [
        "Nama"=>"dina",
        "Nim"=>"123456",
        "jurusan"=>"teknik kimia",
        "Email"=>"dina@gmail.com",
        "Gambar"=>"gambar1.jpg"
    ],
    [
        "Nama"=>"dino",
        "Nim"=>"9123124",
        "jurusan"=>"teknik listrik",
        "Email"=>"dino@gmail.com",
        "Gambar"=>"gambar2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Data Mahasiswa </title>
    </head>
<body>

<h1> Data Mahasiswa array multidimensi </h1>
<ul>
    <?php foreach($mahasiswa as $mhs): ?>
    <li>
        <img src="img/<?= $mhs["Gambar"] ?>" alt="" width="100" height="100">
    </li>
        <li>
            <a href="latihan_get.php">Nama:<?php echo $mhs["Nama"]; ?>
        </li>
</br>
        <li>
            <a href="latihan_get.php?x=<?php echo $mhs["Nama"];?>">Nama:<?= $mhs["Nama"]; ?>
        </li>
</br>        
        <li>
            <a href="latihan_get.php?x=<?php echo $mhs["Nama"];?>&nim=<?= $mhs["Nim"];?>&jurusan=<?= $mhs["jurusan"];?>">Nama:<?= $mhs["Nama"]; ?>
        </li>
	<?php endforeach; ?>
</ul>

</body>
</html>
