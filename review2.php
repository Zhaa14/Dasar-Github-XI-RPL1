<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Nilai</title>
</head>
<body>
    <center>
    <form action="" method="post">
    <p><b><h2>Belajar Form<h2><b></p>
    <p>Masukan Nilai :</p>
    <input type="number" name="angka"><br>
    <br>
    <input type="submit" value="submit" name="kirim">
</form>
<br>
<br>
    <?php

    if (isset($_POST['kirim'])) {
        $angka = $_POST['angka'];
    
        if ($angka >= 90 && $angka <=100){
            echo "Nilai Anda ".$angka." Selamat Anda Lulus";
        } elseif($angka >= 80 && $angka< 90){
            echo "Nilai Anda ".$angka." Selamat Anda Lulus";
        } elseif($angka >= 75 && $angka< 80){
            echo "Nilai Anda ".$angka." Selamat Anda Lulus";
        } elseif($angka >= 60 && $angka< 75){
            echo "Nilai Anda ".$angka." Selamat Anda Tidak Lulus";
        } elseif($angka >=0 && $angka< 60){
            echo "Nilai Anda ".$angka." Selamat Anda Tidak Lulus";
        } else {
           echo "nilai $angka  nilai tidak valid";
        }
    }
    ?>
    </center>
</body>
</html>