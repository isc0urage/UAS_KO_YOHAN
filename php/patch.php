<?php
	
    $active = mysqli_connect("172.18.0.2", "root", "pandy33", "Trucorp");
    if( !$active){
    	echo "gagal" . PHP_EOL;
    	exit;
    }
    $query = "SELECT * FROM users";
    $result = mysqli_query($active, $query);
    $total_user = 0;
    while( $row = mysqli_fetch_assoc( $result ) ){
            $total_user+=1;
   }	
   echo $total_user;

?>