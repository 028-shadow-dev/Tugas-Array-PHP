<?php 

    function hitungRataRata($data){
        $rataRata = array_sum($data) / count($data);
        $hasil = round($rataRata, 1);
        return $hasil;
    }

    function cekKelulusan($data) {
        if ($data >= 80) {
            return "Lulus Sangat Baik";
        } else if ($data >= 75) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
?>