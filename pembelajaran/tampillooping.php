<?php
$dari = $_POST['txtdari'];
$sampai = $_POST['txtsampai'];
$total = 0;
//arahan dosen
// $array_loop = [];
// for($i=$dari;$i<=$sampai;$i++){
//     if($i%2 == 0){
//         $jumlah+=$i;
//         echo$i."+";
//     }
//     echo" = ". $jumlah;
// }

//for open ai
// for($i=$dari;$i<=$sampai;$i++){
//     //echo $i." ";
//     if( $i%2 == 0){
//         $total += $i;
//         //echo "".$i;
//     }
//     echo $dari . " + " . ($sampai - 2) . " + " . $sampai . " = " . $total;
// }

//for haidar menghitung cth = 6+8+10-24
// for ($i = $dari; $i <= $sampai; $i++) {
//     if ($i % 2 == 0) {
//         $total += $i;
//         $array_loop[] = $i;
//     }
// }
// echo implode(" + ", $array_loop);
// echo"=".$total;

//lirik lagu
echo "judu lagu anak ayam berkotek<br>";
echo "lirik<br>";
echo "Tekotek kotek kotek, anak ayam turun berkotek <br>";
for ($i = $dari; $i >= $sampai; $i--) {
    if ($i > 0) {
        echo "Anak ayam turun $i";
        if ($i - 1 == 0) {
            echo ", mati 1 tinggal induknya<br>";
        } else {
            echo ", mati 1 tinggal " . $i - 1 . "<br>";
        }
    }
}
?>