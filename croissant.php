<?php
// Učitaj XML sa sastojcima
$ingredientsXml = simplexml_load_file("ingredients.xml");

// Pronađi sastojke za croissant
$croissantIngredients = [];
foreach ($ingredientsXml->dish as $dish) {
    if ((string) $dish['name'] === "Croissant") {
        foreach ($dish->item as $item) {
            $croissantIngredients[] = (string) $item;
        }
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Croissant - EuroDish</title>
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
    <h1 class="mb-3">Croissant</h1>
    <img src="images/kroasan.webp" alt="Croissant" class="dish-image">

    <p class="description">
        Kroasan (fr. croissant - "mlađak") je austrijsko pecivo napravljeno od lisnatog tijesta.
        Za izradu je potrebno dan prije napraviti dizano tijesto od brašna, kvasca, jaja, maslaca i soli te ga ostaviti da miruje preko noći.
        Tijesto se tada razvalja u oblik kvadrata i na njega se postavi u kvadrat oblikovani komad hladnog maslaca, tad tijesto složimo poput koverte i razvaljamo ga na tri puta veću površinu, ponovno ga preklopimo u oblik kvadrata. Ovaj postupak ponavljamo tri puta, i na koncu od trokuta izrezanih iz razvaljanog tijesta oblikujemo peciva i pečemo ih.

        Prema predaji, kroasan je nastao u Austriji za vrijeme turske opsade Beča 1683. godine.
        Kako su se pekari, ujutro, prvi u gradu ustajali prvi su primijetili da Turci organiziraju napad i alarmirali su grad. Tako su uvelike pridonijeli obrani i spašavanju Beča. U znak sjećanja na taj događaj napravili su kroasan i oblikovali ga, prema turskom simbolu, kao polumjesec.

        U Francuskoj je kroasan postao poznat zahvaljujući supruzi Luja XVI. Mariji Antoaneti, kćeri austrijske carice Marije Terezije. Francuzi su to pecivo zbog njegova oblika preimenovali u Croissant de lune. Kao i brioš, danas kroasan spada među klasične sastojke francuskog doručka. Kroasan je za razliku od brioša ipak postao mnogo popularniji i rašireniji.

        Kroasan danas nalazimo u različitim varijacijama, prepečen sa sirom, punjen sa šunkom itd., a mnoge razveseljava čokoladni kroasan u kojem nalazimo punjenje od čokolade ili lješnjaka.
    </p>

    <!-- KARTA -->
    <div class="mb-3 d-flex align-items-center">
        <img src="flags/france.png" alt="Francuska" class="flag">
        <strong>Francuska</strong>
    </div>
    <div class="my-4">
        <img src="images/maps/francemap.png" alt="Karta Francuske" style="width:100%; max-width:600px; border-radius:10px;">
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
                <?php foreach ($croissantIngredients as $item): ?>
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
