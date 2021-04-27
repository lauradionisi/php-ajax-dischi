<?php include __DIR__ . '/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Php-dischi</title>
</head>
<body>
   
    <div class="wrapper">
        <header>
            <div class="logo">
                <img src="img/logo.svg" alt="">
            </div>
        </header>
        <div class="card-container">
            <?php 
                foreach ($database as $data) { ?>
              
                    <div class="card">
                        <?php echo '<img src="'. $data['poster'].'" />' ?>
                        <?php echo $data['title']; ?>
                        <?php echo '<br>'; ?>
                        <?php echo $data['author']; ?>
                        <?php echo '<br>'; ?>
                        <?php echo $data['year']; ?>           
                    </div>
                             
            <?php } ?>          
        </div>
    </div>  
</body>
</html>