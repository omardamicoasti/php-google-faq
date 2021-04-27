<?php include __DIR__ . '/partials/db.php'  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>php-google-faq</title>
</head>

<body>

    <?php include __DIR__ . '/partials/header.php'  ?>

    <main>
        <div class="container clearfix">
            <?php for ($i = 0; $i < count($faq); $i++) {  ?>
                <h2> <?php echo $faq[$i]["question"] ?> </h2>
                <?php for ($ind = 0; $ind < count($faq[$i]["answer"]); $ind++) { ?>
                    <p> <?php echo $faq[$i]["answer"][$ind]; ?> </p>
                <?php } ?>
                <!-- chiusura secondo ciclo for  -->
            <?php } ?>
            <!-- chiusura primo ciclo for -->
        </div>
    </main>
    
    <?php include __DIR__ . '/partials/footer.php'  ?>



</body>

</html>