<!DOCTYPE html>
<html>
<head>
    <title>Detail mahasiswa</title>
    
</head>
<body>

    <?php

        //cek apakah x sudah diset belum
        if 
        (
        !isset($_GET["x"])||
        !isset($_GET["nim"])||
        !isset($_GET["jurusan"])
        ) {
            //redirect
            header("Location:variabel_get3.php");
            exit;
        }
    ?>


    <ul>
        <li>
            coba
        </li>
</br>
        <li>
            <?php echo $_GET["x"];?>
        </li>
</br>
        <li>
            <?php echo $_GET["x"];?>
        </li>
        <li>
            <?php echo $_GET["nim"];?>
        </li>
        <li>
            <?php echo $_GET["jurusan"];?>
        </li>
    </ul>
    <a href="variabel_get3.php">kembali    
</body>
</html>