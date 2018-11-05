<!DOCTYPE html>
<html lang="en">
<head>
    <title>hasil dari post</title>
</head>
<body>
    <?php
        //cek apakah x sudah diset belum

        if 
        (
        isset($_GET["nama"])
        ) {
            //redirect
            header("Location:form_post.php");
        exit;
        }
    ?>
    <h1>selamat datang di halaman hasil_post.php,<?= $_POST["nama"];?></h1>
</body>
</html>
