<?php

    include 'db/dischi.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajax Dischi</title>
</head>
<body class="vh-100 bg-dark overflow-auto">
    <div class="container">
        <div class="row row-cols-4 g-4">
            <?php foreach ($dischi as $disc) { ?>
                
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $disc['poster'] ?>" class="card-img-top" alt="<?php echo $disc['title'] ?>">
                    <div class="card-body bg-secondary">
                        <h5 class="card-title text-white"><?php echo $disc['title'] ?></h5>
                        <p class="card-text text-white"><?php echo $disc['author'] ?></p>
                    </div>
                </div>                
            </div>

            <?php } ?>
        </div>
    </div>
</body>
</html>