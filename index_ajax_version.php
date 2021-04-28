<?php include __DIR__ . '/partials/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    
    <title>Dischi ajax</title>
</head>
<body>
<div id="app" class="wrapper">
    <header>
        <div class="logo">
            <i class="fab fa-spotify"></i>
        </div>
    </header>
        
    <div class="card-container">
    
        <div class="card" v-for="album in albums">
            <div class="card-img">
                <img :src="album.poster" alt="">
            </div>
            
            <div class="card-info">
                <h2>{{ album.title}} </h2>
                <h4>{{ album.author }}</h4>
                <span>{{ album.year }}</span>
            </div>
                    
        </div>
                            
                
    </div>
</div>  

    <script src="js/script.js"></script>   
</body>
</html>