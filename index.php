<!-- Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)-->

<?php
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

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center text-uppercase container pt-3 pb-2">hotel più belli d'italia</h1>

    <form class="container pb-3" action="./index.php" method="get">

        <div class="mb-3 ">
            <label for="parking" class="form-label"> inserisci Hotel</label>
            <input class="form-control" type="text" name="parking" id="parking">
        </div>

        <div class="mb-3 ">
            <label for="vote" class="form-label">Inserisci Voto</label>
            <input class="form-control"  type="number" name="vote" id="vote">
        </div>

        <button class="btn btn-primary ms-2" type="submit">Invia</button>

    </form>



    <!-- ESERCIZIO USANDO LE TABLE DI BOOTSTRAP -->

    <table class="table container">

        <thead>
            <tr>
                <th scope="col">nome hotel</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance_to_center</th>
            </tr>
        </thead>
        <?php foreach ($hotels as $hotel) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $hotel['name']; ?></th>
                    <td><?php echo $hotel['description']; ?></td>
                    <td>
                        <?php
                        $park = 'Parking';
                        $nopark = 'Noparking';
                        if ($hotel['parking'] === true) {
                            echo $park;
                        } else {
                            echo $nopark;
                        }

                        ?>
                    </td>
                    <td><?php echo $hotel['vote']; ?></td>
                    <td><?php echo $hotel['distance_to_center']; ?> km </td>
                </tr>

            </tbody>
        <?php } ?>
    </table>




</body>

</html>

<!--<ul class="p-0">

     <#?php foreach ($hotels as $hotel) { ?#>
            <li>
                <#?php echo $hotel['name']  ; ?>
            </li>
        <#?php } ?#>

    </ul>-->



    
    <!-- ESERCIZIO USANDO LE CARD DI BOOTSTRAP -->

    <!--<div class="container pt-4 ">
        <div class="row ">-->

        <? #php foreach ($hotels as $hotel) { 
    ?>
    <!-- <div class="col-lg-6 mb-3">
                    <div class="card mx-lg-2">
                        <div class="card-body">
                            <h5 class="card-title"><#?php echo $hotel['name']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><#?php echo $hotel['description']; ?></h6>
                            <p> <#?php
                                $park = 'Parking';
                                $nopark = 'Noparking';
                                if ($hotel['parking'] === true) {
                                    echo $park;
                                } else {
                                    echo $nopark;
                                }

                                ?></p>
                            <h5> Voto dell'hotel: <#?php echo $hotel['vote']; ?></h5>
                            <h5> Distanza dal centro <#?php echo $hotel['distance_to_center']; ?> km </h5>



                        </div>
                    </div>
                </div>-->
    <? #php } 
    ?>

    <!--</div>
    </div>-->
