<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Gemstone Kingdom</title>
    <link rel="favicon" type="image/jpg" href="logo.jpg">

    <!-- ==== CSS File Links ====-->
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\subpages.css">
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
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="Images/logo.png">
            </div>

            <div>
                <ul class="navmenu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="information.php">Information</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="nav-icon">
                <a href="#"><i class='bx bx-search'></i></a>
                <a href="#"><i class='bx bxs-user'></i></a>
                <a href="#"><i class='bx bx-cart'></i></a>

                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </nav>
    </header>
    <br><br><br><br><br><br><br>
    <!--===Header Section Close===-->
    <?php require_once 'shopdata.php'; ?>


    <!--===Shop Section Start===-->
    

    <!--===Footer Section Start===-->
    <footer class="footer">
        <div class="container">
            <div class="footer-col">
                <h2>Our Specialties</h2>
                <ul>
                    <li><a href="#"> We sell Fresh stones only (unused).</a></li>
                    <hr>
                    <li><a href="#"> We send goods with 100% insurance.</a></li>
                    <hr>
                    <li><a href="#"> All Gemstones are Worldwide shipped by Free of Charges.</a></li>
                    <hr>
                    <li><a href="#"> We courier your purchased item(s) at your address within 24 hours.</a></li>
                    <hr>
                    <li><a href="#"> Our sales department keeps in touch with you after your purchase until reaching
                            goods at your home.</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h2>Precious Gemstones</h2>
                <ul>
                    <li><a href="#">Blue Sapphire</a></li>
                    <hr>
                    <li><a href="#">Ruby</a></li>
                    <hr>
                    <li><a href="#">Yellow Sapphire</a></li>
                    <hr>
                    <li><a href="#">Pink Sapphire</a></li>
                    <hr>
                    <li><a href="#">White Sapphire</a></li>
                    <hr>
                    <li><a href="#">Padparadscha</a></li>
                    <hr>
                    <li><a href="#">Star Sapphire</a></li>
                    <hr>
                    <li><a href="#">Purple Sapphire</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h2>Semi Precious Gemstones</h2>
                <ul>
                    <li><a href="#">Garnet</a></li>
                    <hr>
                    <li><a href="#">Tourmaline</a></li>
                    <hr>
                    <li><a href="#">Chrysoberyl</a></li>
                    <hr>
                    <li><a href="#">Aqamarine</a></li>
                    <hr>
                    <li><a href="#">Topaz</a></li>
                    <hr>
                    <li><a href="#">Spinel</a></li>
                    <hr>
                    <li><a href="#">Amethyst</a></li>
                    <hr>
                    <li><a href="#">Moonstone</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <div class="gia-img">
                    <img src="/Images/cc1.png" alt="">
                    <p>We Provide NGJA Authorized Certificate with All Our Gemstones.
                        www.gemsinsrilanka.com Manage by ROYAL GEMSTONE PARADICE (PVT) LTD – Since 2024.</p>
                </div>
            </div>
        </div>
    </footer>
    <!--===Footer Section End===-->
    <div class="copyright-text">
        <p>Copyright 2024 &copy; ROYAL GEMSTONE PARADICE (PVT) LTD</p>
    </div>
</body>

</html>