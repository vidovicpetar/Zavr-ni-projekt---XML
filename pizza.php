<?php
// Učitaj XML sa sastojcima
$ingredientsXml = simplexml_load_file("ingredients.xml");

// Pronađi sastojke za pizzu
$pizzaIngredients = [];
foreach ($ingredientsXml->dish as $dish) {
    if ((string) $dish['name'] === "Pizza Napoletana") {
        foreach ($dish->item as $item) {
            $pizzaIngredients[] = (string) $item;
        }
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Pizza Napoletana - EuroDish</title>
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
    <h1 class="mb-3">Pizza Napoletana</h1>
    <img src="images/pizza.jpg" alt="Pizza Napoletana" class="dish-image">

    <p class="description">
        Najemblematičnije kulinarsko jelo Italije – prava pizza napoletana – priprema se od samo nekoliko jednostavnih sastojaka i dolazi u dvije osnovne varijante: marinara (s rajčicom, češnjakom i origanom) i margherita (s rajčicom, mozzarellom i bosiljkom), čije boje simboliziraju talijansku zastavu.

        Tijesto je vrlo tanko na sredini, a na rubovima se napuhuje i razvija karakteristične pjege – tzv. „leopardove mrlje“. Prve naznake ovog jela datiraju iz ranih 1700-ih, kad ga je opisao talijanski kuhar Vincenzo Corrado. Gotovo 200 godina kasnije, pizzaiolo Raffaele Esposito dodaje mozzarellu i stvara margheritu, posvećenu kraljici Margheriti od Savoje.

        Godine 2010. pizza napoletana dobiva status Tradicionalnog zajamčenog specijaliteta u EU. Autentična pizza napoletana ne treba dodatne sastojke – njezina čarolija je u jednostavnosti i kvaliteti osnovnih sastojaka.
    </p>

    <!-- KARTA -->
     <div class="mb-3 d-flex align-items-center">
        <img src="flags/italy.png" alt="Italija" class="flag">
        <strong>Italija</strong>
    </div>
    <div class="my-4">
        <img src="images/maps/italymap.png" alt="Karta Italije" style="width:100%; max-width:600px; border-radius:10px;">
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
                <?php foreach ($pizzaIngredients as $item): ?>
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
