<?php
    // MICHAEL D. PHILLIPS - 28/04/2026
    // HEADER
    require "auth.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <title><?php echo $page_title; ?></title>
</head>
<body>
    <div class="container-fluid">
        <br>
        <nav class="navbar navbar-dark bg-dark justify-content-center rounded-2">
            <ul class="navbar-nav flex-row">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/guhring/index.php">Homepage</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/guhring/pages/orders.php?type=incoming">Incoming Orders</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/guhring/pages/orders.php?type=outgoing">Outgoing Orders</a>
                </li>
            </ul>
        </nav>
        <div class="container-sm">
            <h1>GUHRING</h1>
            <h3>Green Bridge Recycling</h3>
        </div>
    </div>