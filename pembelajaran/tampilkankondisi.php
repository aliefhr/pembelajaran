<?php
    // hanya satu kondisi
    // $nilai = $_POST['txtnilai'];
    // if ($nilai<50){
    //     echo "grade D";
    // }else{
    //     echo "grade A";
    // }
    // dimana kondisi 1 dan lainnya di jadikan 1
    $nilai = $_POST['txtnilai'];
    if ($nilai>80){
        echo "grade A";
    }else if ($nilai>70 && $nilai<=80){
        echo "grade B";
    }else if ($nilai>60 && $nilai<=70){
        echo "grade C";
    }else if ($nilai>50 && $nilai<=60){
        echo "grade D";
    }else{
        echo "grade C";
    }
?>