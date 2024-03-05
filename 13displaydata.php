<?php

$conn = mysqli_connect('localhost','root','','ajaxcrud',3307) or die("Failed..". mysqli_error($conn));

$sql = "SELECT * FROM ajaxinsert";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['username'] ?></td>
        <td><?= $row['password'] ?></td>
    </tr>
    <?php
}
?>