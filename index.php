<?php
include __DIR__ . '/Model/db.php';
//var_dump($hotels);

if (isset($_GET['parking']) && isset($_GET['vote'])) {
    $parkingFilter = $_GET['parking'];
    $voteFilter = $_GET['vote'];
} else {
    $parkingFilter = 'all';
    $voteFilter = 'all';
}

$filteredHotels = array_filter(
    $hotels,
    fn($hotel) =>
    ($parkingFilter === 'all' || ($parkingFilter) && $hotel['parking']) &&
    ($voteFilter === 'all' || $hotel['vote'] == $voteFilter)
);

/* HEADER */
include_once __DIR__ . '/partials/header.php';
?>


<main class="container mt-5">
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
            <?php if (empty($filteredHotels)) { ?>
                <h3 class="alert alert-danger">
                    Nessun hotel corrispondente ai filtri.
                </h3>
            <?php } else { ?>
                <?php foreach ($filteredHotels as $hotel) { ?>
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
            <?php } ?>
        </tbody>
    </table>
</main>
</body>

</html>