<?php
$nama="Budiono Siregar";
$kelas="XII RPL 2";
$nilai_tugas=85;
$nilai_uts=90;
$nilai_uas=70;
$nilai_akhir= $nilai_tugas * 0.3 + $nilai_uts * 0.3 + $nilai_uas * 0.4;

if ($nilai_akhir >= 90 && $nilai_akhir <= 100) {
    $predikat="A";
} elseif ($nilai_akhir >=80) {
    $predikat="B";
} elseif ($nilai_akhir >=70) {
    $predikat="C";
} elseif ($nilai_akhir >=60) {
    $predikat="D";
} else {
    $predikat="E";
}

if ($nilai_akhir >= 75) {
    $status="lulus";
} else {
    $status="tidak lulus";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Hasil Penilaian Siswa</h1>
</div>
<?php
echo "nama: $nama <br>";
echo "kelas: $kelas <br>";
echo "<hr>";
echo "nilai tugas: $nilai_tugas <br>";
echo "nilai uts: $nilai_uts <br>";
echo "nilai uas: $nilai_uas <br>";
echo "<hr>";
echo "nilai akhir: $nilai_akhir <br>";
echo "predikat: $predikat <br>";
echo "status: $status <br>";
?>
</body>
</html>

