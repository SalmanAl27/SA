<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Faktorial</title>
    <link rel="stylesheet" href="style.css">
    <script>
    function hitung() {
        n = parseFloat(document.iniform.bil.value);
        if (isNaN(n))
            n = 0.0;
        fak = 1;
        for (x = 1; x <= n; x++) {
            fak = fak * x;
        }
        document.iniform.hasil.value = fak;
    }
    </script>

</head>

<body>
    <div class="a">
        <form name="iniform">
            <h1>Menghitung Faktorial</h1>
            <div class="aaa">
                <label for="b">Faktorial :</label>
                <input type="number" name="bil">
            </div>
            <div class="aaa">
                <br>
                <input type="button" value="Cek Hasil" onclick="hitung()">
                <input name="hasil">
            </div>
        </form>
        <div class="aa">
            <a href="index.php">
                <button>Back to Menu</button>
            </a>
        </div>
    </div>

</body>

</html>