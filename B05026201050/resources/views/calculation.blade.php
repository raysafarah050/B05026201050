<!DOCTYPE html>
<html>
<head>
    <title>Sum of Squares</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="alert alert-success alert-dismissible fade show">
    <h3>Calculation Result</h3>
    <div class="row mt-3">
    <div class="col-5">
    <?php
        function sumofSquares($n) {
            if ($n == 0) {
            return 0;
            }
            else {
            return (sumofSquares($n-1)+$n*$n);
            }
        }
        $n = $_GET["number"];
        echo "Sum of squares of ".$n." = ".sumofSquares($n);
    ?>
    </div>
    </div>
</div>
</div>


</body>
</html>
