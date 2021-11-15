<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Matriks</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="a">
        <h1>Menghitung Matriks</h1>
        <div class="aaa">
            <label for="a">Angka :</label>
            <input type="number" id="myNumber">
            <br>
        </div>
        <div class="aaa">
            <button onclick="cek()">Cek</button>
            <p id="demo1"></p>
        </div>


        <div class="aa">
            <a href="index.php">
                <button>Back to Menu</button>
            </a>
        </div>
        <script>
        function cek() {
            //menentukan bilangan prima
            var bil = document.getElementById('myNumber').value
            let pembagi = 0;
            for (let i = 1; i <= bil; i++) {
                if (bil % i == 0) {
                    pembagi++
                }
            }
            if (pembagi == 1) {
                document.getElementById('demo1').innerText = "Bilangan Prima"
            } else if (pembagi == 2) {
                document.getElementById('demo1').innerText = "Bilangan Prima"
            } else {
                document.getElementById('demo1').innerText = "Bukan Bilangan Prima"
            }
        }
        </script>
    </div>
</body>

</html>