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
    <?php
    include('components/header.php');
    include('components/connection.inc.php');
    ?>    
    <!-- Image Slider Ends Here -->
        <?php
        $product = $_GET['pid'];
        $sql = "SELECT * FROM `products` where product_id = $product";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // echo $row['product_name'];
        ?>
<div id="product">
    <div class="product-view"></div>
    <div class="product-desc">
        <h3><?php echo $row['product_name'] ?></h3>
    </div>
</div>

    <div class="newarrival">
        <h2>
            More Products
        </h2>
        <span class="line"></span>
    </div>
    <!-- Gallery Start Here -->

    <div class="gallery">
    </div>
    <!-- Gallery Ends Here -->



    <!-- Footer Starts Here -->
    <?php
    include('components/footer.php');
    ?>
</body>

</html>