<?php include __DIR__ . '/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=XXXXX<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Php-dischi</title>
</head>
<body>
   
    <div class="wrapper">
        <header>
            <div class="logo">
                <i class="fab fa-spotify"></i>
            </div>
        </header>
        <div class="card-container">
            <?php 
                foreach ($database as $data) { ?>
              
                    <div class="card">
                        <div class="card-img">
                            <?php echo '<img src="'. $data['poster'].'" />' ?>
                        </div>
                        
                        <div class="card-info">
                            <h3><?php echo $data['title']; ?></h3> 
                            <?php echo '<br>'; ?>
                            <p><?php echo $data['author']; ?></p>
                            <?php echo '<br>'; ?>
                            <h4><?php echo $data['year']; ?></h4>
                        </div>
                                
                    </div>
                             
            <?php } ?>          
        </div>
    </div>  
</body>
</html>