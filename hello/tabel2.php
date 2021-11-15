<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    ?>
    <div class="container">
        <h2>Data Mobil</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Merk</th>
                    <th>In Stock</th>
                    <th>Sold</th>
                </tr>
            </thead>
            <tbody>
                <?php ?>
                <?php
                $x = 0;
                $jumbaris = count($cars);
                while ($x <= $jumbaris - 1) {
                ?>
                    <tr>
                        <td><?php echo $cars[$x][0]; ?></td>
                        <td><?php echo $cars[$x][1]; ?></td>
                        <td><?php echo $cars[$x][2]; ?></td>
                    </tr>
                <?php
                    $x++;
                } ?>
            </tbody>
        </table>
    </div>

</body>

</html>