<?php
$parking = $_GET['park'];
$vote = $_GET['vote'];

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="">PARCHEGGIO:</label>
        <input type="checkbox" name="park">
        <br>
        <label for="">VOTO:</label>
        <input type="number" name="vote">
        <br><br>
        <input type="submit" value="search">
    </form>
    <br><br>
    <section class="container-fluid">
     <div class="row">
        <?php
        for ($i = 0; $i < count($hotels); $i++) {
            $hotel = $hotels[$i];

            if ($parking == 'on') {

                if ($hotel['vote'] == $vote) {
                    echo '<div class="card" style="width: 18rem;">
                            <div class="card-header">' . $hotel['name'] . '</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Descrizione: ' . $hotel['description'] . '</li>
                                <li class="list-group-item">Parcheggio: ' . ($hotel['parking'] ? 'Yes' : 'No') . '</li>
                                <li class="list-group-item">Voto: ' . $hotel['vote'] . '</li>
                                <li class="list-group-item">Distanza dal centro: ' . $hotel['distance_to_center'] . '</li>
                            </ul>
                        </div>';
                } else {

                }

            } else {
                if ($hotel['vote'] == $vote) {
                    echo '<div class="card" style="width: 18rem;">
                            <div class="card-header">' . $hotel['name'] . '</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Descrizione: ' . $hotel['description'] . '</li>
                                <li class="list-group-item">Parcheggio: ' . ($hotel['parking'] ? 'Yes' : 'No') . '</li>
                                <li class="list-group-item">Voto: ' . $hotel['vote'] . '</li>
                                <li class="list-group-item">Distanza dal centro: ' . $hotel['distance_to_center'] . '</li>
                            </ul>
                        </div>';
                } else {

                }
            }
        };

        var_dump($parking);
        var_dump($vote);

        ?>
     </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>


    

