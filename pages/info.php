<?php
    $title = "Информация";
    require_once "./../functions/functions.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once "./../blocks/head.php"; 
?>
</head>
<body onload="onLoad()">
    <?php
        require_once "./../blocks/header.php";
    ?>
    <section class = "main-page">
        <div class = "main-page-container">
            <section class = "info">
                <div class = "info-table">
                    <div class = "info-table-header">
                        Ведущие криптовалюты
                    </div>
                    <div class = "info-table-row">
                        <div class="info-table-col1">Название</div>
                        <div class="info-table-col2">Тикер</div>
                        <div class="info-table-col3">Цена (USD)</div>
                        <div class="info-table-col4">Рыночная капитализация</div>
                        <div class="info-table-col5">Изменение (24ч)</div>
                    </div>

                    <?php 
                        $tick = file_get_contents('https://api.coincap.io/v2/assets?limit=19');
                        $data = json_decode($tick, TRUE);
                        $bit = $data['data'];
                        for ($i = 0; $i < count($bit); $i++) {
                            $class = "info-table-col5--green";
                            if($bit[$i]["changePercent24Hr"] < 0)
                                $class = "info-table-col5--red";

                            echo '<div class = "info-table-row">
                            <div class="info-table-col1">'.$bit[$i]["name"].'</div>
                            <div class="info-table-col2">'.$bit[$i]["symbol"].'</div>
                            <div class="info-table-col3">'.round($bit[$i]["priceUsd"], 2).'</div>
                            <div class="info-table-col4">'.number_format(round($bit[$i]["marketCapUsd"], 2)).'</div>
                            <div class="info-table-col5 '.$class.'">'.round($bit[$i]["changePercent24Hr"], 2).'</div>
                        </div>';
                        }
                    ?>

                </div>
            </section>
        </div>
    </section>

    <?php
        require_once "./../blocks/footer.php";
    ?>
    <script src="./../js/main.js"></script>
</body>
</html>