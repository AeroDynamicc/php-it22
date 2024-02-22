<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sõiduaeg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Sõiduaeg</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="start">Stardi aeg (hh:mm):</label>
                        <input type="text" class="form-control" id="start" name="start">
                    </div>
                    <div class="mb-3">
                        <label for="end">Lõppaja (hh:mm):</label>
                        <input type="text" class="form-control" id="end" name="end">
                    </div>
                    <button type="submit" class="btn btn-primary" name="calculate">Arvuta</button>
                </form>
                <?php
                if(isset($_POST['calculate'])) {
                    $start = $_POST['start'];
                    $end = $_POST['end'];
                    
                    if(empty($start) || empty($end) || strlen($start) < 5 || strlen($end) < 5) {
                        echo '<div class="alert alert-danger mt-3" role="alert">Palun sisesta nii stardi kui lõppaja korrektselt!</div>';
                    } else {
                        // Arvutame sõiduaja
                        $start_time = strtotime($start);
                        $end_time = strtotime($end);

                        $diff = $end_time - $start_time;
                        $hours = floor($diff / (60 * 60));
                        $minutes = floor(($diff - ($hours * 60 * 60)) / 60);

                        echo '<div class="alert alert-success mt-3" role="alert">Sõiduaeg: ' . $hours . ' tundi ja ' . $minutes . ' minutit</div>';
                    }
                }
                ?>

                
            </div>
        </div>
    </div>
</body>
</html>
