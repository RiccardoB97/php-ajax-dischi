<?php 
    require __DIR__ . '/db/data.php';
    $selectOption = $_POST['selectedGenre'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- Font Awesome ling -->
    <script src="https://kit.fontawesome.com/1d47f7a9f5.js" crossorigin="anonymous"></script>
    <!-- Main CSS file -->
    <link rel="stylesheet" href="dist/css/app.css">
</head>

<body>
    <header id='site_header'>
        <div class="logo">
            <img src="./assets/img/spotify-logo-png-7053.png" alt="">
        </div>
        <div>
            <select name="selectedGenre">
                <option value="" disabled selected>Select your option</option>
                <?php foreach($genres as $genre){ ?>
                    <option value="<?= $album['genre'] ?>"><?= $genre ?></option> 
                <?php } ?>
            </select>
        </div>
    </header>
    <main id="site_main">
    <?php 
        foreach ($data as $album) {
            if ($selectOption == $album['genre'] || $selectOption == '') {?>
            <div class="card">
                <div class="album_image">
                    <div class="overlay">
                        <i class="fas fa-play"></i>
                    </div>
                    <img src="<?= $album["poster"] ?>" alt="">
                </div>
                <h2><?= $album['title']?></h2>
                <div class="album_info">
                    <h4><?= $album["author"] ?></h4>
                    <h4><?= $album['year'] ?></h4>
                </div>
            </div>
        <?php }
        }
    ?>
            
            
        
    </main>

    <!-- Main JS file -->
    <script src="./assets/js/main.js"></script>
</body>

</html>