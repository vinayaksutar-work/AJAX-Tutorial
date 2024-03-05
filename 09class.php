<?php 
$conn = mysqli_connect('localhost','root','','project',3307) or die("Failed..". mysqli_error($conn));

if(!$conn){
    echo "Failed to connect";
}else{
    echo "";
}

    $nameid = $_POST['datapost'];
    $sql = "SELECT * FROM class where did = '$nameid' ";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result)) 
    {
?>
        <option><?= $row['cname'] ?></option>
<?php
    }
?>