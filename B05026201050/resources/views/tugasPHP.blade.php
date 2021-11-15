<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sum of Squares Calculator</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        </script>
        <style>
            body {
                margin: 50px;
                background-image: url("images/math.jpg");
            }
            p {
                text-align: left;
            }
            h2 {
                text-align: center;
            }
            .container {
                background-color:lightcyan;
                align-items:center;
                justify-content: center;
                padding: 30px;
            }
            label {
                width: 400px;
                text-align:right;
                margin-right: 20px;
                font-size: 20px;
            }
            .submit{
                width: 150px
            }


        </style>
    </head>

    <body>
        <div class="container">
            <h2>Sum of Squares</h2><br>
            <form action="sumofsquares" method="get" name="sumofsquares">
                @csrf
            <div class="row mt-3">
                <div class="col-5">
                    <label>Input number :</label>
                </div>
                <div class="col-5">
                    <input class="nomor" size="50" name="number" required>
                </div>
            </div>
            <br>
            <div class="button mt-3 text-center">
                    <button class="btn-primary submit mr-3" type="submit">Submit</button>
            </div>
            </form>


    </body>

</html>
