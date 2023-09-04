<?php

if(isset($_POST['submit'])){
    $delete_books = $_POST['delete_books'];

    
    $conn=mysqli_connect("localhost","root","","student_list") or die("Connection Failed");
    $sql = "DELETE FROM lend_book WHERE id IN ({$delete_books}) ";
    
    if(mysqli_query($conn, $sql)){
        echo 1;
    }else{
        echo 0;
    }
    
    
}





?>