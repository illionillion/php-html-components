<?php include './components/importComponents.php' ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Hello World!!" ?></title>
</head>
<body>
    <?php
        $header = new HeaderComponent('Page Title');
        $header->render();
    ?>
    <main>
        Hello World
    </main>
    <?php
        $footer = new FooterComponent('Page Footer');
        $footer->render();
    ?>
</body>
</html>