<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian | @yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <style>
        body {
            background-color: #48cae4;
            font-size: 16px
        }

        table {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
        }

        .box {
            background-color: #caf0f8;
            margin: 10px;
            padding: 10px;
            border: solid 1px black;
            border-radius: 10px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <div class="container" style="margin-bottom: 15px; margin-top: 15px">
            <div class="row">
                <div class="col-lg-1">
                    <img src={{ asset('profil.png') }} style="width: 100%; padding-top: 3px">
                </div>
                <div class="col-lg-6">
                    <p style="font-size: 20px"><br> Ziaul Haq Al Karimi <br> 5026201123 </p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 box">
                <div class="container"><a href="/pegawai">Pegawai</a></div>
                <div class="container"><a href="/absen">Absen</a></div>
                <div class="container"><a href="/pendapatan">Pendapatan</a></div>
                <div class="container"><a href="">Minggu Depan</a></div>
                <div class="container"><a href="">Praktikum</a></div>
            </div>

            <div class="col-lg-7 box">
                @yield('judulhalaman')<br>
                @section('konten')
                @show
            </div>
        </div>
    </div>

    <footer>
        <div class="container" style="padding-top: 100px">Hak Cipta Oleh 5026201123 - Ziaul Haq Al Karimi</div>
    </footer>

</body>

</html>
