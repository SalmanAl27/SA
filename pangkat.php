<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Pangkat</title>
    <link rel="stylesheet" href="style.css">
    <script>
    function pangkat() {
        var bil1 = document.getElementById("bil1").value;
        var bil2 = document.getElementById("bil2").value;
        var hasil = parseInt(bil1) ** parseInt(bil2);

        document.getElementById("hasil").value = hasil;

    }
    </script>
</head>

<body>
    <div class="a">
        <h1>Menghitung Pangkat</h1>
        <div class="aaa">
            <label for="a">Angka :</label>
            <input type="number" id="bil1">
            <br>
        </div>
        <div class="aaa">
            <label for="b">Pangkat :</label>
            <input type="number" id="bil2">
        </div>
        <div class="aaa">
            <br>
            <button onclick="pangkat()">Cek Hasil</button>
            <input type="text" id=hasil>

        </div>


        <div class="aa">
            <a href="index.php">
                <button>Back to Menu</button>
            </a>
        </div>


    </div>




</body>

</html>