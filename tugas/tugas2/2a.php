<?php 
    $x = "Nazriel";
    $y = "Bintang";



for ( $i = 1; $i <= 100 ; $i++ ) {

    if ( $i % 3 == 0 && $i % 5 == 0 ) {
        echo "$x $y <br>"; }
    
        elseif ( $i % 3 == 0 ) { 
        echo "$x <br>"; } 
    
        elseif ( $i % 5 == 0 ) { 
        echo "$y <br>"; } 

        else { 
        echo "$i <br>"; } 

}

?>