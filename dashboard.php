<?php
session_start();

// If you want to protect the dashboard so only logged-in users can access it,
// uncomment the following lines:
//
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit();
// }

$username = $_SESSION['username'] ?? 'Customer';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Dex Dripz</title>

    <link rel="stylesheet" href="dashboard.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<!-- ================= SIDEBAR ================= -->

<aside class="sidebar" id="sidebar">

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

        <li class="active">
            <a href="dashboard.php">
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-bag-shopping"></i>
                <span>Shop</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-box"></i>
                <span>My Orders</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-regular fa-heart"></i>
                <span>Wishlist</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>My Cart</span>
                <b class="cart-number">3</b>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-user"></i>
                <span>My Profile</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-gear"></i>
                <span>Settings</span>
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


<!-- ================= MAIN ================= -->

<main class="main">

    <!-- TOP BAR -->

    <header class="topbar">

        <button class="menu-btn" onclick="toggleSidebar()">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="search">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                placeholder="Search products..."
                id="searchInput"
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

            <button>
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="notification">3</span>
            </button>

        </div>

    </header>


    <!-- ================= WELCOME ================= -->

    <section class="welcome">

        <div>

            <p>WELCOME BACK 👋</p>

            <h1>
                Hello, <?php echo htmlspecialchars($username); ?>!
            </h1>

            <span>
                Discover something amazing today.
            </span>

        </div>

        <button class="shop-btn">
            <i class="fa-solid fa-bag-shopping"></i>
            Start Shopping
        </button>

    </section>


    <!-- ================= QUICK STATS ================= -->

    <section class="stats">

        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-box"></i>
            </div>

            <div>
                <p>Total Orders</p>
                <h2>12</h2>
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-truck"></i>
            </div>

            <div>
                <p>Pending Orders</p>
                <h2>3</h2>
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-regular fa-heart"></i>
            </div>

            <div>
                <p>Wishlist</p>
                <h2>8</h2>
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-wallet"></i>
            </div>

            <div>
                <p>Total Spent</p>
                <h2>₦185k</h2>
            </div>

        </div>

    </section>


    <!-- ================= CATEGORIES ================= -->

    <section class="content-section">

        <div class="section-title">

            <div>
                <p>EXPLORE</p>
                <h2>Categories</h2>
            </div>

            <a href="#">View All →</a>

        </div>


        <div class="categories">

            <div class="category">
                <div class="category-icon">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                 <a href="fashion.php"><h1>fashion</h1></a>
                <span>120 Products</span>
            </div>


            <div class="category">
                <div class="category-icon">
                    <i class="fa-solid fa-shoe-prints"></i>
                </div>
                <h3>Shoes</h3>
                <span>80 Products</span>
            </div>


            <div class="category">
                <div class="category-icon">
                    <i class="fa-solid fa-headphones"></i>
                </div>
                <h3>Electronics</h3>
                <span>95 Products</span>
            </div>


            <div class="category">
                <div class="category-icon">
                    <i class="fa-solid fa-watch"></i>
                </div>
                <h3>Accessories</h3>
                <span>70 Products</span>
            </div>


            <div class="category">
                <div class="category-icon">
                    <i class="fa-solid fa-house"></i>
                </div>
                <h3>Home</h3>
                <span>60 Products</span>
            </div>

        </div>

    </section>


    <!-- ================= PRODUCTS ================= -->

    <section class="content-section">

        <div class="section-title">

            <div>
                <p>SHOP NOW</p>
                <h2>Recommended For You</h2>
            </div>

            <a href="#">View All →</a>

        </div>


        <div class="products" id="products">


            <!-- PRODUCT 1 -->

            <div class="product">

                <div class="product-img">

                    <span class="sale">-20%</span>

                    <button class="heart">
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <i class="fa-solid fa-shirt product-symbol"></i>

                </div>

                <div class="product-info">

                    <small>Fashion</small>

                    <h3>Premium Oversized T-Shirt</h3>

                    <div class="rating">
                        ★★★★★
                        <span>(24)</span>
                    </div>

                    <div class="price">
                        <strong>₦18,500</strong>
                        <del>₦23,000</del>
                    </div>

                    <button class="cart-btn">
                        Add to Cart
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>

                </div>

            </div>


            <!-- PRODUCT 2 -->

            <div class="product">

                <div class="product-img">

                    <span class="sale">-15%</span>

                    <button class="heart">
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <i class="fa-solid fa-shoe-prints product-symbol"></i>

                </div>

                <div class="product-info">

                    <small>Shoes</small>

                    <h3>Classic Premium Sneakers</h3>

                    <div class="rating">
                        ★★★★★
                        <span>(31)</span>
                    </div>

                    <div class="price">
                        <strong>₦35,000</strong>
                        <del>₦41,000</del>
                    </div>

                    <button class="cart-btn">
                        Add to Cart
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>

                </div>

            </div>


            <!-- PRODUCT 3 -->

            <div class="product">

                <div class="product-img">

                    <span class="sale">-10%</span>

                    <button class="heart">
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <i class="fa-solid fa-headphones product-symbol"></i>

                </div>

                <div class="product-info">

                    <small>Electronics</small>

                    <h3>Wireless Headphones</h3>

                    <div class="rating">
                        ★★★★★
                        <span>(18)</span>
                    </div>

                    <div class="price">
                        <strong>₦42,000</strong>
                        <del>₦46,500</del>
                    </div>

                    <button class="cart-btn">
                        Add to Cart
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>

                </div>

            </div>


            <!-- PRODUCT 4 -->

            <div class="product">

                <div class="product-img">

                    <span class="sale">-25%</span>

                    <button class="heart">
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <i class="fa-solid fa-watch product-symbol"></i>

                </div>

                <div class="product-info">

                    <small>Accessories</small>

                    <h3>Luxury Wrist Watch</h3>

                    <div class="rating">
                        ★★★★★
                        <span>(42)</span>
                    </div>

                    <div class="price">
                        <strong>₦55,000</strong>
                        <del>₦73,000</del>
                    </div>

                    <button class="cart-btn">
                        Add to Cart
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= FLASH SALE ================= -->

    <section class="flash-sale">

        <div>

            <small>LIMITED TIME OFFER</small>

            <h2>🔥 Flash Sale</h2>

            <p>
                Grab selected products before the offer ends.
            </p>

            <button>
                Shop Deals →
            </button>

        </div>

        <div class="discount-circle">
            <strong>50%</strong>
            <span>OFF</span>
        </div>

    </section>


    <!-- ================= RECENT ORDERS ================= -->

    <section class="content-section">

        <div class="section-title">

            <div>
                <p>YOUR ACTIVITY</p>
                <h2>Recent Orders</h2>
            </div>

            <a href="#">View Orders →</a>

        </div>


        <div class="orders">

            <div class="order">

                <div class="order-icon">
                    <i class="fa-solid fa-box"></i>
                </div>

                <div>
                    <h3>#ORD-10293</h3>
                    <p>Premium T-Shirt</p>
                </div>

                <strong>₦18,500</strong>

                <span class="status delivered">
                    Delivered
                </span>

            </div>


            <div class="order">

                <div class="order-icon">
                    <i class="fa-solid fa-box"></i>
                </div>

                <div>
                    <h3>#ORD-10291</h3>
                    <p>Wireless Headphones</p>
                </div>

                <strong>₦42,000</strong>

                <span class="status pending">
                    Processing
                </span>

            </div>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-logo">
            <span>DEX</span> DRIPZ
        </div>

        <p>
            Shop smarter. Shop better.
        </p>

        <div class="footer-links">
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
        </div>

        <small>
            © 2026 Dex Dripz. All Rights Reserved.
        </small>

    </footer>

</main>


<script>

function toggleSidebar() {

    document
        .getElementById("sidebar")
        .classList.toggle("show");

}


// Search products

function searchProducts() {

    let search =
        document
        .getElementById("searchInput")
        .value
        .toLowerCase();

    let products =
        document.querySelectorAll(".product");

    products.forEach(product => {

        let name =
            product
            .querySelector("h3")
            .textContent
            .toLowerCase();

        if (name.includes(search)) {

            product.style.display = "block";

        } else {

            product.style.display = "none";

        }

    });

}


// Wishlist

document.querySelectorAll(".heart").forEach(button => {

    button.addEventListener("click", function() {

        let icon = this.querySelector("i");

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

</script>

</body>
</html>