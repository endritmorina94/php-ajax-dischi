<<?php
   include __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Dischi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <!-- HEADER -->
        <header>

            <div class="logo">
                <img src="img/download.png" alt="logo">
            </div>

        </header>
        <!-- Fine HEADER -->

        <!-- INIZIO MAIN -->
        <main>
            <!-- Contenitore Album -->
            <section class="albums-container">

                <!-- Single Album -->
                <?php foreach ($database as $disco) { ?>
                    <div class="album">

                        <div class="album-content">
                            <div class="album-img">
                                <img src="<?php echo $disco["poster"] ?>" alt="<?php echo $disco["titolo"] ?>">
                                <div class="overlay">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>

                            <div class="album-info">
                                <div class="album-name">
                                    <h4><?php echo $disco["titolo"] ?></h4>
                                </div>
                                <div class="album-author">
                                    <p class="author"><?php echo $disco["author"] ?></p>
                                    <p class="year"><?php echo $disco["year"] ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
                <!-- Fine single Album -->

            </section>
        </main>
        <!-- Fine MAIN -->
</body>

</html>
