<?php
$ingredientsXml = simplexml_load_file("ingredients.xml");

$risottoIngredients = [];
foreach ($ingredientsXml->dish as $dish) {
    if ((string) $dish['name'] === "Risotto alla Milanese") {
        foreach ($dish->item as $item) {
            $risottoIngredients[] = (string) $item;
        }
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Risotto alla Milanese - EuroDish</title>
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
    <h1 class="mb-3">Risotto alla Milanese</h1>
    <img src="images/risotto.webp" alt="Risotto alla Milanese" class="dish-image">

    <p class="description">
        Specijalitet Milana, risotto alla Milanese, priprema se s goveđim temeljcem, moždinom, mašću (umjesto maslaca) i sirom, a začinjava se i boji šafranom. To je talijansko jelo od riže koje se kuha s temeljcem dok ne postigne kremastu konzistenciju. Temeljac može biti od mesa, ribe ili povrća.

        Mnogi tipovi rižota sadrže maslac, luk, bijelo vino i parmezan. To je jedan od najčešćih načina pripreme riže u Italiji. Šafran se izvorno koristio zbog arome i prepoznatljive žute boje.

        U Italiji se risotto često poslužuje kao prvo jelo (primo), prije glavnog jela (secondo), no risotto alla Milanese često se poslužuje s ossobuco alla Milanese kao kompletan glavni obrok.
    </p>

    <div class="mb-3 d-flex align-items-center">
        <img src="flags/italy.png" alt="Italija" class="flag">
        <strong>Italija</strong>
    </div>
    <div class="my-4">
        <img src="images/maps/italymap.png" alt="Karta Italije" style="width:100%; max-width:600px; border-radius:10px;">
    </div>

    <div class="ingredients-table">
        <h5 class="mb-3">Sastojci</h5>
        <table class="table table-bordered bg-white">
            <thead class="table-light">
                <tr><th>Sastojak</th></tr>
            </thead>
            <tbody>
                <?php foreach ($risottoIngredients as $item): ?>
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
