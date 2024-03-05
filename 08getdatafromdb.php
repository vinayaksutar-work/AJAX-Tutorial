<?php

$conn = mysqli_connect('localhost','root','','project',3307) or die("Failed..". mysqli_error($conn));

if(!$conn){
    echo "Failed to connect";
}else{
    echo "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Get Data from Database using Ajax</title>
</head>
<body>
<div class="container my-5 ">
    <div class="row col-sm-12 justify-content-center ">
        <div class="col-sm-6">
            <h2>Get Data From Database</h2>
            <form action="">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control ">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control ">
                <label for="">Degree</label>
                <select class="form-control" onchange="myFunction(this.value)">
                    <option>Choose Degree</option>
                    <?php
                        $sql = "SELECT * FROM degree";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                    ?>
                        <option value="<?= $row['did'] ?>"><?= $row['dname']  ?></option>
                    <?php
                        } 
                    ?>
                </select>
                <label for="">Class</label>
                <select class="form-control " id="dataget">
                    <option>Choose Class</option>
                </select>
                <button class="btn btn-primary my-3 ">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function myFunction(datavalue){
        $.ajax({
            url : '09class.php',
            type : 'POST',
            data : { datapost : datavalue },
            success : function(result){
                $('#dataget').html(result);
            }
        });
    }
</script>
</body>
</html>