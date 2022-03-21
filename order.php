<?php
    //order.php
    $connection = mysqli_connect("localhost", "wdev", "pbc1990!", "wdev");    //DB 접속
    $i = 0;
    foreach($_POST['faq'] as $value) {
        $query = "UPDATE mari SET orderno = $i WHERE no = $value";
        mysqli_query($connection, $query);
        $i++;
    }