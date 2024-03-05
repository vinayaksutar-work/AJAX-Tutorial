<?php

$conn = mysqli_connect('localhost','root','','ajaxcrud',3307) or die("Failed..". mysqli_error($conn));

extract($_POST);

if(isset($_POST['submit'])){
    $sql = "insert into ajaxinsert (username,password) values('$username','$password')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header('Location: 10insert.php'); 
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>