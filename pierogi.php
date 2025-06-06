<?php
$ingredientsXml = simplexml_load_file("ingredients.xml");

$pierogiIngredients = [];
foreach ($ingredientsXml->dish as $dish) {
    if ((string) $dish['name'] === "Pierogi") {
        foreach ($dish->item as $item) {
            $pierogiIngredients[] = (string) $item;
        }
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Pierogi - EuroDish</title>
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
    <h1 class="mb-3">Pierogi</h1>
    <img src="images/pierogi.jpg" alt="Pierogi" class="dish-image">

    <p class="description">
        Pierogi su punjene knedle izrađene od beskvasnog tijesta koje se puni raznim sastojcima i kuhaju u kipućoj vodi. Ponekad se poslužuju i s ukusnim slanim ili slatkim dodacima. Tipični nadjevi uključuju krumpir, sir, svježi sir, kiseli kupus, mljeveno meso, gljive, voće ili bobičasto voće.

        Slani pierogi često se poslužuju uz kiselo vrhnje, prženi luk ili oboje. Različite varijacije pieroga prisutne su u kuhinjama srednje, istočne i jugoistočne Europe. Iako se vjeruje da knedle potječu iz Azije, u Europu su došle trgovačkim putevima u srednjem vijeku.

        Pierogi se prvi put dokumentirano spominju još 1682. godine u najstarijoj poljskoj kuharici. U Ukrajini i dijelovima Kanade nazivaju se varenyky, a u Rusiji vareniki ili pelmeni. U modernoj američkoj kuhinji također su popularni, ponekad i pod različitim lokalnim nazivima.
    </p>

    <div class="mb-3 d-flex align-items-center">
        <img src="flags/poland.png" alt="Poljska" class="flag">
        <strong>Poljska</strong>
    </div>
    <div class="my-4">
        <img src="images/maps/polandmap.jpg" alt="Karta Poljske" style="width:100%; max-width:600px; border-radius:10px;">
    </div>

    <div class="ingredients-table">
        <h5 class="mb-3">Sastojci</h5>
        <table class="table table-bordered bg-white">
            <thead class="table-light">
                <tr><th>Sastojak</th></tr>
            </thead>
            <tbody>
                <?php foreach ($pierogiIngredients as $item): ?>
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
