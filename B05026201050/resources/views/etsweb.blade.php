<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input Data Barang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <h6>Raysa Farah Mumtaz Ramadina <br> Raysa <br> 5026201050 </h6> <br>
    <h2>Form Input Data Barang</h2> <br>
    <form action="https://www.google.com/">
    <div class="form-row">
    <div class="col-2">
    <label for="namabarang">Nama Barang </label>
    </div>
    <div class="col-1">
    <p>:</p>
    </div>
    <div class="col">
    <input type="text" id="namabarang" name="namabarang" required>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-2">
    <label for="harga">Harga </label>
    </div>
    <div class="col-1">
    <p>:</p>
    </div>
    <div class="col">
    <input type="text" id="harga" name="harga" pattern="[0-9]{4,}" title="Required, must be numeric only, and minimal 5000." required>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-2">
    <label for="jenis">Jenis Barang </label>
    </div>
    <div class="col-1">
    <p>:</p>
    </div>
    <div class="col">
    <select id="jenis" name="jenis" required>
        <option value=""> </option>
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Non Mamin">Non Mamin</option>
    </select>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-2">
    <label for="kode">Kode Barcode </label>
    </div>
    <div class="col-1">
    <p>:</p>
    </div>
    <div class="col">
    <input type="text" id="kode" name="kode" required>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </div>
    <div class="col">
    <input type="reset" value="Reset">
    </div>
    </div>

    </form>
</div>
</body>
<script>
    $("button").click(function() {
        let namabarang = $("#namabarang").val();
        let kode = $("#kode").val();

        if (namabarang.length >= 10) {
            alert("Required dan minimal 10 karakter")
        }
        if (kode.length >= 10) {
            alert("Required dan minimal 10 digit")
        }
    });
</script>
</html>
