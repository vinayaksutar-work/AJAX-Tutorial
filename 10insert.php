<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<title>insert</title>
</head>
<body>
    <div class="container">
        <div class="row col-sm-12 justify-content-center my-5">
            <div class="col-sm-8">
                <h1>Insert Data Using Ajax, PHP and MYSQLI</h1>
                <form id="myform" action="11insertdata.php" method="post">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control">
                    <label>Password:</label>
                    <input type="text" name="password" class="form-control">
                    <input type="submit" class="btn btn-success my-3" id="submit"
                    name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var form = $('#myform');
        $('#submit').click(function () {
            $.ajax({
                url : form.attr("action"),
                type : 'POST',
                data : $('#myform input').serialize(),
                success : function (data) {
                    console.log(data);
                }
            });
        });
    });
</script>
</body>
</html>