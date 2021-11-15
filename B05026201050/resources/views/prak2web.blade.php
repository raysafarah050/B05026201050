<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-color: #ADD8E6;
    }
</style>
<body>
<div class="container">
    <h2>Registration Form</h2> <br>
    <form action="https://www.google.com/">
    <div class="form-row">
    <div class="col-1">
    <label for="userid">User id: </label>
    </div>
    <div class="col">
    <input class="form-control" type="text" id="userid" name="userid" required>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="pwd">Password: </label>
    </div>
    <div class="col">
    <input class="form-control" type="password" id="pwd" name="pwd" required>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="name">Name: </label>
    </div>
    <div class="col">
    <input class="form-control" type="text"  id="name" name="name" pattern="[a-zA-z]{1,}" title="Required and alphabets only." required>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="address">Address: </label>
    </div>
    <div class="col">
    <input class="form-control" type="text" id="adress" name="address">
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="country">Country: </label>
    </div>
    <div class="col">
    <select class="form-control" id="country" name="country" required>
        <option value="">(Please select a country)</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Japan">Japan</option>
        <option value="Australia">Australia</option>
    </select>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="zipc">ZIP Code: </label>
    </div>
    <div class="col">
    <input class="form-control" type="text" id="zipc" name="zipc" pattern="[0-9]{1,}" title="Required and must be numeric only." required>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="email">Email: </label>
    </div>
    <div class="col">
    <input class="form-control" type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Required and must be a valid email." required>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="sex">Sex: </label>
    </div>
    <div class="col">
    <input class="" type="radio" id="male" name="sex" required>
    <label for="male">Male</label>
    <input class="" type="radio" id="female" name="sex" required>
    <label for="female">Female</label>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="lang">Language: </label>
    </div>
    <div class="col">
    <input class="" type="checkbox" id="english" name="lang" value="English">
    <label for="english">English</label>
    <input class="" type="checkbox" id="nonenglish" name="lang" value="Non English">
    <label for="nonenglish">Non English</label>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col-1">
    <label for="about">About: </label>
    </div>
    <div class="col">
    <textarea class="form-control" name="message" rows="10" cols="60"></textarea>
    </div>
    </div> <br>

    <div class="form-row">
    <div class="col">
    <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
    </div>
    </div>

    </form>
</div>
</body>
<script>
    $("button").click(function() {
        let userid = $("#userid").val();
        let pwd = $("#pwd").val();
        let checked = $("input[type=checkbox]:checked").length;

        if (userid.length < 5 || userid.length > 12) {
            alert("Required and must be length of 5 to 12")
        }
        if (pwd.length < 7 || pwd.length > 12) {
            alert("Required and must be length of 7 to 12")
        }
        if(!checked) {
            alert("Check at least one language");
            return false;
        }
    });
</script>
</html>
