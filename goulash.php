<?php
// Učitaj XML sa sastojcima
$ingredientsXml = simplexml_load_file("ingredients.xml");

// Pronađi sastojke za gulaš
$goulashIngredients = [];
foreach ($ingredientsXml->dish as $dish) {
    if ((string) $dish['name'] === "Goulash") {
        foreach ($dish->item as $item) {
            $goulashIngredients[] = (string) $item;
        }
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Gulaš - EuroDish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dish-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .description {
            font-size: 1rem;
            color: #333;
            text-align: justify;
        }
        .flag {
            width: 40px;
            height: auto;
            margin-right: 10px;
        }
        .ingredients-table {
            margin-top: 30px;
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

<!-- NAVIGACIJA -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="images/gps.png" alt="Europe Icon" width="30" height="30" class="me-2">
            <span class="fw-bold">EuroDish</span>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="index.html" class="nav-link">Početna</a></li>
                <li class="nav-item"><a href="dishes.php" class="nav-link">Jela</a></li>
                <li class="nav-item"><a href="chefs.html" class="nav-link">Kuhari</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- SADRŽAJ -->
<div class="container">
    <h1 class="mb-3">Gulaš</h1>
    <img src="images/goulash.jpg" alt="Gulaš" class="dish-image">

    <p class="description">
        Gulaš je vrsta guste juhe koja se može pripremati s raznim vrstama mesa. Sadrži niz sastojaka, između ostalog krumpir, luk, rajčicu, češnjak, papar, ljutu papriku i slično. Kuha se nekoliko sati.

        Riječ dolazi od mađarske riječi gulyás koja u doslovnom prijevodu znači govedar, pastir, čoban, a izvedena je od mađarske riječi za govedo.

        Izvorno se radilo isključivo o jelu spravljenom od govedine, kasnije i ovčetine, da bi se vremenom proširilo na gotovo sve vrste mesa, uključujući i meso divljači.

        Omiljen je u raznim kuhinjama zemalja bivše Austro-Ugarske kao primjerice u Hrvatskoj, Sloveniji, Slovačkoj, Češkoj, Bosni i Hercegovini i Austriji.
    </p>

    <!-- KARTA -->
    <div class="mb-3 d-flex align-items-center">
        <img src="flags/hungary.png" alt="Mađarska" class="flag">
        <strong>Mađarska</strong>
    </div>
    <div class="my-4">
        <img src="images/maps/hungarymap.png" alt="Karta Mađarske" style="width:100%; max-width:600px; border-radius:10px;">
    </div>

    <!-- TABLICA SA SASTOJCIMA -->
    <div class="ingredients-table">
        <h5 class="mb-3">Sastojci</h5>
        <table class="table table-bordered bg-white">
            <thead class="table-light">
                <tr>
                    <th>Sastojak</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($goulashIngredients as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- FOOTER -->
<footer>
    © 2025 EuroDish. Sva prava pridržana.
</footer>

</body>
</html>
