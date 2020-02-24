<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header header-transparent header-sticky">
    <div class="header-bottom menu-right">
        <div
                class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
            <div class="row align-items-center">

                <!--Logo start-->
                <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <!--Logo end-->

                <!--Menu start-->
                <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                    <nav class="main-menu" style="display: block;">
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                    <li><a href="index-4.html">Home Four</a></li>
                                    <li><a href="index-5.html">Home Five</a></li>
                                    <li><a href="index-6.html">Home Six</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Shop</a>
                                <ul class="mega-menu four-column">
                                    <li><a href="#" class="item-link">Pages</a>
                                        <ul>
                                            <li><a href="compare.html">Compare</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">Login Register</a></li>
                                            <li><a href="faq.html">Frequently Questions</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="item-link">Shop Layout</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-three-column.html">Shop Three Column</a></li>
                                            <li><a href="shop-four-column.html">Shop Four Column</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-list-nosidebar.html">Shop List No Sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                            </li>
                                            <li><a href="shop-list-right-sidebar.html">Shop List Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="item-link">Product Details</a>
                                        <ul>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="single-product-variable.html">Variable Product</a></li>
                                            <li><a href="single-product-affiliate.html">Affiliate Product</a>
                                            </li>
                                            <li><a href="single-product-group.html">Group Product</a></li>
                                            <li><a href="single-product-tabstyle-2.html">Product Left Tab</a>
                                            </li>
                                            <li><a href="single-product-tabstyle-3.html">Product Right Tab</a>
                                            </li>
                                            <li><a href="single-product-gallery-left.html">Product Gallery
                                                    Left</a></li>
                                            <li><a href="single-product-gallery-right.html">Product Gallery
                                                    Right</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="item-link">Product Details</a>
                                        <ul>
                                            <li><a href="single-product-sticky-left.html">Product Sticky
                                                    Left</a></li>
                                            <li><a href="single-product-sticky-right.html">Product Sticky
                                                    Right</a></li>
                                            <li><a href="single-product-slider-box.html">Product Box Slider</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Three Column</a></li>
                                    <li><a href="blog-two-column.html">Blog Two Column</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-gallery.html">Blog Details Gallery</a></li>
                                    <li><a href="blog-details-audio.html">Blog Details Audio</a></li>
                                    <li><a href="blog-details-video.html">Blog Details Video</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->

                <!--Search Cart Start-->
                <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                    <div class="header-search">
                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                        <div class="header-search-form">
                            <form action="#">
                                <input type="text" placeholder="Type and hit enter">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="header-cart">
                        <a href="cart.html"><i class="fa fa-shopping-cart"></i><span>3</span></a>
                        <!--Mini Cart Dropdown Start-->
                        <div class="header-cart-dropdown">
                            <ul class="cart-items">
                                <li class="single-cart-item">
                                    <div class="cart-img">
                                        <a href="cart.html"><img src="images/cart/cart-1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-content">
                                        <h5 class="product-name"><a href="single-product.html">Dell Inspiron
                                                24</a></h5>
                                        <span class="product-quantity">1 ×</span>
                                        <span class="product-price">$278.00</span>
                                    </div>
                                    <div class="cart-item-remove">
                                        <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </li>
                                <li class="single-cart-item">
                                    <div class="cart-img">
                                        <a href="cart.html"><img src="images/cart/cart-2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-content">
                                        <h5 class="product-name"><a href="single-product.html">Lenovo Ideacentre
                                                300</a></h5>
                                        <span class="product-quantity">1 ×</span>
                                        <span class="product-price">$23.39</span>
                                    </div>
                                    <div class="cart-item-remove">
                                        <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="cart-total">
                                <h5>Subtotal :<span class="float-right">$39.79</span></h5>
                                <h5>Eco Tax (-2.00) :<span class="float-right">$7.00</span></h5>
                                <h5>VAT (20%) : <span class="float-right">$0.00</span></h5>
                                <h5>Total : <span class="float-right">$46.79</span></h5>
                            </div>
                            <div class="cart-btn">
                                <a href="cart.html">View Cart</a>
                                <a href="checkout.html">checkout</a>
                            </div>
                        </div>
                        <!--Mini Cart Dropdown End-->
                    </div>
                </div>
                <!--Search Cart End-->
            </div>

            <!--Mobile Menu start-->
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--Mobile Menu end-->

        </div>
    </div>
</header>
<div class="hero-section section position-relative">

    <div class="tf-element-carousel slider-nav slick-carousel-0 slick-initialized slick-slider slick-dotted"
         data-slick-options="{
    &quot;slidesToShow&quot;: 1,
    &quot;slidesToScroll&quot;: 1,
    &quot;infinite&quot;: true,
    &quot;arrows&quot;: true,
    &quot;dots&quot;: true
    }" data-slick-responsive="[
    {&quot;breakpoint&quot;:768, &quot;settings&quot;: {
    &quot;slidesToShow&quot;: 1
    }},
    {&quot;breakpoint&quot;:575, &quot;settings&quot;: {
    &quot;slidesToShow&quot;: 1,
    &quot;arrows&quot;: false,
    &quot;autoplay&quot;: true
    }}
    ]"><button class="slick-prev slick-arrow" style="display: block;">prev</button>
        <!--Hero Item start-->
        <div class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 6830px; transform: translate3d(-1366px, 0px, 0px);">
                <div class="hero-item bg-image slick-slide slick-cloned" data-bg="./images/hero/hero-4.jpg"
                     data-slick-index="-1"
                     style="background-image: url(&quot;./images/hero/hero-4.jpg&quot;); width: 1366px;"
                     aria-hidden="true" tabindex="-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-3">

                                    <h2>Book your appointment</h2>
                                    <h1>Light Spring</h1>
                                    <h3>Makeup / Cosmetics</h3>
                                    <a href="shop.html" tabindex="-1">Shop collection now!</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-item bg-image slick-slide slick-current slick-active"
                     data-bg="./images/hero/hero-3.jpg" data-slick-index="0"
                     style="background-image: url(&quot;./images/hero/hero-3.jpg&quot;); width: 1366px;"
                     aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00"
                     aria-describedby="slick-slide-control00">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-3">

                                    <h2>Save Now Beauty of Life</h2>
                                    <h1>treatments For all</h1>
                                    <h3>Spa Cosmetics</h3>
                                    <a href="shop.html" tabindex="0">Shop collection now!</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-item bg-image slick-slide" data-bg="./images/hero/hero-4.jpg"
                     data-slick-index="1"
                     style="background-image: url(&quot;./images/hero/hero-4.jpg&quot;); width: 1366px;"
                     aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01"
                     aria-describedby="slick-slide-control01">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-3">

                                    <h2>Book your appointment</h2>
                                    <h1>Light Spring</h1>
                                    <h3>Makeup / Cosmetics</h3>
                                    <a href="shop.html" tabindex="-1">Shop collection now!</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-item bg-image slick-slide slick-cloned" data-bg="./images/hero/hero-3.jpg"
                     data-slick-index="2"
                     style="background-image: url(&quot;./images/hero/hero-3.jpg&quot;); width: 1366px;"
                     aria-hidden="true" tabindex="-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-3">

                                    <h2>Save Now Beauty of Life</h2>
                                    <h1>treatments For all</h1>
                                    <h3>Spa Cosmetics</h3>
                                    <a href="shop.html" tabindex="-1">Shop collection now!</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-item bg-image slick-slide slick-cloned" data-bg="./images/hero/hero-4.jpg"
                     data-slick-index="3"
                     style="background-image: url(&quot;./images/hero/hero-4.jpg&quot;); width: 1366px;"
                     aria-hidden="true" tabindex="-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-3">

                                    <h2>Book your appointment</h2>
                                    <h1>Light Spring</h1>
                                    <h3>Makeup / Cosmetics</h3>
                                    <a href="shop.html" tabindex="-1">Shop collection now!</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Item end-->

        <!--Hero Item start-->

        <!--Hero Item end-->
        <button class="slick-next slick-arrow" style="display: block;">next</button>
        <ul class="slick-dots" style="display: flex;" role="tablist">
            <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00"
                                                                 aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button>
            </li>
            <li role="presentation"><button type="button" role="tab" id="slick-slide-control01"
                                            aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li>
        </ul>
    </div>

</div>
<div
        class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-50 pt-xs-40 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div
            class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
        <div class="row">

            <div class="col-lg-3 col-xl-2">
                <!-- Section Title Start -->
                <div class="section-title-two mb-40 mb-xs-20">
                    <span>our</span>
                    <h2>Featured</h2>
                    <span>proucts</span>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-9 col-xl-10">
                <div class="row tf-element-carousel product-nav-two slick-carousel-1 slick-initialized slick-slider"
                     data-slick-options="{
                        &quot;slidesToShow&quot;: 5,
                        &quot;slidesToScroll&quot;: 1,
                        &quot;infinite&quot;: true,
                        &quot;arrows&quot;: true,
                        &quot;prevArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-prev&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-left&quot; },
                        &quot;nextArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-next&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-right&quot; }
                        }" data-slick-responsive="[
                        {&quot;breakpoint&quot;:1899, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 4
                        }},
                        {&quot;breakpoint&quot;:1400, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 3
                        }},
                        {&quot;breakpoint&quot;:1199, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2
                        }},
                        {&quot;breakpoint&quot;:992, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2
                        }},
                        {&quot;breakpoint&quot;:768, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2,
                        &quot;arrows&quot;: false,
                        &quot;autoplay&quot;: true
                        }},
                        {&quot;breakpoint&quot;:576, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 1
                        }}
                        ]"><span class="slick-btn slick-prev slick-arrow" style="display: block;"><i
                                class="fa fa-angle-left"></i></span>








                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 7220px; transform: translate3d(-1140px, 0px, 0px);">
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-6.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brug</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-7.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruc</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brusb</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€90.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-current slick-active" style="width: 380px;"
                                 data-slick-index="0" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-1.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-active" style="width: 380px;"
                                 data-slick-index="1" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-2.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Brux</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-active" style="width: 380px;"
                                 data-slick-index="2" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-3.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Bruz</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="3"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-4.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruk</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€115.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="4"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-5.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="5"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-6.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brug</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="6"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-7.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruc</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="7"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brusb</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€90.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="8" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-1.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="9" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-2.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brux</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="10" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-3.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruz</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="11" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-4.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruk</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€115.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="12" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-5.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="13" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-6.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brug</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="14" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-7.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruc</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="15" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brusb</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€90.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div><span class="slick-btn slick-next slick-arrow" style="display: block;"><i
                                class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="deal-product-section section bg-gray-two pt-0 pt-sm-5 pb-20 pb-sm-0 pb-xs-25">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tf-element-carousel slick-carousel-2 slick-initialized slick-slider" data-slick-options="{
                    &quot;slidesToShow&quot;: 1,
                    &quot;slidesToScroll&quot;: 1,
                    &quot;infinite&quot;: true,
                    &quot;arrows&quot;: false,
                    &quot;prevArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-prev&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-left&quot; },
                    &quot;nextArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-next&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-right&quot; }
                    }" data-slick-responsive="[
                    {&quot;breakpoint&quot;:768, &quot;settings&quot;: {
                    &quot;slidesToShow&quot;: 1,
                    &quot;arrows&quot;: false,
                    &quot;autoplay&quot;: true
                    }},
                    {&quot;breakpoint&quot;:575, &quot;settings&quot;: {
                    &quot;slidesToShow&quot;: 1,
                    &quot;arrows&quot;: false,
                    &quot;autoplay&quot;: true
                    }}
                    ]">
                    <!-- Single Deal Product Start -->
                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 8190px; transform: translate3d(-1170px, 0px, 0px);">
                            <div class="single-deal-product slick-slide slick-cloned" data-slick-index="-1"
                                 aria-hidden="true" style="width: 1170px;" tabindex="-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="single-product.html" tabindex="-1">
                                                <img src="./images/deal-product/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-title">
                                            <h2><span>Hot</span><span>Deal</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut..</p>
                                            <div class="cs-countdown black-color">
                                                <div class="pro-countdown" data-countdown="2021/01/10">
                                                    <div class="countdown-wrap">
                                                        <div class="day"><span class="number">322</span><span
                                                                    class="text">days</span></div>
                                                        <div class="hour"><span class="number">13</span><span
                                                                    class="text">hours</span></div>
                                                        <div class="minute"><span class="number">32</span><span
                                                                    class="text">min</span></div>
                                                        <div class="second"><span class="number">58</span><span
                                                                    class="text">sec</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="shop.html" tabindex="-1">Shop collection now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-product slick-slide slick-current slick-active"
                                 data-slick-index="0" aria-hidden="false" style="width: 1170px;" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="single-product.html" tabindex="0">
                                                <img src="./images/deal-product/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-title">
                                            <h2><span>Hot</span><span>Deal</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut..</p>
                                            <div class="cs-countdown black-color">
                                                <div class="pro-countdown" data-countdown="2021/01/10">
                                                    <div class="countdown-wrap">
                                                        <div class="day"><span class="number">322</span><span
                                                                    class="text">days</span></div>
                                                        <div class="hour"><span class="number">13</span><span
                                                                    class="text">hours</span></div>
                                                        <div class="minute"><span class="number">32</span><span
                                                                    class="text">min</span></div>
                                                        <div class="second"><span class="number">58</span><span
                                                                    class="text">sec</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="shop.html" tabindex="0">Shop collection now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-product slick-slide" data-slick-index="1" aria-hidden="true"
                                 style="width: 1170px;" tabindex="-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="single-product.html" tabindex="-1">
                                                <img src="./images/deal-product/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-title">
                                            <h2><span>Hot</span><span>Deal</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut..</p>
                                            <div class="cs-countdown black-color">
                                                <div class="pro-countdown" data-countdown="2021/01/10">
                                                    <div class="countdown-wrap">
                                                        <div class="day"><span class="number">322</span><span
                                                                    class="text">days</span></div>
                                                        <div class="hour"><span class="number">13</span><span
                                                                    class="text">hours</span></div>
                                                        <div class="minute"><span class="number">32</span><span
                                                                    class="text">min</span></div>
                                                        <div class="second"><span class="number">58</span><span
                                                                    class="text">sec</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="shop.html" tabindex="-1">Shop collection now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-product slick-slide" data-slick-index="2" aria-hidden="true"
                                 style="width: 1170px;" tabindex="-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="single-product.html" tabindex="-1">
                                                <img src="./images/deal-product/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-title">
                                            <h2><span>Hot</span><span>Deal</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut..</p>
                                            <div class="cs-countdown black-color">
                                                <div class="pro-countdown" data-countdown="2021/01/10">
                                                    <div class="countdown-wrap">
                                                        <div class="day"><span class="number">322</span><span
                                                                    class="text">days</span></div>
                                                        <div class="hour"><span class="number">13</span><span
                                                                    class="text">hours</span></div>
                                                        <div class="minute"><span class="number">32</span><span
                                                                    class="text">min</span></div>
                                                        <div class="second"><span class="number">58</span><span
                                                                    class="text">sec</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="shop.html" tabindex="-1">Shop collection now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-product slick-slide slick-cloned" data-slick-index="3"
                                 aria-hidden="true" style="width: 1170px;" tabindex="-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="single-product.html" tabindex="-1">
                                                <img src="./images/deal-product/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-title">
                                            <h2><span>Hot</span><span>Deal</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut..</p>
                                            <div class="cs-countdown black-color">
                                                <div class="pro-countdown" data-countdown="2021/01/10">
                                                    <div class="countdown-wrap">
                                                        <div class="day"><span class="number">322</span><span
                                                                    class="text">days</span></div>
                                                        <div class="hour"><span class="number">13</span><span
                                                                    class="text">hours</span></div>
                                                        <div class="minute"><span class="number">32</span><span
                                                                    class="text">min</span></div>
                                                        <div class="second"><span class="number">58</span><span
                                                                    class="text">sec</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="shop.html" tabindex="-1">Shop collection now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-product slick-slide slick-cloned" data-slick-index="4"
                                 aria-hidden="true" style="width: 1170px;" tabindex="-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="single-product.html" tabindex="-1">
                                                <img src="./images/deal-product/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-title">
                                            <h2><span>Hot</span><span>Deal</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut..</p>
                                            <div class="cs-countdown black-color">
                                                <div class="pro-countdown" data-countdown="2021/01/10">
                                                    <div class="countdown-wrap">
                                                        <div class="day"><span class="number">322</span><span
                                                                    class="text">days</span></div>
                                                        <div class="hour"><span class="number">13</span><span
                                                                    class="text">hours</span></div>
                                                        <div class="minute"><span class="number">32</span><span
                                                                    class="text">min</span></div>
                                                        <div class="second"><span class="number">58</span><span
                                                                    class="text">sec</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="shop.html" tabindex="-1">Shop collection now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-product slick-slide slick-cloned" data-slick-index="5"
                                 aria-hidden="true" style="width: 1170px;" tabindex="-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="single-product.html" tabindex="-1">
                                                <img src="./images/deal-product/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-title">
                                            <h2><span>Hot</span><span>Deal</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut..</p>
                                            <div class="cs-countdown black-color">
                                                <div class="pro-countdown" data-countdown="2021/01/10">
                                                    <div class="countdown-wrap">
                                                        <div class="day"><span class="number">322</span><span
                                                                    class="text">days</span></div>
                                                        <div class="hour"><span class="number">13</span><span
                                                                    class="text">hours</span></div>
                                                        <div class="minute"><span class="number">32</span><span
                                                                    class="text">min</span></div>
                                                        <div class="second"><span class="number">58</span><span
                                                                    class="text">sec</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="shop.html" tabindex="-1">Shop collection now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Deal Product End -->
                    <!-- Single Deal Product Start -->

                    <!-- Single Deal Product End -->
                    <!-- Single Deal Product Start -->

                    <!-- Single Deal Product End -->
                </div>
            </div>
        </div>
    </div>
</div>
<div
        class="product-section section pt-100 pt-lg-70 pt-md-65 pt-sm-60 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div
            class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
        <div class="row">

            <div class="col-xl-2 col-lg-3">
                <!-- Section Title Start -->
                <div class="section-title-two mb-40 mb-xs-20">
                    <span>our</span>
                    <h2>Best seller</h2>
                    <span>proucts</span>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-xl-10 col-lg-9">
                <div class="row tf-element-carousel product-nav-two slick-carousel-3 slick-initialized slick-slider"
                     data-slick-options="{
                        &quot;slidesToShow&quot;: 5,
                        &quot;slidesToScroll&quot;: 1,
                        &quot;infinite&quot;: true,
                        &quot;arrows&quot;: true,
                        &quot;prevArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-prev&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-left&quot; },
                        &quot;nextArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-next&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-right&quot; }
                        }" data-slick-responsive="[
                        {&quot;breakpoint&quot;:1899, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 4
                        }},
                        {&quot;breakpoint&quot;:1400, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 3
                        }},
                        {&quot;breakpoint&quot;:1199, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2
                        }},
                        {&quot;breakpoint&quot;:992, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2
                        }},
                        {&quot;breakpoint&quot;:768, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2,
                        &quot;arrows&quot;: false,
                        &quot;autoplay&quot;: true
                        }},
                        {&quot;breakpoint&quot;:576, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 1,
                        &quot;arrows&quot;: false,
                        &quot;autoplay&quot;: true
                        }}
                        ]"><span class="slick-btn slick-prev slick-arrow" style="display: block;"><i
                                class="fa fa-angle-left"></i></span>








                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 7220px; transform: translate3d(-1140px, 0px, 0px);">
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-6.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brug</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-7.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruc</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brusb</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€90.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-current slick-active" style="width: 380px;"
                                 data-slick-index="0" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-12.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-active" style="width: 380px;"
                                 data-slick-index="1" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-13.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Brux</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-active" style="width: 380px;"
                                 data-slick-index="2" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-14.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Bruz</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="3"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-4.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruk</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€115.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="4"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-5.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="5"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-6.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brug</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="6"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-7.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruc</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="7"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brusb</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€90.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="8" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-12.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="9" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-13.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brux</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="10" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-14.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruz</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="11" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-4.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruk</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€115.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="12" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-5.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="13" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-6.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brug</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="14" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-7.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruc</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="15" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brusb</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€90.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div><span class="slick-btn slick-next slick-arrow" style="display: block;"><i
                                class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="banner-section section bg-image pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-95 pb-lg-75 pb-md-65 pb-sm-55 pb-xs-45"
     data-bg="./images/banner/img_bannermid.jpg"
     style="background-image: url(&quot;./images/banner/img_bannermid.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">

                    <h2>A Single Step Skin Perfector!</h2>
                    <h1>Makeup melt</h1>
                    <h3>cleansing balm</h3>
                    <a href="shop.html">Shop collection now!</a>

                </div>
            </div>
        </div>
    </div>
</div>
<div
        class="product-section section pt-100 pt-lg-70 pt-md-65 pt-sm-60 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div
            class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
        <div class="row">

            <div class="col-lg-3 col-xl-2">
                <!-- Section Title Start -->
                <div class="section-title-two mb-40 mb-xs-20">
                    <span>our</span>
                    <h2>2019 trend</h2>
                    <span>proucts</span>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-9 col-xl-10">
                <div class="row tf-element-carousel product-nav-two slick-carousel-4 slick-initialized slick-slider"
                     data-slick-options="{
                        &quot;slidesToShow&quot;: 5,
                        &quot;slidesToScroll&quot;: 1,
                        &quot;infinite&quot;: true,
                        &quot;arrows&quot;: true,
                        &quot;prevArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-prev&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-left&quot; },
                        &quot;nextArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-next&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-right&quot; }
                        }" data-slick-responsive="[
                        {&quot;breakpoint&quot;:1899, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 4
                        }},
                        {&quot;breakpoint&quot;:1400, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 3
                        }},
                        {&quot;breakpoint&quot;:1199, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2
                        }},
                        {&quot;breakpoint&quot;:992, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2
                        }},
                        {&quot;breakpoint&quot;:768, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2,
                        &quot;arrows&quot;: false,
                        &quot;autoplay&quot;: true
                        }},
                        {&quot;breakpoint&quot;:576, &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 1,
                        &quot;arrows&quot;: false,
                        &quot;autoplay&quot;: true
                        }}
                        ]"><span class="slick-btn slick-prev slick-arrow" style="display: block;"><i
                                class="fa fa-angle-left"></i></span>








                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 7220px; transform: translate3d(-1140px, 0px, 0px);">
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-12.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-13.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brux</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-14.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruz</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-current slick-active" style="width: 380px;"
                                 data-slick-index="0" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-15.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Bruk</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€115.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-active" style="width: 380px;"
                                 data-slick-index="1" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-16.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-active" style="width: 380px;"
                                 data-slick-index="2" aria-hidden="false" tabindex="0">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="0">
                                            <img src="./images/product/product-17.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="0"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="0">White Shave Brug</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="3"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-18.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruc</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="4"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brusb</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€90.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="5"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-12.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="6"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-13.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brux</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide" style="width: 380px;" data-slick-index="7"
                                 aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-14.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruz</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="8" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-15.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruk</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€115.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="9" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-16.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="10" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-17.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brug</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="11" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-18.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruc</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€70.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="12" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brusb</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€90.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="13" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-12.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="14" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-13.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Brux</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <div class="col-lg-3 slick-slide slick-cloned" style="width: 380px;"
                                 data-slick-index="15" aria-hidden="true" tabindex="-1">
                                <!-- Single Product Start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="single-product.html" tabindex="-1">
                                            <img src="./images/product/product-14.jpg" alt="">
                                        </a>
                                        <span class="descount-sticker">-10%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#" tabindex="-1">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                       title="Quick View" tabindex="-1"><i
                                                                class="fa fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" tabindex="-1"><i class="fa fa-exchange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <h3><a href="single-product.html" tabindex="-1">White Shave Bruz</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€130.00</span></h4>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div><span class="slick-btn slick-next slick-arrow" style="display: block;"><i
                                class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="cta-section section bg-image pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-40"
     data-bg="images/bg/cta-bg.jpg" style="background-image: url(&quot;images/bg/cta-bg.jpg&quot;);">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="cta-content">
                    <h3>Get <span>10%</span> Discount</h3>
                    <p><span>Subcribe to the TheFace mailing list to receive update on mnew arrivals,</span>
                        <span>special offers and other discount information.</span></p>
                    <div class="cta-form">
                        <form id="mc-form" class="mc-form" novalidate="true">
                            <input id="mc-email" type="email" autocomplete="off"
                                   placeholder="Your email address here" name="EMAIL">
                            <button id="mc-submit" class="cta-btn">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div
        class="blog-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-75 pb-lg-55 pb-md-45 pb-sm-35 pb-xs-30">
    <div class="container">

        <div class="row">
            <!-- Section Title Start -->
            <div class="col">
                <div class="section-title mb-40 mb-xs-20">
                    <h2>From the blog</h2>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row tf-element-carousel slick-carousel-5 slick-initialized slick-slider" data-slick-options="{
                &quot;slidesToShow&quot;: 3,
                &quot;slidesToScroll&quot;: 1,
                &quot;infinite&quot;: true,
                &quot;arrows&quot;: true,
                &quot;prevArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-prev&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-left&quot; },
                &quot;nextArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-next&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-right&quot; }
                }" data-slick-responsive="[
                {&quot;breakpoint&quot;:1199, &quot;settings&quot;: {
                &quot;slidesToShow&quot;: 3
                }},
                {&quot;breakpoint&quot;:992, &quot;settings&quot;: {
                &quot;slidesToShow&quot;: 2
                }},
                {&quot;breakpoint&quot;:768, &quot;settings&quot;: {
                &quot;slidesToShow&quot;: 2,
                &quot;arrows&quot;: false,
                &quot;autoplay&quot;: true
                }},
                {&quot;breakpoint&quot;:575, &quot;settings&quot;: {
                &quot;slidesToShow&quot;: 1,
                &quot;arrows&quot;: false,
                &quot;autoplay&quot;: true
                }}
                ]"><span class="slick-btn slick-prev slick-arrow" style="display: block;"><i
                        class="fa fa-angle-left"></i></span>
            <!-- Single Blog Start -->
            <div class="slick-list draggable">
                <div class="slick-track"
                     style="opacity: 1; width: 4400px; transform: translate3d(-1200px, 0px, 0px);">
                    <div class="blog col slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                         style="width: 400px;" tabindex="-1">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="-1"><img
                                            src="./images/blog/blog2.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="-1">Blog image post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                         style="width: 400px;" tabindex="-1">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="-1"><img
                                            src="./images/blog/blog3.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="-1">Blog Audio post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                         style="width: 400px;" tabindex="-1">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="-1"><img
                                            src="./images/blog/blog1.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="-1">Blog Video post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-current slick-active" data-slick-index="0"
                         aria-hidden="false" style="width: 400px;" tabindex="0">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="0"><img
                                            src="./images/blog/blog1.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="0">Cool boy with tattoo</a>
                                </h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="0">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                         style="width: 400px;" tabindex="0">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="0"><img
                                            src="./images/blog/blog2.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="0">Blog image post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="0">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                         style="width: 400px;" tabindex="0">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="0"><img
                                            src="./images/blog/blog3.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="0">Blog Audio post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="0">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide" data-slick-index="3" aria-hidden="true" style="width: 400px;"
                         tabindex="-1">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="-1"><img
                                            src="./images/blog/blog1.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="-1">Blog Video post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-cloned" data-slick-index="4" aria-hidden="true"
                         style="width: 400px;" tabindex="-1">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="-1"><img
                                            src="./images/blog/blog1.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="-1">Cool boy with tattoo</a>
                                </h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-cloned" data-slick-index="5" aria-hidden="true"
                         style="width: 400px;" tabindex="-1">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="-1"><img
                                            src="./images/blog/blog2.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="-1">Blog image post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-cloned" data-slick-index="6" aria-hidden="true"
                         style="width: 400px;" tabindex="-1">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="-1"><img
                                            src="./images/blog/blog3.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="-1">Blog Audio post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog col slick-slide slick-cloned" data-slick-index="7" aria-hidden="true"
                         style="width: 400px;" tabindex="-1">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image" tabindex="-1"><img
                                            src="./images/blog/blog1.png" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html" tabindex="-1">Blog Video post</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span
                                                    class="date">20</span><span class="separator">-</span><span
                                                    class="month">Jul</span></span></li>
                                </ul>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat </p>
                                <a class="readmore" href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->

            <!-- Single Blog End -->
            <!-- Single Blog Start -->

            <!-- Single Blog End -->
            <!-- Single Blog Start -->

            <!-- Single Blog End -->
            <span class="slick-btn slick-next slick-arrow" style="display: block;"><i
                        class="fa fa-angle-right"></i></span>
        </div>
    </div>
</div>
<div class="categorie-product-section section">
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-4">
                <!-- Single Categorie Product Start -->
                <div class="single-categorie">
                    <div class="categorie-image">
                        <img src="./images/categorie/cate-1.png" alt="">
                    </div>
                    <div class="categorie-content">
                        <h3>Now introducing</h3>
                        <a class="shop-btn" href="#">Shop now</a>
                        <h1>Spa Optima+</h1>
                    </div>
                </div>
                <!-- Single Categorie Product End -->
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- Single Categorie Product Start -->
                <div class="single-categorie">
                    <div class="categorie-image">
                        <img src="./images/categorie/cate-2.png" alt="">
                    </div>
                    <div class="categorie-content">
                        <h3>Wrinkle cure</h3>
                        <a class="shop-btn" href="#">Shop now</a>
                        <h1>Time Revolution</h1>
                    </div>
                </div>
                <!-- Single Categorie Product End -->
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- Single Categorie Product Start -->
                <div class="single-categorie">
                    <div class="categorie-image">
                        <img src="./images/categorie/cate-3.png" alt="">
                    </div>
                    <div class="categorie-content">
                        <h3>Pretty perks for every point you earn</h3>
                        <a class="shop-btn" href="#">Shop now</a>
                        <h1>Beauty Squad</h1>
                    </div>
                </div>
                <!-- Single Categorie Product End -->
            </div>
        </div>
    </div>
</div>
<footer class="footer-section section bg-dark">

    <!--Footer Top start-->
    <div
            class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-0">
        <div class="container">
            <div class="row row-25">

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                    <h4 class="title"><span class="text">About TheFace</span></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat</p>
                    <div class="footer-social">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-vimeo"></i></a>
                    </div>
                </div>
                <!--Footer Widget end-->


                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                    <h4 class="title"><span class="text">Information</span></h4>
                    <ul class="ft-menu">
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Gift Cards</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Gift Cards</a></li>
                        <li><a href="#">Unsubscribe Notification</a></li>
                    </ul>
                </div>
                <!--Footer Widget end-->


                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                    <h4 class="title"><span class="text">Our Offers</span></h4>
                    <ul class="ft-menu">
                        <li><a href="#">New products</a></li>
                        <li><a href="#">Top sellers</a></li>
                        <li><a href="#">Specials</a></li>
                        <li><a href="#">Manufacturers</a></li>
                        <li><a href="#">Suppliers</a></li>
                        <li><a href="#">Specials</a></li>
                        <li><a href="#">Service</a></li>
                    </ul>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                    <h4 class="title"><span class="text">Contact us</span></h4>
                    <ul class="address">
                        <li><i class="fa fa-home"></i><span>HH2 BacHa building, Tohuu Street Hanoi, Vietnam</span>
                        </li>
                        <li><i class="fa fa-phone"></i><span><a href="#">(08) 123 456 7890</a></span></li>
                        <li><i class="fa fa-envelope-o"></i><span><a href="#">yourmail@domain.com</a></span></li>
                    </ul>
                    <div class="payment-box mt-15 mb-15">
                        <a href="#"><img src="./images/payment.png" alt=""></a>
                    </div>
                </div>
                <!--Footer Widget end-->
            </div>
        </div>
    </div>
    <!--Footer Top end-->

    <!--Footer bottom start-->
    <div class="footer-bottom section">
        <div class="container ft-border pt-40 pb-40 pt-xs-20 pb-xs-20">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-8">
                    <div class="copyright text-left">
                        <p>Copyright ©2019 <a href="#">Theface</a>. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4">
                    <div class="footer-logo text-right">
                        <a href="index.html"><img src="./images/logofoo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer bottom end-->

</footer>
<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 mb-xxs-25 mb-xs-25 mb-sm-25">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-lg-image-1 tf-element-carousel slick-carousel-7 slick-initialized slick-slider"
                                     data-slick-options="{
                                        &quot;slidesToShow&quot;: 1,
                                        &quot;slidesToScroll&quot;: 1,
                                        &quot;infinite&quot;: true,
                                        &quot;asNavFor&quot;: &quot;.slider-thumbs-1&quot;,
                                        &quot;arrows&quot;: false,
                                        &quot;prevArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-prev&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-left&quot; },
                                        &quot;nextArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-next&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-right&quot; }
                                        }">
                                    <div class="slick-list draggable">
                                        <div class="slick-track"
                                             style="opacity: 1; width: 4213px; transform: translate3d(-383px, 0px, 0px);">
                                            <div class="lg-image slick-slide slick-cloned" data-slick-index="-1"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-5.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide slick-current slick-active"
                                                 data-slick-index="0" aria-hidden="false" style="width: 383px;"
                                                 tabindex="0">
                                                <img src="./images/product/large-product/l-product-1.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide" data-slick-index="1"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-2.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide" data-slick-index="2"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-3.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide" data-slick-index="3"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-4.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide" data-slick-index="4"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-5.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide slick-cloned" data-slick-index="5"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-1.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide slick-cloned" data-slick-index="6"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-2.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide slick-cloned" data-slick-index="7"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-3.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide slick-cloned" data-slick-index="8"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-4.jpg"
                                                     alt="">
                                            </div>
                                            <div class="lg-image slick-slide slick-cloned" data-slick-index="9"
                                                 aria-hidden="true" style="width: 383px;" tabindex="-1">
                                                <img src="./images/product/large-product/l-product-5.jpg"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <div class="product-details-thumbs slider-thumbs-1 tf-element-carousel slick-carousel-8 slick-initialized slick-slider"
                                     data-slick-options="{
                                        &quot;slidesToShow&quot;: 4,
                                        &quot;slidesToScroll&quot;: 1,
                                        &quot;infinite&quot;: true,
                                        &quot;focusOnSelect&quot;: true,
                                        &quot;asNavFor&quot;: &quot;.slider-lg-image-1&quot;,
                                        &quot;arrows&quot;: false,
                                        &quot;prevArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-prev&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-left&quot; },
                                        &quot;nextArrow&quot;: {&quot;buttonClass&quot;: &quot;slick-btn slick-next&quot;, &quot;iconClass&quot;: &quot;fa fa-angle-right&quot; }
                                        }" data-slick-responsive="[
                                        {&quot;breakpoint&quot;:991, &quot;settings&quot;: {
                                            &quot;slidesToShow&quot;: 3
                                        }},
                                        {&quot;breakpoint&quot;:767, &quot;settings&quot;: {
                                            &quot;slidesToShow&quot;: 4
                                        }},
                                        {&quot;breakpoint&quot;:479, &quot;settings&quot;: {
                                            &quot;slidesToShow&quot;: 2
                                        }}
                                    ]">
                                    <div class="slick-list draggable">
                                        <div class="slick-track"
                                             style="opacity: 1; width: 1386px; transform: translate3d(-396px, 0px, 0px);">
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="-4"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-2.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="-3"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-3.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="-2"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-4.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="-1"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-5.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-current slick-active"
                                                 data-slick-index="0" aria-hidden="false" style="width: 99px;"
                                                 tabindex="0"><img
                                                        src="./images/product/small-product/s-product-1.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-active" data-slick-index="1"
                                                 aria-hidden="false" style="width: 99px;" tabindex="0"><img
                                                        src="./images/product/small-product/s-product-2.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-active" data-slick-index="2"
                                                 aria-hidden="false" style="width: 99px;" tabindex="0"><img
                                                        src="./images/product/small-product/s-product-3.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-active" data-slick-index="3"
                                                 aria-hidden="false" style="width: 99px;" tabindex="0"><img
                                                        src="./images/product/small-product/s-product-4.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide" data-slick-index="4"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-5.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="5"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-1.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="6"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-2.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="7"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-3.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="8"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-4.jpg"
                                                        alt="product image thumb"></div>
                                            <div class="sm-image slick-slide slick-cloned" data-slick-index="9"
                                                 aria-hidden="true" style="width: 99px;" tabindex="-1"><img
                                                        src="./images/product/small-product/s-product-5.jpg"
                                                        alt="product image thumb"></div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                            <!--Product Details Left -->
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6">
                            <!-- product detail content -->

                            <!--Product Details Content Start-->
                            <div class="product-details-content">
                                <!--Product Nav Start-->
                                <div class="product-nav">
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <!--Product Nav End-->
                                <h2>White Shave Brux</h2>
                                <div class="single-product-reviews">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <a class="review-link" href="#">(1 customer review)</a>
                                </div>
                                <div class="single-product-price">
                                    <span class="price new-price">$66.00</span>
                                    <span class="regular-price">$77.00</span>
                                </div>
                                <div class="product-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus</p>
                                </div>
                                <div class="single-product-quantity">
                                    <form class="add-quantity" action="#">
                                        <div class="product-quantity">
                                            <input value="1" type="number">
                                        </div>
                                        <div class="add-to-link">
                                            <button class="product-add-btn" data-text="add to cart">add to
                                                cart</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="wishlist-compare-btn">
                                    <a href="#" class="wishlist-btn mb-md-10 mb-sm-10">Add to Wishlist</a>
                                    <a href="#" class="add-compare">Compare</a>
                                </div>
                                <div class="product-meta">
                                        <span class="posted-in">
                                            Categories:
                                            <a href="#">Accessories</a>,
                                            <a href="#">Electronics</a>
                                        </span>
                                </div>
                                <div class="single-product-sharing">
                                    <h3>Share this product</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Product Details Content End-->

                            <!-- End of product detail content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Placed js at the end of the document so the pages load faster -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
