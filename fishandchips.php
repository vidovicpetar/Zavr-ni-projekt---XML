<?php
$ingredientsXml = simplexml_load_file("ingredients.xml");

$fishChipsIngredients = [];
foreach ($ingredientsXml->dish as $dish) {
    if ((string) $dish['name'] === "Fish and Chips") {
        foreach ($dish->item as $item) {
            $fishChipsIngredients[] = (string) $item;
        }
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Fish and Chips - EuroDish</title>
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
    <h1 class="mb-3">Fish and Chips</h1>
    <img src="images/fishandchips.jpg" alt="Fish and Chips" class="dish-image">

    <p class="description">
        Fish and chips je vruće jelo koje se sastoji od pohane i pržene ribe poslužene s krumpirićima. Često se smatra nacionalnim jelom Ujedinjenog Kraljevstva, a potječe iz Engleske u 19. stoljeću. Danas je to uobičajena hrana za van u brojnim drugim zemljama, posebno u engleskom govornom području i zemljama Commonwealtha.

        Prve trgovine fish and chips pojavile su se u Ujedinjenom Kraljevstvu 1860-ih, a do 1910. ih je bilo više od 25.000. Taj broj je do 1930-ih porastao na 35.000, da bi do 2009. pao na oko 10.000.

        Britanska vlada osigurala je opskrbu fish and chipsom tijekom Prvog i Drugog svjetskog rata. To je bilo jedno od rijetkih jela koje nije bilo podložno racioniranju, što je dodatno doprinijelo njegovoj popularnosti.
    </p>

    <div class="mb-3 d-flex align-items-center">
        <img src="flags/united-kingdom.png" alt="UK" class="flag">
        <strong>Ujedinjeno Kraljevstvo</strong>
    </div>
    <div class="my-4">
        <img src="images/maps/ukmap.jpg" alt="Karta UK" style="width:100%; max-width:600px; border-radius:10px;">
    </div>

    <div class="ingredients-table">
        <h5 class="mb-3">Sastojci</h5>
        <table class="table table-bordered bg-white">
            <thead class="table-light">
                <tr><th>Sastojak</th></tr>
            </thead>
            <tbody>
                <?php foreach ($fishChipsIngredients as $item): ?>
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
