<?php
$xml = simplexml_load_file("dishes.xml");
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Top 10 jela Europe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dish-card img {
            object-fit: cover;
            height: 220px;
        }
        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
        }
        .summary-text {
            font-size: 0.95rem;
            color: #555;
        }
        .btn-details {
            margin-top: 10px;
        }
        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 20px 0;
            margin-top: 60px;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="images/gps.png" alt="Europe Icon" width="30" height="30" class="me-2">
            <span class="fw-bold">EuroDish</span>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="index.html" class="nav-link">Početna</a></li>
                <li class="nav-item"><a href="dishes.php" class="nav-link active">Jela</a></li>
                <li class="nav-item"><a href="chefs.html" class="nav-link">Kuhari</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <h1 class="mb-4 text-center">Top 10 jela Europe</h1>

    <div class="row g-4">
        <?php foreach ($xml->dish as $dish): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card dish-card shadow-sm h-100">
                    <img src="<?= $dish->image ?>" class="card-img-top" alt="<?= $dish->name ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $dish->name ?></h5>
                        <p class="summary-text"><?= $dish->summary ?></p>
                        <a href="<?= $dish->link ?>" class="btn btn-outline-primary w-100 btn-details">Pogledaj detalje</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<footer>
    © 2025 EuroDish. Sva prava pridržana.
</footer>

</body>
</html>
