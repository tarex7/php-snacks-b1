<?php
$results = [
    ["Home" => "Brescia", "Away" => "Varese", "HomeScore" => "102", "AwayScore" => "71"],
    ["Home" => "Fortitudo Bologna", "Away" => "Basket Napoli", "HomeScore" => "56", "AwayScore" => "64"],
    ["Home" => "Pesaro", "Away" => "Venezia", "HomeScore" => "75", "AwayScore" => "85"],
    ["Home" => "Sassari", "Away" => "Cremona", "HomeScore" => "98", "AwayScore" => "82"],
    ["Home" => "Tortona", "Away" => "Trieste", "HomeScore" => "80", "AwayScore" => "74"],
    ["Home" => "Trento", "Away" => "Reggiana", "HomeScore" => "69", "AwayScore" => "77"],
    ["Home" => "Olimpia Milano", "Away" => "Brindisi", "HomeScore" => "92", "AwayScore" => "87"],
    ["Home" => "Treviso", "Away" => "Virtus Bologna", "HomeScore" => "76", "AwayScore" => "113"],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>

</head>
<body>
    <h1>Risultati Lega A</h1>
    <h2>Giornata 29</h2>
    <ul>
        <?php for ($i = 0; $i < count($results); $i++): ?>
        <li><?=$results[$i]['Home']?> - <?=$results[$i]['Away']?> : <strong><?=$results[$i]['HomeScore']?> | <?=$results[$i]['AwayScore']?></strong></li>
        <?php endfor?>
    </ul>
</body>
</html>