<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        .mainform {
            border: 1px solid black;
            padding-top: 10px;
            padding-bottom: 100px;
        }

        .center {
            text-align: center;
        }

        .button1 {
            background-color: rgb(45, 45, 255);
            width: 50%;
            text-align: center;
            margin: auto;
            border: 0px;
            color: white;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .button2 {
            background-color: rgb(164, 255, 45);
            width: 50%;
            text-align: center;
            margin: auto;
            border: 0px;
            padding-top: 5px;
            padding-bottom: 5px
        }

        .form {
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>
</head>

<body>
    <div class="container mainform">
        <div class="container">
            <p style="font-size: 16px;">Ziaul Haq Al Karimi<br>
                Haqi<br>
                5026201123
            </p>
        </div>
        <div class="container pt-4">
            <p class="center">Form Input Data Barang</p>
            <form class="form" method="post" action="https://zedemy.com/" name="form1" onsubmit="return validasi()">
                <div class="form-group row">
                    <label class="col" for="nama">Nama Barang</label>
                    <span class="col-1">:</span>
                    <input class="col" type="text" id="nama" required pattern=".{0,10}" title="Maksimal 10 karakter">
                </div>

                <div class="form-group row">
                    <label class="col" for="harga">Harga</label>
                    <span class="col-1">:</span>
                    <input class="col" type="number" id="harga" required min="5000" title="Harga minimal 5000">
                </div>

                <script>
                    function validasi() {
                        if (document.form1.jenis.value == "default") {
                            alert("Silahkan pilih jenis barang");
                            return false;
                        }
                        return true;
                    }
                </script>

                <div class="form-group row">
                    <label class="col" for="jenis">Jenis Barang</label>
                    <span class="col-1">:</span>
                    <select class="col" id="jenis" name="jenis" required>
                        <option value="default" disabled selected>Pilih Jenis Barang</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Non Mamin">Non Mamin</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label class="col" for="barcode">Kode Barcode</label>
                    <span class="col-1">:</span>
                    <input class="col" type="text" id="barcode" required pattern="[0-9]{10,}"
                        title="Barcode minimal 10 angka">
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="container center">
                            <button class="button1" type="submit">Kirim</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container center">
                            <button class="button2" type="reset">Reset</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</body>

</html>
