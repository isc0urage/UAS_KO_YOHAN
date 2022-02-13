<?php
	
    $active = mysqli_connect("172.18.0.2", "root", "pandy33", "Trucorp");
    if( !$active){
    	echo "gagal" . PHP_EOL;
    	exit;
    }
    $query = "SELECT * FROM users";
    $result = mysqli_query($active, $query);
	
    while( $row = mysqli_fetch_assoc( $result ) ){
            "<tr>
              <td>{$row["ID"]}</td>
              <td>{$row["Nama"]}</td>
              <td>{$row["Alamat"]}</td>
              <td>{$row["Jabatan"]}</td>
            </tr>\n";
   }	


?>