<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<title>Display</title>
</head>
<body>
    <div class="container my-5 ">
    <h1 class="text-center">Diplay Data using Ajax</h1>
        <div class="row col-sm-12 justify-content-center ">
            <div class="col-sm-8">
                <button id="displaybtn" class="btn btn-primary my-3 ">Display</button>
                <table class="table table-light table-bordered text-center ">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Password</th>
                    </thead>
                    <tbody id="response">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#displaybtn').click(function () {
            $.ajax({
                url : '13displaydata.php',
                type : 'POST',
                success : function (data){
                    $('#response').html(data);
                }
            })
        })
    });
</script>
</body>
</html>