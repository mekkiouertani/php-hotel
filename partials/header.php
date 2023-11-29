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

    <header class="container mt-5">
        <form action="index.php" method="GET">
            <select name="parking" id="parking" class="form-select">
                <option value="all">Con o Senza Parcheggio</option>
                <option value="0">Parcheggio Non Incluso
                </option>
                <option value="1">Parcheggio Incluso
                </option>
            </select>
            <select name="vote" id="vote" class="form-select mt-3">
                <option value="all">Filtra per Voto</option>
                <option value="1">1 stella</option>
                <option value="2">2 stelle</option>
                <option value="3">3 stelle</option>
                <option value="4">4 stelle</option>
                <option value="5">5 stelle</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Cerca</button>
        </form>
    </header>