<?php
    function AngkotSederhana($noAngkot, $kondisiTerminasi,){
        for($noAngkot; $noAngkot <= $kondisiTerminasi; $noAngkot++){
            if($noAngkot == 1 || $noAngkot == 3 || $noAngkot == 10 || $noAngkot == 11){
                echo "Angkot ke - $noAngkot Tersedia <br />";
            }else if($noAngkot == 9 || $noAngkot == 12 || $noAngkot == 17){
                echo "Angkot ke - $noAngkot Sedang Diperbaiki <br />";
            }else{
                echo "Angkot ke - $noAngkot Tidak Tersedia <br />";
            }
        }
    }
    echo AngkotSederhana(1, 20,);
?>