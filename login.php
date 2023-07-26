<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "javatpoint";
    $db_username="Murali"
    $db_password="Mur@li2022"	    
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
