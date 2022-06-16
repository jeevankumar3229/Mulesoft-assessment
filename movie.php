<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('JaiHo' , 'salman khan' , 'daisy shah' , 'Jeevan' , 2014),('kick' , 'salmankhan' , 'jacqueline' , 'jeevith' , 2018),('zero' , 'shahrukh' , 'anushka' , 'praneeth' , 2014),('pk' , 'amir khan' , 'anushka' , 'bhuvan' , 2021)";       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("stocks added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>