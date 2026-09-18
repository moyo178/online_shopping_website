```php
<?php
session_start();

$username = $_SESSION['username'] ?? 'Customer';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fashion | Dex Dripz</title>

    <link rel="stylesheet" href="fashion.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<body>


<!-- ================= SIDEBAR ================= -->

<aside class="sidebar">

    <div class="logo">
        <span>DEX</span> DRIPZ
    </div>


    <div class="profile">

        <div class="profile-picture">
            <i class="fa-solid fa-user"></i>
        </div>

        <h3>
            <?php echo htmlspecialchars($username); ?>
        </h3>

        <p>Customer</p>

    </div>


    <ul class="menu">

        <li>
            <a href="dashboard.php">
                <i class="fa-solid fa-house"></i>
                Dashboard
            </a>
        </li>


        <li class="active">
            <a href="fashion.php">
                <i class="fa-solid fa-shirt"></i>
                Fashion
            </a>
        </li>


        <li>
            <a href="#">
                <i class="fa-solid fa-shoe-prints"></i>
                Shoes
            </a>
        </li>


        <li>
            <a href="#">
                <i class="fa-solid fa-headphones"></i>
                Electronics
            </a>
        </li>


        <li>
            <a href="#">
                <i class="fa-solid fa-watch"></i>
                Accessories
            </a>
        </li>


        <li>
            <a href="#">
                <i class="fa-solid fa-box"></i>
                My Orders
            </a>
        </li>


        <li>
            <a href="#">
                <i class="fa-regular fa-heart"></i>
                Wishlist
            </a>
        </li>


        <li>
            <a href="#">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart

                <b class="cart-number">3</b>
            </a>
        </li>


        <li>
            <a href="#">
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



<!-- ================= MAIN ================= -->

<main class="main">


    <!-- TOP BAR -->

    <header class="topbar">


        <button class="menu-btn">

            <i class="fa-solid fa-bars"></i>

        </button>


        <div class="search">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                id="searchInput"
                placeholder="Search fashion..."
                onkeyup="searchProducts()"
            >

        </div>


        <div class="top-icons">

            <button>

                <i class="fa-regular fa-bell"></i>

                <span class="notification">
                    2
                </span>

            </button>


            <button>

                <i class="fa-regular fa-heart"></i>

            </button>


            <button>

                <i class="fa-solid fa-cart-shopping"></i>

                <span class="notification">
                    3
                </span>

            </button>

        </div>

    </header>



    <!-- ================= PAGE HEADER ================= -->

    <section class="page-header">

        <div>

            <p>DEX DRIPZ COLLECTION</p>

            <h1>Fashion</h1>

            <span>
                Discover premium clothing designed
                to upgrade your everyday style.
            </span>

        </div>


        <div class="fashion-icon">

            <i class="fa-solid fa-shirt"></i>

        </div>

    </section>



    <!-- ================= FILTER BAR ================= -->

    <section class="filter-bar">

        <div>

            <strong>
                Fashion Collection
            </strong>

            <span>
                20 Products
            </span>

        </div>


        <div class="filters">

            <select id="sortProducts" onchange="sortProducts()">

                <option value="default">
                    Sort By
                </option>

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

                <option>
                    All Fashion
                </option>

                <option>
                    Men
                </option>

                <option>
                    Women
                </option>

                <option>
                    Unisex
                </option>

            </select>

        </div>

    </section>



    <!-- ================= PRODUCTS ================= -->

    <section class="products" id="products">



        <!-- PRODUCT 1 -->

        <div class="product" data-price="18500">

            <div class="product-img">

                <span class="sale">
                    -20%
                </span>

                <button class="heart">

                    <i class="fa-regular fa-heart"></i>

                </button>

                <i class="fa-solid fa-shirt product-symbol"></i>

            </div>


            <div class="product-info">

                <small>
                    Men's Fashion
                </small>

                <h3>
                    Premium Oversized T-Shirt
                </h3>

                <div class="rating">
                    ★★★★★
                    <span>(24)</span>
                </div>

                <div class="price">

                    <strong>
                        ₦18,500
                    </strong>

                    <del>
                        ₦23,000
                    </del>

                </div>

                <button class="cart-btn">
                    Add to Cart
                    <i class="fa-solid fa-cart-plus"></i>
                </button>

            </div>

        </div>



        <!-- PRODUCT 2 -->

        <div class="product" data-price="32000">

            <div class="product-img">

                <span class="sale">
                    -18%
                </span>

                <button class="heart">

                    <i class="fa-regular fa-heart"></i>

                </button>

                <i class="fa-solid fa-vest product-symbol"></i>

            </div>


            <div class="product-info">

                <small>
                    Men's Fashion
                </small>

                <h3>
                    Premium Denim Jacket
                </h3>

                <div class="rating">
                    ★★★★★
                    <span>(19)</span>
                </div>

                <div class="price">

                    <strong>
                        ₦32,000
                    </strong>

                    <del>
                        ₦39,000
                    </del>

                </div>

                <button class="cart-btn">
                    Add to Cart
                    <i class="fa-solid fa-cart-plus"></i>
                </button>

            </div>

        </div>



        <!-- PRODUCT 3 -->

        <div class="product" data-price="22000">

            <div class="product-img">

                <span class="sale">
                    -10%
                </span>

                <button class="heart">

                    <i class="fa-regular fa-heart"></i>

                </button>

                <i class="fa-solid fa-shirt product-symbol"></i>

            </div>


            <div class="product-info">

                <small>
                    Women's Fashion
                </small>

                <h3>
                    Casual Cotton Shirt
                </h3>

                <div class="rating">
                    ★★★★★
                    <span>(16)</span>
                </div>

                <div class="price">

                    <strong>
                        ₦22,000
                    </strong>

                    <del>
                        ₦24,500
                    </del>

                </div>

                <button class="cart-btn">
                    Add to Cart
                    <i class="fa-solid fa-cart-plus"></i>
                </button>

            </div>

        </div>



        <!-- PRODUCT 4 -->

        <div class="product" data-price="28000">

            <div class="product-img">

                <span class="sale">
                    -15%
                </span>

                <button class="heart">

                    <i class="fa-regular fa-heart"></i>

                </button>

                <i class="fa-solid fa-person-dress product-symbol"></i>

            </div>


            <div class="product-info">

                <small>
                    Women's Fashion
                </small>

                <h3>
                    Elegant Summer Dress
                </h3>

                <div class="rating">
                    ★★★★★
                    <span>(27)</span>
                </div>

                <div class="price">

                    <strong>
                        ₦28,000
                    </strong>

                    <del>
                        ₦33,000
                    </del>

                </div>

                <button class="cart-btn">
                    Add to Cart
                    <i class="fa-solid fa-cart-plus"></i>
                </button>

            </div>

        </div>



        <!-- PRODUCT 5 -->

        <div class="product" data-price="25000">

            <div class="product-img">

                <span class="sale">
                    -12%
                </span>

                <button class="heart">

                    <i class="fa-regular fa-heart"></i>

                </button>

                <i class="fa-solid fa-shirt product-symbol"></i>

            </div>


            <div class="product-info">

                <small>
                    Unisex
                </small>

                <h3>
                    Premium Polo Shirt
                </h3>

                <div class="rating">
                    ★★★★★
                    <span>(32)</span>
                </div>

                <div class="price">

                    <strong>
                        ₦25,000
                    </strong>

                    <del>
                        ₦28,500
                    </del>

                </div>

                <button class="cart-btn">
                    Add to Cart
                    <i class="fa-solid fa-cart-plus"></i>
                </button>

            </div>

        </div>



        <!-- PRODUCT 6 -->

        <div class="product" data-price="45000">

            <div class="product-img">

                <span class="sale">
                    -20%
                </span>

                <button class="heart">

                    <i class="fa-regular fa-heart"></i>

                </button>

                <i class="fa-solid fa-user-tie product-symbol"></i>

            </div>


            <div class="product-info">

                <small>
                    Men's Fashion
                </small>

                <h3>
                    Classic Formal Suit
                </h3>

                <div class="rating">
                    ★★★★★
                    <span>(14)</span>
                </div>

                <div class="price">

                    <strong>
                        ₦45,000
                    </strong>

                    <del>
                        ₦56,000
                    </del>

                </div>

                <button class="cart-btn">
                    Add to Cart
                    <i class="fa-solid fa-cart-plus"></i>
                </button>

            </div>

        </div>



        <!-- PRODUCT 7 -->

        <div class="product" data-price="19500">

            <div class="product-img">

                <span class="sale">
                    -10%
                </span>

                <button class="heart">

                    <i class="fa-regular fa-heart"></i>

                </button>

                <i class="fa-solid fa-shirt product-symbol"></i>

            </div>


            <div class="product-info">

                <small>
                    Women's Fashion
                </small>

                <h3>
                    Stylish Crop Jacket
                </h3>

                <div class="rating">
                    ★★★★★
                    <span>(21)</span>
                </div>

                <div class="price">

                    <strong>
                        ₦19,500
                    </strong>

                    <del>
                        ₦22,000
                    </del>

                </div>

                <button class="cart-btn">
                    Add to Cart
                    <i class="fa-solid fa-cart-plus"></i>
                </button>

            </div>

        </div>



        <!-- PRODUCT 8 -->

        <div class="product" data-price="30000">

            <div class="product-img">

                <span class="sale">
                    -15%
                </span>

                <button class="heart">

                    <i class="fa-regular fa-heart"></i>

                </button>

                <i class="fa-solid fa-person product-symbol"></i>

            </div>


            <div class="product-info">

                <small>
                    Men's Fashion
                </small>

                <h3>
                    Premium Cargo Outfit
                </h3>

                <div class="rating">
                    ★★★★★
                    <span>(25)</span>
                </div>

                <div class="price">

                    <strong>
                        ₦30,000
                    </strong>

                    <del>
                        ₦35,000
                    </del>

                </div>

                <button class="cart-btn">
                    Add to Cart
                    <i class="fa-solid fa-cart-plus"></i>
                </button>

            </div>

        </div>



    </section>



    <!-- ================= LOAD MORE ================= -->

    <div class="load-more">

        <button>
            Load More Products
        </button>

    </div>



    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-logo">
            <span>DEX</span> DRIPZ
        </div>

        <p>
            Premium fashion for your everyday lifestyle.
        </p>

        <div class="socials">

            <a href="#">
                <i class="fa-brands fa-facebook-f"></i>
            </a>

            <a href="#">
                <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="#">
                <i class="fa-brands fa-tiktok"></i>
            </a>

            <a href="#">
                <i class="fa-brands fa-whatsapp"></i>
            </a>

        </div>

        <small>
            © 2026 Dex Dripz. All Rights Reserved.
        </small>

    </footer>



</main>



<script>


/* ================= SEARCH ================= */

function searchProducts() {

    const search =
        document
        .getElementById("searchInput")
        .value
        .toLowerCase();


    const products =
        document.querySelectorAll(".product");


    products.forEach(product => {

        const name =
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



/* ================= WISHLIST ================= */

document
.querySelectorAll(".heart")
.forEach(button => {

    button.addEventListener("click", function() {

        const icon =
            this.querySelector("i");


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



/* ================= SORT PRODUCTS ================= */

function sortProducts() {

    const type =
        document
        .getElementById("sortProducts")
        .value;


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
                b.querySelector("h3")
                .textContent
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
```
