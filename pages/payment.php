<?php
    $title = "Вложения"; 
    require_once "./../functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once "./../blocks/head.php"; 
    $products = getProducts();
?>
</head>
<body onload="onLoad()">
    <?php
        require_once "./../blocks/header.php";
    ?>

    
<section class = "main-page">
        <div class = "main-page-container">
        <section class = "products">
            <?php
                for ($i = 0; $i < count($products); $i++) {
                    echo '<div class = "product">
                        <div class = "product-top">
                            <img src="./../img/products/p1.png" alt="">
                        </div>
                        <div class = "product-info">
                            <div class = "product-info-caption">
                                <span>
                                    '.$products[$i]["name"].'
                                </span>
                                <p>
                                    '.$products[$i]["mini-desc"].'
                                </p>
                            </div>
                            <div class = "product-info-price">
                                <div class = "product-info-price-name">
                                    Стоимость
                                </div>
                                <div class = "product-info-price-price">
                                    '.$products[$i]["price"].' RUB
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            ?>

            
        </section>
        </div>
    </section>

    
    <?php
        require_once "./../blocks/footer.php";
    ?>
    <script src="./../js/main.js"></script>
</body>
</html>