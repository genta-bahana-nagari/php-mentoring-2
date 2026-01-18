<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Verifikasi Penerima Beasiswa</h3>

                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">Nilai</label>
                                <input type="number" name="score" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Penghasilan</label>
                                <input type="number" name="earnings" class="form-control" required>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" name="achievement" class="form-check-input" id="achievement">
                                <label class="form-check-label" for="achievement">Juara Lomba</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Cek Beasiswa</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $score = $_POST['score'];
                            $earnings = $_POST['earnings'];
                            $achievement = isset($_POST['achievement']);

                            if (($score >= 85 && $earnings <= 3000000) || $achievement) {
                                echo '<div class="alert alert-success mt-4 text-center">Selamat, Anda mendapatkan beasiswa!</div>';
                            } else {
                                echo '<div class="alert alert-danger mt-4 text-center">Maaf, Anda tidak mendapatkan beasiswa.</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
