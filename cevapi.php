<?php
// Učitaj XML sa sastojcima
$ingredientsXml = simplexml_load_file("ingredients.xml");

// Pronađi sastojke za ćevape
$cevapiIngredients = [];
foreach ($ingredientsXml->dish as $dish) {
    if ((string) $dish['name'] === "Ćevapi") {
        foreach ($dish->item as $item) {
            $cevapiIngredients[] = (string) $item;
        }
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Ćevapi - EuroDish</title>
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
    <h1 class="mb-3">Ćevapi</h1>
    <img src="images/cevapi.webp" alt="Ćevapi" class="dish-image">

    <p class="description">
        Ćevapi (tur. kebap – „na komadiće izrezano meso” ili „nasjeckano meso”), poznati i kao ćevapčići, jelo su od mljevenog mesa, popularno u Bosni i Hercegovini i državama Jugoistočne Europe još od doba Osmanskog Carstva. Poznati su u dijelovima Jugoistočne Europe u kojima su vladali Turci, ali receptura nije svugdje ista – rabe se različite vrste mesa, poput telećeg, svinjskog i junećeg, ili kombinacija ovih triju vrsta mesa.

        Na područje Bosne, gdje su nacionalni specijalitet, ćevape su oko 1500. uvezli Turci. Ćevapi se služe u krušnoj lepinji odnosno somunu koje se može po želji politi posebnim umakom koji daje posebnu aromu. Pripremaju se na više načina, a recepti su tajni. Poznatiji su sarajevski, banjalučki, travnički i šiš-ćevap. Ne koristi se svinjetina kao sastojak.

        U Hrvatskoj su različitih kombinacija mesa, ovisno o proizvođaču, i poslužuju se s lukom, ajvarom i/ili kajmakom, u lepinji koja je namočena temeljcem i zapečena na plati i vrhnjem. Uz ćevape se tradicijski pije pivo.

        U Bugarskoj i Rumunjskoj ćevapi su dugački i imaju oko 15 cm pa i više. Prateći specijalitet su „đulbastije” koje se pripremaju slično, ali izgledaju kao male pljeskavice. U Srbiji su poznati oni iz Leskovca gdje se poslužuju isključivo na tanjuru, s lukom.
    </p>

    <!-- KARTA -->
    <div class="mb-3 d-flex align-items-center">
        <img src="flags/bosnia-and-herzegovina.png" alt="Bosna i Hercegovina" class="flag">
        <strong>Bosna i Hercegovina</strong>
    </div>
    <div class="my-4">
        <img src="images/maps/bosniamap.png" alt="Karta Bosne" style="width:100%; max-width:600px; border-radius:10px;">
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
                <?php foreach ($cevapiIngredients as $item): ?>
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
