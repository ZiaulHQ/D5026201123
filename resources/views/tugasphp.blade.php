<!DOCTYPE html>
<html>

<head>
    <Title>
        Javascript 5026201123
    </Title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            font-size: medium;
            background-image: url("tile_backgroundphp.png");
        }

        .header {
            background-color: rgb(51, 51, 51);
            opacity: 70%;
            color: rgb(255, 255, 255);
            font-size: x-large;
            padding: 30px;
        }

        .button1 {
            border: solid 2px;
            border-color: rgb(255, 69, 69);
        }

        .hasil {
            border: solid 1px black;
            background-color: white;
        }
    </style>
</head>

<body>
    <header class="header">
        Selamat Datang
    </header>
    <div class="container pb-5" style="background-color: aliceblue;">
        <h1 style="font-size: 25px; padding-top: 25px;">
            String Manipulation
        </h1>
        <p>Manipulasi string (atau penanganan string) adalah proses mengubah, mengurai, menyambung, menempel, atau
            menganalisis string.
            Manipulasi string biasanya hadir sebagai mekanisme atau fitur perpustakaan di sebagian besar bahasa
            pemrograman</p>
        <form method="GET" action="tugasphp2021">
            <div class="container pt-3 pl-0">
                <div class="form-group"></div>
                <label for="kalimat-anda">Kalimat Anda</label>
                <input type="text" class="form-control" id="kalimat-anda" name="kalimat" placeholder="Masukan kalimat">
            </div>
            <br>
            <br>

            <div class="container pl-0">
                <input type="submit" class="btn btn-danger" id="uppercase" name="uppersubmit" value="UpperCase">
            </div>
            <br>
            <div class="container pt-3 hasil">
                <u>Hasil dari UpperCase:</u><br>
                <br>
                <div class="container pl-0">
                    <?php
                    if(isset($_GET["kalimat"])){
                        $upper = $_GET["kalimat"];
                        echo strtoupper($upper);
                    }
                    ?>
                </div>
            </div>
            <br>
            <br>
            <div class="container pl-0">
                <input type="submit" class="btn btn-warning" id="lowercase" value="LowerCase">
            </div>
            <br>
            <div class="container pt-3 hasil">
                <u>Hasil dari LowerCase:</u><br>
                <br>
                <div class="container pl-0">
                    <?php
                        if(isset($_GET["kalimat"])){
                            $lower = $_GET["kalimat"];
                            echo strtolower($lower);
                        }
                    ?>
                </div>
            </div>
        </form>
        <br>
        <br>
        <div class="container">
            <p>Hasil dari UpperCase maupun LowerCase dari kalimat anda juga dapat diliat di Console.</p>
        </div>
    </div>
</body>

</html>
