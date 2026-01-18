<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Beasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .checkbox-container input[type="checkbox"] {
            margin-right: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 15px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <h3>Verifikasi Penerima Beasiswa</h3>

            <form method="post">
                <label>Nilai</label>
                <input type="number" name="score" required>

                <label>Penghasilan</label>
                <input type="number" name="earnings" required>

                <div class="checkbox-container">
                    <input type="checkbox" name="achievement" id="achievement">
                    <label for="achievement">Juara Lomba</label>
                </div>

                <button type="submit">Cek Beasiswa</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $score = $_POST['score'];
                $earnings = $_POST['earnings'];
                $achievement = isset($_POST['achievement']);

                if (($score >= 85 && $earnings <= 3000000) || $achievement) {
                    echo '<div class="alert alert-success">Selamat, Anda mendapatkan beasiswa!</div>';
                } else {
                    echo '<div class="alert alert-danger">Maaf, Anda tidak mendapatkan beasiswa.</div>';
                }
            }
            ?>
        </div>
    </div>

</body>
</html>
