<?php
$ingredientsXml = simplexml_load_file("ingredients.xml");

$paellaIngredients = [];
foreach ($ingredientsXml->dish as $dish) {
    if ((string) $dish['name'] === "Paella Valenciana") {
        foreach ($dish->item as $item) {
            $paellaIngredients[] = (string) $item;
        }
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Paella Valenciana - EuroDish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
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

<div class="container">
    <h1 class="mb-3">Paella Valenciana</h1>
    <img src="images/paella.jpg" alt="Paella Valenciana" class="dish-image">

    <p class="description">
        Paella Valenciana je tradicionalna verzija paelle iz regije Valencia, a vjeruje se da je to izvorni recept. Sastoji se od riže iz Valencije, maslinovog ulja, zeca, piletine, šafrana ili njegovih zamjena, rajčice, ravnih zelenih mahuna (ferradura), graha lima, soli i vode. Ponekad se začinjava i cijelim grančicama ružmarina.

        Tradicionalno se žuta boja dobiva šafranom, ali se mogu koristiti i kurkuma ili neven. Artičoke su često sezonski dodatak. Najčešće se koristi bomba riža, ali i sorta senia. 

        Druge popularne varijante uključuju morsku (paella de marisco) i miješanu (paella mixta) verziju. Paella je danas poznata diljem Španjolske i svijeta, a u Španjolskoj je često jelo četvrtkom u restoranima.
    </p>

    <div class="mb-3 d-flex align-items-center">
        <img src="flags/spain.png" alt="Španjolska" class="flag">
        <strong>Španjolska</strong>
    </div>
    <div class="my-4">
        <img src="images/maps/spainmap.svg" alt="Karta Španjolske" style="width:100%; max-width:600px; border-radius:10px;">
    </div>

    <div class="ingredients-table">
        <h5 class="mb-3">Sastojci</h5>
        <table class="table table-bordered bg-white">
            <thead class="table-light">
                <tr><th>Sastojak</th></tr>
            </thead>
            <tbody>
                <?php foreach ($paellaIngredients as $item): ?>
                    <tr><td><?= htmlspecialchars($item) ?></td></tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<footer>
    © 2025 EuroDish. Sva prava pridržana.
</footer>

</body>
</html>
