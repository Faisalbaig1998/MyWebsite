<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isfan Inc.</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Castoro&family=Courgette&family=Merienda&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Exo+2:wght@300;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Starts Here -->
    <?php
    include('components/header.php');
    ?>
    <!-- Image Slider Starts Here -->
    <div class="slider">
        <img src="https://source.unsplash.com/random/2200x1000/?computer" alt="Image Will be shown here" class="img">
    </div>
    <div class="br"></div>
    <!-- Image Slider Ends Here -->
    <div class="newarrival">
        <h2>
            New Arrivals
        </h2>
        <span class="line"></span>
    </div>
    <!-- Gallery Start Here -->

    <div class="gallery">
        <div class="card">
            <img src="https://source.unsplash.com/random/250x200/?computer" alt="">
            <div class="button">
                <button>Read More...</button>
            </div>
            <div class="card-desc">
                <p>Desc.....</p>
            </div>
        </div>
    </div>
    <!-- Gallery Ends Here -->


    <!-- Footer Starts Here -->
    <?php
    include('components/footer.php');
    ?>
</body>

</html>