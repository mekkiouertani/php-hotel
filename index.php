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
    <main class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Hotel</th>
                    <th scope="col">Description</th>
                    <th scope="col">Distance to center</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <td scope="row">
                            <?php echo $hotel['name'] ?>
                        </td>
                        <td>
                            <?php echo $hotel['description'] . '!' ?>
                        </td>
                        <td>
                            <?php echo $hotel['vote'] . 'km' ?>
                        </td>
                        <td>
                            <?php echo $hotel['parking'] ? 'Parcheggio Incluso' : 'Parcheggio Non Incluso' ?>
                        </td>
                        <td>
                            <?php echo $hotel['vote'] . '/5' ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>