<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom">
                    <h4 class="text-center">PWEB B</h4>
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/pegawai">Pegawai</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/absen">Absen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/mutasi">Mutasi</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/tumbuhan">Tumbuhan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/nilaikuliah">Nilai Kuliah</a>
            </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div style="background-color:#F8C8DC" class="jumbotron">
                            <div class="col-md-2 col-xs-12">
                                <img src="{{ asset('images/raysa.jpg')}}" class="rounded" style="width:115px;height:140px">
                            </div>
                        <h3>Raysa Farah Mumtaz Ramadina</h3>
                        <h4>5026201050</h4>
                        </div>
                    </div>
                </div>

                <h2><a href="https://www.malasngoding.com"></a></h2>
                <h3>@yield('judulhalaman')</h3>

                @section('isikonten')
                @show
                <footer class="page-footer">
                    <div class="mt-auto text-center">?? 2021 Hak Cipta oleh Raysa Farah Mumtaz Ramadina 5026201050
                    </div>
                </footer>


            </div>
        </div>
    </div>
    <script src="js/scripts.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
</body>
</html>
