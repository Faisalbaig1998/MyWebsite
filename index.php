<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isfan Inc.</title>
    <script src="javascript/index.js"></script>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
</head>

<body onload="myFunction()">
    <!-- Header Starts Here -->
    <?php
    include('components/header.php');
    include('components/connection.inc.php');

    ?>
    <!-- Image Slider Starts Here -->
    <div class="slider">
        <img src="https://source.unsplash.com/random/2200x1000/?shoes" alt="Image Will be shown here" class="img">
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
        <?php

        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="card">
                <div class="card-img">
                    <span>&#8249</span>
                    <img src="assets/' . $row['product_id'] . '.jpg" >
                    <span>&#8250</span>
                    <!-- <img src="https://source.unsplash.com/random/250x200/?computer" > -->
                </div>
                <div class="itemname">
                    <h4><a href="product.php?pid='.$row['product_id'].'" target="_blank">' . $row['product_name'] . '</a> </h4>
                    <h5>' . $row['brand_name'] . '</h5>
                    <p>' . $row['short_description'] . '</p>
                    <p class="sellingPrice">' . $row['selling_price'] . '</p>
                    <p class="mrp">' . $row['mrp'] . '</p>
                    <span>Ratings & Review</span>
                </div>
                <div class="buynow">
                    <a href=' . $row['amazon_link'] . ' target="_blank"><img src="assets/Logos/amazon.png" ></a>
                    <a href=' . $row['flipkart_link'] . ' target="_blank" ><img src="assets/Logos/flipkart.png" ></a>
                    <a href=' . $row['meesho_link'] . ' target="_blank"><img src="assets/Logos/meesho.png"></a>
                    <a href="https://wa.me/+918006286968" target="_blank"><img src="assets/Logos/whatsapp.png" ></a>
                </div>
            </div>';
        };

        ?>
    </div>
    <!-- Gallery Ends Here -->



    <!-- Footer Starts Here -->
    <?php
    include('components/footer.php');
    ?>
</body>

</html>