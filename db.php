<?php
    
 //$connect = mysqli_connect("samcarrecmsam.mysql.db", "samcarrecmsam", "4Carrelage", "samcarrecmsam");
 $connect = mysqli_connect("localhost", "root", "", "samcarrecmsam");
 /* check connection */
 if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
 } 
