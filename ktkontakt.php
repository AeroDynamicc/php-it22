<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KT1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }
        body {
            margin: 0;
            padding: 0;
        }
        .jumbo, .navbar {
            background-image: url("https://images.pexels.com/photos/956981/milky-way-starry-sky-night-sky-star-956981.jpeg?cs=srgb&dl=pexels-felix-mittermeier-956981.jpg&fm=jpg");
            background-size: cover;
        }
        .jumbo {
            color: white;
            text-align: center;
            padding: 45px 0; 
            margin-bottom: 0;
        }
        .navbar {
            color: white;
            padding: 15px 0;
        }
        .navbar .navbar-brand, .navbar .navbar-nav .nav-link {
            color: white;
        }
        .post {
            padding: 20px 0;
        }
        .post hr {
            width: 30%; /* Muudetav vastavalt vajaduesele */
            margin: 0 auto; /* Tsentrigeerib joone */
            border-top: 1px solid #1c1c1c; /*Väike joon postituste vahel */
        }
    </style>
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Daniil Meijel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Menüü" aria-controls="Menüü" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="Menüü">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="ktavaleht.php">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ktminust.php">Minust</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ktkontakt.php">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lisa_postitus.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="jumbotron jumbo">
        <div class="container">
            <h1 class="display-4">Praktika IT TV REMONT OÜ</h1>
            <p>Minu praktika HKHKs</p>
        </div>
    </div>
</div>

<div class="container">
    <h1>Kontakt</h1>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="name">Nimi:</label>
                    <input type="text" class="form-control" id="name" placeholder="Sisestage oma nimi">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Sisestage oma emaili aadress">
                </div>
                <div class="form-group">
                    <label for="message">Sõnum:</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Sisestage oma sõnum siia"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Saada</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="contact-info">
                <p><strong>Kontaktandmed:</strong></p>
                <p>Email: meijeldaniil@gmail.com</p>
                <p>Telefon: +5372 2735</p>
                <p>Asukoht: Tallinna mnt 10</p>
            </div>
        </div>
    </div>
</div>

<footer class="fixed-bottom">
    <hr style="border-top: 1px solid black; width: 100%; margin-left: 0; margin-right: auto;">
    <div class="container text-center">
        <i class="bi bi-facebook"></i>
        <p>Daniil Meijel</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
