<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Gemstone Kingdom</title>
    <link rel="favicon" type="image/jpg" href="logo.jpg">

    <!-- ==== CSS File Links ====-->
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\collection.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ==== Google Fonts Links ====-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>

<body>
    <!--===Header Section Start===-->
    <?php include 'common/header.php'; ?>

    <div class="shop-container">
        <div class="gem-title">
            <h1>Blue Sapphire</h1><br>
            <p>Blue Sapphire Gemstones
                Indulge in the Exquisite Collection of Blue Sapphire Gemstones. These sapphires typically showcase a
                captivating range of blue hues, from light and cornflower blue to deeper royal blues. These gemstones
                are known for their exceptional hardness, making them durable and suitable for various jewelry
                settings.<br><br>
                Ceylon blue sapphires are highly valued for their rarity and are considered some of the finest examples
                in the world. Beyond their aesthetic appeal, these sapphires hold cultural significance and are
                associated with qualities like wisdom, nobility, and divine favor. Whether set in engagement rings,
                earrings, or other jewelry pieces, Ceylon blue sapphires are cherished for their timeless elegance and
                enduring allure.</p>
        </div>
    </div>
    <div class="gem-contain">
        <div class="filter">
            <div class="color-filt">
                <button id="colorDropdown" class="color-drop">Color</button>
                <div id="myDropdown" class="dropdown-content">

            </div>
        </div>
        
        <div class="shop-item">

        </div>
    </div>


    <?php include 'common/footer.php'; ?>
</body>
</html>