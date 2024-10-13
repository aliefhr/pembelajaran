<?php
$nilaiUAS  = $_POST['txtuas'] * 0.4;
$nilaiUTS  = $_POST['txtuts'] * 0.3;
$nilaiTugas  = $_POST['txttugas'] * 0.2;
$nilaiAbsen  = $_POST['txtabsen'] * 0.1;

$nilaiAkhir = $nilaiUAS + $nilaiUTS + $nilaiTugas + $nilaiAbsen;

if ($nilaiAkhir > 80) {
    echo "Grade A";
} else if ($nilaiAkhir > 70 && $nilaiAkhir <= 80) {
    echo "Grade B";
} else if ($nilaiAkhir > 60 && $nilaiAkhir <= 70) {
    echo "Grade C";
} else if ($nilaiAkhir > 50 && $nilaiAkhir <= 60) {
    echo "Grade D";
} else {
    echo"Grade E";
}
?>