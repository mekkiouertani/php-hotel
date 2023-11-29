<?php
include __DIR__ . '/Model/db.php';
//var_dump($hotels);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <?php foreach ($hotels as $hotel) { ?>
            <div>
                <h2>
                    <?php echo $hotel['name'] ?>
                </h2>
                <h6>
                    <?php echo $hotel['description'] ?>
                </h6>
                <p>
                    <?php echo 'Voto: ' . $hotel['vote'] ?>
                </p>
                <p>
                    <?php echo 'Distanza dal centro: ' . $hotel['vote'] . 'km' ?>
                </p>
                <p>
                    <?php echo 'Parcheggio: ' . $hotel['parking'] ?>

                </p>
            </div>
        <?php } ?>
    </main>
</body>

</html>