<?php
    $title = "Авторизация";
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
            Это страница с логином
        </div>
    </section>
    
    
    <?php
        require_once "./../blocks/footer.php";
    ?>
    <script src="./../js/main.js"></script>
</body>
</html>