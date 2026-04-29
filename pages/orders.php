<?php
    // MICHAEL D. PHILLIPS - 28/04/2026
    // ORDERS PAGE - SHOW ORDERS

    $action = $_GET["type"] ?? "";
    if($action == "incoming"):
        $page_title = "Gühring Incoming Orders";
    elseif($action == "outgoing"):
        $page_title = "Gühring Outgoing Orders";
    else:
        $page_title = "Gühring Orders";
    endif;
    include "../build/header.php";

    if($action == "incoming"):
?>
    <div class="container-fluid">
        <div class="container-sm">
            <h1>Incoming Orders</h1>
            <?php
                
            ?>
        </div>
    </div>
<?php
    elseif($action == "outgoing"): ?>
    <div class="container-fluid">
        <div class="container-sm">
            <h1>Outgoing Orders</h1>
        </div>
    </div>
    
<?php
    else:
?>
    <div class="container-fluid">
        <div class="container-sm">
            <h1>No Order type selected!</h1>
        </div>
    </div>
<?php
    endif;
    include "../build/footer.php";
?>