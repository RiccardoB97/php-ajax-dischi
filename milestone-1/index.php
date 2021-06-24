<?php 
    require __DIR__ . '/db/data.php';
    
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
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div id="app">
        <header id='site_header'>
            <div class="logo">
                <img src="./assets/img/spotify-logo-png-7053.png" alt="">
            </div>
            <div>
                <select name="select" id="select" v-model="selected">
                    <option value="" disabled selected>Select your option</option>
                    <?php foreach($genres as $genre){ ?>
                       <option value=""><?= $genre ?></option> 
                   <?php } ?>
                </select>
            </div>
        </header>
        <main id="site_main">
            <div v-for="album in albums" class="card"
                v-if="selected === album.genre || selected === 'All' || selected ==='' ">
                <div class="album_image">
                    <div class="overlay">
                        <i class="fas fa-play"></i>
                    </div>
                    <img :src="album.poster" alt="">
                </div>
                <h2>{{album.title.toUpperCase()}}</h2>
                <div class="album_info">
                    <h4>{{album.author}}</h4>
                    <h4>{{album.year}}</h4>
                </div>
            </div>
        </main>




    </div>

    <!-- AJAX Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
        integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue JS-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- Main JS file -->
    <script src="./assets/js/main.js"></script>
</body>

</html>