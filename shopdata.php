<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Gemstone Kingdom</title>
    <link rel="stylesheet" href="css/shop.css">
</head>
<body>
    <!--===Shop Data Section Start===-->
    <section class="shop-data">
        <div class="filter-section">
            <h2>Filter by Category</h2>
            <ul class="filter-list">
                <li><a href="#" class="filter-option active">All</a></li>
                <li><a href="#" class="filter-option">Precious</a></li>
                <li><a href="#" class="filter-option">Semi-Precious</a></li>
                <li><a href="#" class="filter-option">Special Offers</a></li>
            </ul>
            <div class="price-filter">
                <h2>Filter by Price</h2>
                <input type="range" min="0" max="5000" value="2500" id="priceRange">
                <p>$0 - <span id="priceValue">2500</span></p>
            </div>
        </div>
        <div class="product-grid">
            <!-- Example Product Item -->
            <div class="product-item">
                <img src="Images/product1.jpg" alt="Blue Sapphire">
                <h2>Blue Sapphire</h2>
                <p>$2000</p>
                <a href="#" class="btn">View Details</a>
            </div>
            <!-- Add more products here -->
        </div>
    </section>
    <!--===Shop Data Section End===-->

    <script>
        // Update price filter value
        const priceRange = document.getElementById('priceRange');
        const priceValue = document.getElementById('priceValue');
        priceRange.addEventListener('input', () => {
            priceValue.textContent = priceRange.value;
        });
    </script>
</body>
</html>
