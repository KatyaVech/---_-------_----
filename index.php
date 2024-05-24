<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinyl Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    
    <header>
        <a href="#" class="logo"><i class='bx bxs-disc'></i>Vinyl Vibes</a>
        <!--Menu icon-->
        <div class="bx bx-menu" id="menu-icon"></div>
        <!--List-->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#customers">Customers</a></li>
        </ul>
        
        <!--Profile-->
        <div class="profile">
            <img src="img/profile.png" alt="profile">
            <?php
                session_start();
                // Check if the user is logged in
                if (isset($_SESSION['loggedin_user'])) {
                    $username = $_SESSION['loggedin_user'];
                    echo "<span> " . htmlspecialchars($username) . "</span>";
                } else {
                    echo "<span>User</span>";;
                }
            ?>
            <i class='bx bx-caret-down' ></i>
            <div class="dropdown">
                <ul>
                    <li><a href="login_form.html">Login</a></li>
                    <li><a href="register_form.html">Register</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="add_product_form.html">Add Product</a></li>
                    <li><a href="product_catalog.php">View Product Catalog</a></li>
                </ul>
            </div>
        </div>
    </header>


    <!--Home-->
    
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!--slide 1-->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>Vinyl Vibes - best sound dealer</span>
                    <h1>Home for music icons<br> and your<br> vinyl passions</h1>
                    <a href="#" class="btn">Shop Now<i class='bx bxs-right-arrow-alt'></i></a>
                </div>
                <img src="img/home1.png" alt="">
            </div>
            <!--slide 2-->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>Vinyl Vibes - best sound dealer</span>
                    <h1>Home for music icons<br> and your<br> vinyl passions</h1>
                    <a href="#" class="btn">Shop Now<i class='bx bxs-right-arrow-alt'></i></a>
                </div>
                
                <img src="img/home2.png">
            </div>
            <!--slide 3-->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>Vinyl Vibes - best sound dealer</span>
                    <h1>Home for music icons<br> and your<br> vinyl passions</h1>
                    <a href="#" class="btn">Shop Now<i class='bx bxs-right-arrow-alt'></i></a>
                </div>
                <img src="img/home3.png">
            </div>
        </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
    </section>
    <!--Categories-->
    <section class="categories" id="categories">
        <div class="heading">
            <h1>Browse most popular<br><span>Categories</h1>
                <a href="#" class="btn">See all<i class='bx bxs-right-arrow-alt'></i></a>
        </div>

        <!--Container Content-->
        <div class="categories-container">
            <!--box1-->
            <div class="box box1">
                <img src="img/cate1.png" alt="">
                <h2>Rock</h2>
                <span>12 Items</span>
                <i class='bx bxs-right-arrow-alt'></i>
            </div>
            <!--box2-->
            <div class="box box2">
                <img src="img/cate2.png" alt="">
                <h2>Blues</h2>
                <span>11 Items</span>
                <i class='bx bxs-right-arrow-alt'></i>
            </div>
            <!--box3-->
            <div class="box box3">
                <img src="img/cate3.png" alt="">
                <h2>Hip-Hop</h2>
                <span>15 Items</span>
                <i class='bx bxs-right-arrow-alt'></i>
            </div>
            <!--box4-->
            <div class="box box4">
                <img src="img/cate4.png" alt="">
                <h2>Classic</h2>
                <span>18 Items</span>
                <i class='bx bxs-right-arrow-alt'></i>
            </div>
            <!--box5-->
            <div class="box box5">
                <img src="img/cate5.png" alt="">
                <h2>Pop</h2>
                <span>12 Items</span>
                <i class='bx bxs-right-arrow-alt'></i>
            </div>
        </div>
    </section>
    <!--Products-->
    <section class="products" id="products">
        <div class="heading">
            <h1>Our best<br><span>sellers</h1>
                <a href="#" class="btn">Shop now<i class='bx bxs-right-arrow-alt'></i></a>
        </div>
        <!--product content-->
        <div class="products-container">
            <!--box1-->
            <div class="box">
                <img src="img/p1.png" alt="">
                <span>12-inch Vinyl</span>
                <h2>The white Stripes<br>De Stijl</h2>
                <h3 class="price">$23<span>/1LP</span></h3>
                <i class='bx bx-cart-alt' ></i>
                <i class='bx bx-heart' ></i>
                <span class="discount">-25%</span>
            </div>

             <!--box2-->
             <div class="box">
                <img src="img/p1.png" alt="">
                <span>12-inch Vinyl</span>
                <h2>The white Stripes<br>De Stijl</h2>
                <h3 class="price">$23<span>/1LP</span></h3>
                <i class='bx bx-cart-alt' ></i>
                <i class='bx bx-heart' ></i>
                <span class="discount">-10%</span>
            </div>
             <!--box3-->
             <div class="box">
                <img src="img/p1.png" alt="">
                <span>12-inch Vinyl</span>
                <h2>The white Stripes<br>De Stijl</h2>
                <h3 class="price">$23<span>/1LP</span></h3>
                <i class='bx bx-cart-alt' ></i>
                <i class='bx bx-heart' ></i>
                <span class="discount">-5%</span>
            </div>
             <!--box4-->
             <div class="box">
                <img src="img/p1.png" alt="">
                <span>12-inch Vinyl</span>
                <h2>The white Stripes<br>De Stijl</h2>
                <h3 class="price">$23<span>/1LP</span></h3>
                <i class='bx bx-cart-alt' ></i>
                <i class='bx bx-heart' ></i>
                <span class="discount">-5%</span>
            </div>
             <!--box5-->
             <div class="box">
                <img src="img/p1.png" alt="">
                <span>12-inch Vinyl</span>
                <h2>The white Stripes<br>De Stijl</h2>
                <h3 class="price">$23<span>/1LP</span></h3>
                <i class='bx bx-cart-alt' ></i>
                <i class='bx bx-heart' ></i>
                <span class="discount">-5%</span>
            </div>
             <!--box6-->
             <div class="box">
                <img src="img/p1.png" alt="">
                <span>12-inch Vinyl</span>
                <h2>The white Stripes<br>De Stijl</h2>
                <h3 class="price">$23<span>/1LP</span></h3>
                <i class='bx bx-cart-alt' ></i>
                <i class='bx bx-heart' ></i>
                <span class="discount">-5%</span>
            </div>
        </div>
        
    </section>
    <!--About-->
    <section class="about" id="about">
        <img src="img/about.jpg" alt="">
        <div class="about-text">
            <span>About Us</span> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At officiis cumque suscipit modi, molestiae commodi omnis inventore veritatis magnam beatae quos possimus non, recusandae aspernatur culpa! Facere nemo unde corrupti?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, tempore ducimus.</p>
            <a href="#" class="btn">Learn More<i class='bx bxs-right-arrow-alt'></i></a>
        </div>
    </section>
    <!--customers-->
    <section class="customers" id="customers">
        <h2>Why Customer's Love US?</h2>
        <!--Customer Content-->
        <div class="customers-container">
            <!--Review 1-->
            <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut maiores rem est magnam itaque optio repudiandae!</p>
                <div class="review-profile">
                    <img src="img/c1.jpg" alt="">
                    <h3>Katya Vechorka</h3>

                </div>
            </div>
             <!--Review 2-->
             <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut maiores rem est magnam itaque optio repudiandae!</p>
                <div class="review-profile">
                    <img src="img/c1.jpg" alt="">
                    <h3>Denis Kobzar</h3>

                </div>
            </div>
             <!--Review 3-->
             <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut maiores rem est magnam itaque optio repudiandae!</p>
                <div class="review-profile">
                    <img src="img/c1.jpg" alt="">
                    <h3>Katya Vechorka</h3>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <section class="footer" id="footer">
        <div class="footer-box">
            <a href="#" class="logo"><i class='bx bxs-disc'></i>Vinyl Vibes</a>
            <p>Sumy, 57th Street, 4th <br>Floor, NYC 10022</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h2>Usefull Links</h2>
            <a href="#">Payment & Tax<br></a>
            <a href="#">Terms Of Use<br></a>
            <a href="#">My Blog<br></a>
            <a href="#">Return Policy</a>
        </div>
        <div class="footer-box">
            <h2>Newsletter</h2>
            <p>Get 10% Discount with <br>Email Newsletter</p>
            <form action="">
                 <i class='bx bxs-envelope' ></i>
                <input type="email" name="" id="" placeholder="Enter Your Email">
                <i class='bx bx-arrow-back bx-rotate-180' ></i>
            </form> 
        </div>
    </section>

    <!--Copyright-->
    <div class="copyright">
        <p>&#169; CarpoolVenom All Right Reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>

</body>
</html>