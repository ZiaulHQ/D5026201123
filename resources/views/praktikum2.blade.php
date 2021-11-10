<!DOCTYPE html>
<html>

<head>
    <title>
        Praktikum PWEB 2 5026201123
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            font-family: sans-serif;
            font-size: 16px;
        }
        .judul {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding: 10px 0px 10px 0px;
            background-color: rgb(255, 252, 212);
            border: 1px solid black;
            border-radius: 10px 10px 0px 0px;
            border-bottom: 0px;
            width: 80%;

        }
        .mainform {
            border-radius: 2%;
            border: 1px solid black;
            border-radius: 0px 0px 10px 10px;
            border-top: 0px;
            width: 80%;
        }
        .button1{
            background-color: orange;
            border-radius: 4px;
            text-align: center;
            margin: auto;
            color: white;
            border: 0px;
            width:100%;
            padding: 10px 0px 10px 0px;
        }
    </style>
</head>

<body>
    <div class="container pt-4">
        <div class="container judul">
            <p>JavaScript Form Validation</p>
        </div>
        <div class="container pt-4 pb-4 mainform">
            <p style="font-size: 12px; color: red;">* All fields are mandatory *</p>
            <form method="post" action="https://www.bukalapak.com/" name="form1" id="form1" onsubmit="return validasi()">

                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" required pattern="[A-Za-z\s]{0,}" title="Gunakan kombinasi huruf">

                <label for="username">Username(6-8 characters):</label>
                <input type="text" class="form-control" id="username" required pattern=".{6,8}" title="Isikan 6-8 karakter">

                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" required>

                <script>
                    function validasi() {
                        if (document.form1.state.value == "default") {
                            alert("Silahkan isi asal negara Anda");
                            return false;
                        }
                        return true;
                    }
                </script>
                <label for="state">State:</label>
                <select id="state" class="form-control" name="state">
                    <option value="default" disabled selected>Please Choose</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Singapura">Singapura</option>
                    <option value="Malaysia">Malaysia</option>
                </select>

                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" required>

                <label for="zipcode">Zip Code:</label>
                <input type="text" class="form-control" id="zipcode" required pattern="[0-9]{6,6}" title="Harus berisikan 6 angka">
                <br>
                <button class="button1" type="submit">Check Form</button>
            </form>
        </div>
    </div>
</body>

</html>
