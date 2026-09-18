<?php
session_start();

$username = $_SESSION['username'] ?? 'Customer';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shoes | Dex Dripz</title>

    <link rel="stylesheet" href="shoes.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">

    <div class="logo">
        <span>DEX</span> DRIPZ
    </div>

    <div class="profile">
        <div class="profile-picture">
            <i class="fa-solid fa-user"></i>
        </div>

        <h3><?php echo htmlspecialchars($username); ?></h3>
        <p>Customer</p>
    </div>

    <ul class="menu">

        <li>
            <a href="dashboard.php">
                <i class="fa-solid fa-house"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="fashion.php">
                <i class="fa-solid fa-shirt"></i>
                Fashion
            </a>
        </li>

        <li class="active">
            <a href="shoes.php">
                <i class="fa-solid fa-shoe-prints"></i>
                Shoes
            </a>
        </li>

        <li>
            <a href="electronics.php">
                <i class="fa-solid fa-headphones"></i>
                Electronics
            </a>
        </li>

        <li>
            <a href="accessories.php">
                <i class="fa-solid fa-watch"></i>
                Accessories
            </a>
        </li>

        <li>
            <a href="orders.php">
                <i class="fa-solid fa-box"></i>
                My Orders
            </a>
        </li>

        <li>
            <a href="wishlist.php">
                <i class="fa-regular fa-heart"></i>
                Wishlist
            </a>
        </li>

        <li>
            <a href="cart.php">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
                <b class="cart-number">3</b>
            </a>
        </li>

        <li>
            <a href="profile.php">
                <i class="fa-solid fa-user"></i>
                My Profile
            </a>
        </li>

    </ul>

    <div class="logout">
        <a href="logout.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>
    </div>

</aside>


<!-- MAIN CONTENT -->
<main class="main">

    <!-- TOPBAR -->
    <header class="topbar">

        <button class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="search">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                id="searchInput"
                placeholder="Search shoes..."
                onkeyup="searchProducts()"
            >

        </div>

        <div class="top-icons">

            <button>
                <i class="fa-regular fa-bell"></i>
                <span class="notification">2</span>
            </button>

            <button>
                <i class="fa-regular fa-heart"></i>
            </button>

            <button onclick="window.location.href='cart.php'">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="notification">3</span>
            </button>

        </div>

    </header>


    <!-- PAGE HEADER -->
    <section class="page-header">

        <div>

            <p>DEX DRIPZ COLLECTION</p>

            <h1>Shoes</h1>

            <span>
                Step into premium footwear designed for comfort,
                confidence and style.
            </span>

        </div>

        <div class="shoe-icon">
            <i class="fa-solid fa-shoe-prints"></i>
        </div>

    </section>


    <!-- FILTER -->
    <section class="filter-bar">

        <div>

            <strong>Shoe Collection</strong>

            <span>12 Products</span>

        </div>

        <div class="filters">

            <select id="sortProducts" onchange="sortProducts()">

                <option value="default">Sort By</option>

                <option value="low">
                    Price: Low to High
                </option>

                <option value="high">
                    Price: High to Low
                </option>

                <option value="name">
                    Name
                </option>

            </select>

            <select>

                <option>All Shoes</option>
                <option>Sneakers</option>
                <option>Boots</option>
                <option>Slides</option>
                <option>Formal</option>

            </select>

        </div>

    </section>


    <!-- PRODUCTS -->
    <section class="products" id="products">


        <!-- PRODUCT 1 -->
        <div class="product" data-price="35000">

            <div class="product-image">

                <span class="sale">-20%</span>

                <button class="heart">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <i class="fa-solid fa-shoe-prints"></i>

            </div>

            <div class="product-info">

                <small>SNEAKERS</small>

                <h3>Classic Premium Sneakers</h3>

                <p class="description">
                    Stylish everyday sneakers with a premium finish.
                </p>

                <div class="price">

                    <strong>₦35,000</strong>

                    <del>₦44,000</del>

                </div>

                <a href="cart.php" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </a>

            </div>

        </div>


        <!-- PRODUCT 2 -->
        <div class="product" data-price="42000">

            <div class="product-image">

                <span class="sale">-15%</span>

                <button class="heart">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <i class="fa-solid fa-shoe-prints"></i>

            </div>

            <div class="product-info">

                <small>RUNNING</small>

                <h3>Elite Running Shoes</h3>

                <p class="description">
                    Lightweight shoes suitable for everyday movement.
                </p>

                <div class="price">

                    <strong>₦42,000</strong>

                    <del>₦49,500</del>

                </div>

                <a href="cart.php" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </a>

            </div>

        </div>


        <!-- PRODUCT 3 -->
        <div class="product" data-price="28000">

            <div class="product-image">

                <span class="sale">-12%</span>

                <button class="heart">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <i class="fa-solid fa-shoe-prints"></i>

            </div>

            <div class="product-info">

                <small>SLIDES</small>

                <h3>Luxury Casual Slides</h3>

                <p class="description">
                    Comfortable casual slides for relaxed days.
                </p>

                <div class="price">

                    <strong>₦28,000</strong>

                    <del>₦32,000</del>

                </div>

                <a href="cart.php" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </a>

            </div>

        </div>


        <!-- PRODUCT 4 -->
        <div class="product" data-price="55000">

            <div class="product-image">

                <span class="sale">-18%</span>

                <button class="heart">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <i class="fa-solid fa-shoe-prints"></i>

            </div>

            <div class="product-info">

                <small>FORMAL</small>

                <h3>Premium Leather Shoes</h3>

                <p class="description">
                    Elegant footwear for formal and special occasions.
                </p>

                <div class="price">

                    <strong>₦55,000</strong>

                    <del>₦67,000</del>

                </div>

                <a href="cart.php" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </a>

            </div>

        </div>


        <!-- PRODUCT 5 -->
        <div class="product" data-price="39000">

            <div class="product-image">

                <span class="sale">-10%</span>

                <button class="heart">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <i class="fa-solid fa-shoe-prints"></i>

            </div>

            <div class="product-info">

                <small>SNEAKERS</small>

                <h3>Street Style Sneakers</h3>

                <p class="description">
                    Modern streetwear sneakers with a clean design.
                </p>

                <div class="price">

                    <strong>₦39,000</strong>

                    <del>₦43,500</del>

                </div>

                <a href="cart.php" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </a>

            </div>

        </div>


        <!-- PRODUCT 6 -->
        <div class="product" data-price="48000">

            <div class="product-image">

                <span class="sale">-16%</span>

                <button class="heart">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <i class="fa-solid fa-shoe-prints"></i>

            </div>

            <div class="product-info">

                <small>BOOTS</small>

                <h3>Premium Chelsea Boots</h3>

                <p class="description">
                    Smart boots with a premium modern appearance.
                </p>

                <div class="price">

                    <strong>₦48,000</strong>

                    <del>₦57,000</del>

                </div>

                <a href="cart.php" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </a>

            </div>

        </div>


        <!-- PRODUCT 7 -->
        <div class="product" data-price="32000">

            <div class="product-image">

                <span class="sale">-14%</span>

                <button class="heart">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <i class="fa-solid fa-shoe-prints"></i>

            </div>

            <div class="product-info">

                <small>CASUAL</small>

                <h3>Urban Casual Shoes</h3>

                <p class="description">
                    Versatile casual footwear for everyday outfits.
                </p>

                <div class="price">

                    <strong>₦32,000</strong>

                    <del>₦37,000</del>

                </div>

                <a href="cart.php" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </a>

            </div>

        </div>


        <!-- PRODUCT 8 -->
        <div class="product" data-price="62000">

            <div class="product-image">

                <span class="sale">-20%</span>

                <button class="heart">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <i class="fa-solid fa-shoe-prints"></i>

            </div>

            <div class="product-info">

                <small>LUXURY</small>

                <h3>Luxury Designer Sneakers</h3>

                <p class="description">
                    Premium sneakers made for a standout look.
                </p>

                <div class="price">

                    <strong>₦62,000</strong>

                    <del>₦78,000</del>

                </div>

                <a href="cart.php" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </a>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <div class="footer-logo">
            <span>DEX</span> DRIPZ
        </div>

        <p>
            Premium footwear for your everyday lifestyle.
        </p>

        <div class="socials">

            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-tiktok"></i>
            <i class="fa-brands fa-whatsapp"></i>

        </div>

        <small>
            © 2026 Dex Dripz. All Rights Reserved.
        </small>

    </footer>

</main>


<script>

function searchProducts() {

    const search =
        document.getElementById("searchInput")
        .value
        .toLowerCase();

    const products =
        document.querySelectorAll(".product");

    products.forEach(product => {

        const name =
            product.querySelector("h3")
            .textContent
            .toLowerCase();

        product.style.display =
            name.includes(search)
            ? "block"
            : "none";

    });

}


/* WISHLIST */

document.querySelectorAll(".heart").forEach(button => {

    button.addEventListener("click", function() {

        const icon = this.querySelector("i");

        if (icon.classList.contains("fa-regular")) {

            icon.classList.remove("fa-regular");

            icon.classList.add("fa-solid");

            this.classList.add("liked");

        } else {

            icon.classList.remove("fa-solid");

            icon.classList.add("fa-regular");

            this.classList.remove("liked");

        }

    });

});


/* SORT PRODUCTS */

function sortProducts() {

    const type =
        document.getElementById("sortProducts").value;

    const container =
        document.getElementById("products");

    const products =
        Array.from(
            container.querySelectorAll(".product")
        );


    if (type === "low") {

        products.sort(
            (a, b) =>
            Number(a.dataset.price) -
            Number(b.dataset.price)
        );

    }


    if (type === "high") {

        products.sort(
            (a, b) =>
            Number(b.dataset.price) -
            Number(a.dataset.price)
        );

    }


    if (type === "name") {

        products.sort(
            (a, b) =>
            a.querySelector("h3")
             .textContent
             .localeCompare(
                 b.querySelector("h3").textContent
             )
        );

    }


    products.forEach(product => {

        container.appendChild(product);

    });

}

</script>

</body>
</html>