<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Sweet Crumbs Bakery 🎀</title>

    <style>

        /* =========================================
           BASIC RESET
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Trebuchet MS", Arial, sans-serif;
            background: #fff3f8;
            color: #603746;
        }

        a {
            text-decoration: none;
        }


        /* =========================================
           NAVIGATION
        ========================================= */

        nav {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: #ffffff;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 18px 7%;

            border-bottom: 4px solid #ffc1d8;

            box-shadow: 0 5px 20px rgba(190, 80, 120, 0.12);
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #ff5795;
        }

        .logo span {
            color: #ff9fc2;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-links a {
            color: #633c4b;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #ff5795;
        }

        .nav-order {
            background: #ff659e;
            color: white !important;

            padding: 12px 22px;

            border-radius: 30px;

            box-shadow: 0 5px 0 #d9417c;
        }


        /* =========================================
           HERO
        ========================================= */

        .hero {
            min-height: 680px;

            padding: 90px 8%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            overflow: hidden;

            background:
                radial-gradient(
                    circle at 10% 15%,
                    #ffd1e2 0,
                    #ffd1e2 55px,
                    transparent 56px
                ),

                radial-gradient(
                    circle at 90% 20%,
                    #ffc3da 0,
                    #ffc3da 75px,
                    transparent 76px
                ),

                #fff0f6;
        }

        .hero-content {
            width: 55%;
        }

        .small-title {
            color: #ff5795;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-size: clamp(48px, 7vw, 78px);
            line-height: 1.05;

            color: #58303e;

            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #ff5795;
        }

        .hero-description {
            max-width: 600px;

            font-size: 18px;

            line-height: 1.8;

            color: #80606d;

            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;

            padding: 15px 28px;

            border-radius: 30px;

            font-weight: bold;

            transition: 0.25s;
        }

        .button-pink {
            background: #ff659e;
            color: white;

            box-shadow: 0 6px 0 #d9417c;
        }

        .button-pink:hover {
            transform: translateY(3px);
            box-shadow: 0 3px 0 #d9417c;
        }

        .button-white {
            background: white;
            color: #ff5795;

            border: 3px solid #ffafd0;
        }

        .button-white:hover {
            background: #fff0f6;
        }


        /* =========================================
           CARTOON BREAD
        ========================================= */

        .hero-character-area {
            width: 40%;

            display: flex;
            justify-content: center;
            align-items: center;

            position: relative;
        }

        .bread {
            width: 330px;
            height: 300px;

            background: #eeb47d;

            border: 9px solid white;

            border-radius:
                48% 48% 42% 42%;

            box-shadow:
                0 12px 0 #ed9abd,
                0 20px 35px rgba(200, 70, 120, 0.2);

            position: relative;

            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {

            0% {
                transform: translateY(0) rotate(-2deg);
            }

            50% {
                transform: translateY(-15px) rotate(2deg);
            }

            100% {
                transform: translateY(0) rotate(-2deg);
            }

        }

        .bread-face {
            position: absolute;

            left: 50%;
            top: 50%;

            transform: translate(-50%, -50%);
        }

        .eyes {
            display: flex;
            gap: 65px;

            justify-content: center;

            margin-bottom: 18px;
        }

        .eye {
            width: 17px;
            height: 25px;

            background: #54303d;

            border-radius: 50%;
        }

        .mouth {
            width: 35px;
            height: 20px;

            border-bottom: 5px solid #54303d;

            border-radius: 50%;
        }

        .cheeks {
            display: flex;
            gap: 110px;

            position: absolute;

            top: 50px;
            left: -37px;
        }

        .cheek {
            width: 32px;
            height: 18px;

            background: #f47fa9;

            border-radius: 50%;
        }

        .cute-label {
            position: absolute;

            bottom: -10px;
            left: 10px;

            background: white;

            padding: 15px 22px;

            border-radius: 20px;

            border: 3px solid #ffc0d7;

            box-shadow: 0 5px 0 #efa6c2;

            color: #ff5795;

            font-weight: bold;
        }


        /* =========================================
           SECTION
        ========================================= */

        section {
            padding: 90px 8%;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-heading small {
            color: #ff5795;

            font-weight: bold;

            letter-spacing: 3px;
        }

        .section-heading h2 {
            font-size: 45px;

            color: #58303e;

            margin: 12px 0;
        }

        .section-heading p {
            color: #80606d;
        }


        /* =========================================
           ABOUT
        ========================================= */

        .about {
            background: white;

            display: flex;

            align-items: center;

            gap: 70px;
        }

        .about-image {
            width: 45%;

            display: flex;

            justify-content: center;
        }

        .about-circle {
            width: 330px;
            height: 330px;

            background: #ffd4e4;

            border-radius: 50%;

            border: 10px solid white;

            box-shadow: 0 10px 0 #efa8c3;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 120px;
        }

        .about-content {
            width: 55%;
        }

        .about-content h2 {
            font-size: 45px;

            color: #58303e;

            margin-bottom: 20px;
        }

        .about-content p {
            color: #80606d;

            line-height: 1.8;

            margin-bottom: 15px;
        }

        .about-features {
            display: flex;

            gap: 15px;

            margin-top: 25px;

            flex-wrap: wrap;
        }

        .feature {
            background: #fff1f7;

            padding: 16px 20px;

            border-radius: 18px;

            border: 2px dashed #ffaccb;

            font-weight: bold;
        }


        /* =========================================
           PRODUCTS
        ========================================= */

        .products {
            background: #fff0f6;
        }

        .product-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 30px;
        }

        .product-card {
            background: white;

            border-radius: 25px;

            overflow: hidden;

            border: 4px solid #ffd0e1;

            box-shadow: 0 8px 0 #efb0c9;

            transition: 0.3s;
        }

        .product-card:hover {
            transform:
                translateY(-10px)
                rotate(-1deg);
        }

        .product-image {
            height: 220px;

            background: #ffd6e5;

            display: flex;

            justify-content: center;
            align-items: center;

            font-size: 100px;
        }

        .product-info {
            padding: 25px;
        }

        .product-info h3 {
            color: #58303e;

            font-size: 24px;

            margin-bottom: 10px;
        }

        .product-info p {
            color: #80606d;

            line-height: 1.6;

            font-size: 14px;
        }

        .product-bottom {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 20px;
        }

        .price {
            color: #ff5795;

            font-size: 21px;

            font-weight: bold;
        }

        .add-button {
            width: 43px;
            height: 43px;

            border: none;

            border-radius: 50%;

            background: #ff659e;

            color: white;

            font-size: 25px;

            cursor: pointer;

            box-shadow: 0 4px 0 #d9417c;
        }


        /* =========================================
           SPECIAL OFFER
        ========================================= */

        .special {
            margin: 70px 8%;

            padding: 55px;

            background: #ff6da5;

            color: white;

            border: 7px solid white;

            border-radius: 35px;

            box-shadow: 0 10px 0 #d94c85;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 30px;
        }

        .special h2 {
            font-size: 42px;

            margin-bottom: 12px;
        }

        .special p {
            line-height: 1.7;

            max-width: 650px;
        }

        .special-price {
            font-size: 60px;

            font-weight: bold;

            white-space: nowrap;
        }


        /* =========================================
           WHY US
        ========================================= */

        .why {
            background: white;
        }

        .why-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;
        }

        .why-card {
            text-align: center;

            background: #fff5f9;

            padding: 30px 20px;

            border: 3px solid #ffd6e5;

            border-radius: 25px;
        }

        .why-icon {
            font-size: 50px;

            margin-bottom: 15px;
        }

        .why-card h3 {
            color: #58303e;

            margin-bottom: 10px;
        }

        .why-card p {
            color: #80606d;

            line-height: 1.6;

            font-size: 14px;
        }


        /* =========================================
           GALLERY
        ========================================= */

        .gallery {
            background: #fff0f6;
        }

        .gallery-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;
        }

        .gallery-item {
            height: 220px;

            background: #ffcbdc;

            border: 6px solid white;

            border-radius: 25px;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 90px;

            box-shadow: 0 7px 0 #efa8c3;

            transition: 0.3s;
        }

        .gallery-item:hover {
            transform:
                scale(1.04)
                rotate(2deg);
        }


        /* =========================================
           REVIEWS
        ========================================= */

        .reviews {
            background: #ffd9e7;

            text-align: center;
        }

        .review-heart {
            font-size: 55px;
        }

        .review-text {
            max-width: 850px;

            margin: 20px auto;

            font-size: 28px;

            line-height: 1.6;

            color: #58303e;
        }

        .review-name {
            color: #80606d;
        }


        /* =========================================
           CONTACT
        ========================================= */

        .contact {
            background: white;

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 60px;
        }

        .contact-content h2 {
            font-size: 45px;

            color: #58303e;

            margin-bottom: 20px;
        }

        .contact-content p {
            color: #80606d;

            line-height: 1.8;
        }

        .contact-details {
            margin-top: 30px;
        }

        .contact-details div {
            margin: 18px 0;

            color: #633c4b;

            font-weight: bold;
        }

        .contact-form {
            background: #fff3f8;

            padding: 35px;

            border-radius: 25px;

            border: 3px solid #ffd0e1;

            box-shadow: 0 8px 0 #efb2ca;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;

            border: 2px solid #ffc1d8;

            border-radius: 15px;

            padding: 15px;

            margin-bottom: 15px;

            outline: none;

            font-family: inherit;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #ff5795;
        }

        .contact-form button {
            width: 100%;

            border: none;

            padding: 16px;

            border-radius: 30px;

            background: #ff659e;

            color: white;

            font-weight: bold;

            cursor: pointer;

            font-size: 16px;

            box-shadow: 0 5px 0 #d9417c;
        }


        /* =========================================
           FOOTER
        ========================================= */

        footer {
            background: #583540;

            text-align: center;

            color: white;

            padding: 50px 20px;
        }

        footer h2 {
            color: #ff9fc2;

            font-size: 35px;

            margin-bottom: 10px;
        }

        footer p {
            color: #e8cbd5;

            line-height: 1.7;
        }


        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 900px) {

            nav {
                flex-direction: column;

                gap: 15px;
            }

            .nav-links {
                flex-wrap: wrap;

                justify-content: center;
            }

            .hero {
                flex-direction: column;

                text-align: center;

                gap: 60px;
            }

            .hero-content,
            .hero-character-area {
                width: 100%;
            }

            .hero-buttons {
                justify-content: center;
            }

            .about {
                flex-direction: column;
            }

            .about-image,
            .about-content {
                width: 100%;
            }

            .product-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .why-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .gallery-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .contact {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 600px) {

            .hero {
                padding: 60px 5%;
            }

            .hero h1 {
                font-size: 48px;
            }

            .bread {
                width: 270px;
                height: 250px;
            }

            .about-circle {
                width: 260px;
                height: 260px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .why-grid {
                grid-template-columns: 1fr;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .special {
                margin: 50px 5%;

                padding: 35px 25px;

                flex-direction: column;

                text-align: center;
            }

            .special h2 {
                font-size: 34px;
            }

            .special-price {
                font-size: 50px;
            }

            .review-text {
                font-size: 21px;
            }

        }

    </style>

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<nav>

    <div class="logo">
        Sweet Crumbs <span>🎀</span>
    </div>

    <div class="nav-links">

        <a href="#home">Home</a>

        <a href="#about">About</a>

        <a href="#products">Products</a>

        <a href="#gallery">Gallery</a>

        <a href="#contact">Contact</a>

        <a href="#products" class="nav-order">
            Order Now
        </a>

    </div>

</nav>


<!-- =========================================
     HOME
========================================= -->

<section class="hero" id="home">

    <div class="hero-content">

        <div class="small-title">
            ✨ FRESHLY BAKED EVERY DAY ✨
        </div>

        <h1>
            Warm Bread.<br>
            <span>Sweet Moments.</span>
        </h1>

        <p class="hero-description">

            Welcome to Sweet Crumbs Bakery! 💗

            We bake delicious bread, pastries,
            cookies, cupcakes, and cakes using
            quality ingredients and lots of love.

        </p>

        <div class="hero-buttons">

            <a href="#products"
               class="button button-pink">

                🧁 Explore Our Menu

            </a>

            <a href="#about"
               class="button button-white">

                💕 Our Story

            </a>

        </div>

    </div>


    <div class="hero-character-area">

        <div class="bread">

            <div class="bread-face">

                <div class="eyes">

                    <div class="eye"></div>

                    <div class="eye"></div>

                </div>

                <div class="mouth"></div>

                <div class="cheeks">

                    <div class="cheek"></div>

                    <div class="cheek"></div>

                </div>

            </div>

        </div>

        <div class="cute-label">
            🎀 Made With Love!
        </div>

    </div>

</section>


<!-- =========================================
     ABOUT
========================================= -->

<section class="about" id="about">

    <div class="about-image">

        <div class="about-circle">
            🥐
        </div>

    </div>


    <div class="about-content">

        <div class="small-title">
            💕 OUR STORY
        </div>

        <h2>
            Baked with love,<br>
            served with joy.
        </h2>

        <p>

            Sweet Crumbs Bakery is a small
            bakery created for people who
            love freshly baked bread and
            delicious pastries.

        </p>

        <p>

            Every morning, we prepare our
            products using quality ingredients,
            traditional recipes, and plenty
            of love. 💗

        </p>

        <div class="about-features">

            <div class="feature">
                🥖 Fresh Daily
            </div>

            <div class="feature">
                💗 Made With Love
            </div>

            <div class="feature">
                🌾 Quality Ingredients
            </div>

        </div>

    </div>

</section>


<!-- =========================================
     PRODUCTS
========================================= -->

<section class="products" id="products">

    <div class="section-heading">

        <small>
            🧁 OUR MENU
        </small>

        <h2>
            Fresh From The Oven
        </h2>

        <p>
            Choose your favorite sweet treats! 🎀
        </p>

    </div>


    <div class="product-grid">


        <!-- PRODUCT 1 -->

        <div class="product-card">

            <div class="product-image">
                🥐
            </div>

            <div class="product-info">

                <h3>
                    Butter Croissant
                </h3>

                <p>
                    Flaky, buttery, golden,
                    and perfect for breakfast.
                </p>

                <div class="product-bottom">

                    <div class="price">
                        ₱85
                    </div>

                    <button class="add-button">
                        +
                    </button>

                </div>

            </div>

        </div>


        <!-- PRODUCT 2 -->

        <div class="product-card">

            <div class="product-image">
                🍞
            </div>

            <div class="product-info">

                <h3>
                    Milk Bread
                </h3>

                <p>
                    Soft, fluffy, slightly sweet,
                    and perfect for the family.
                </p>

                <div class="product-bottom">

                    <div class="price">
                        ₱120
                    </div>

                    <button class="add-button">
                        +
                    </button>

                </div>

            </div>

        </div>


        <!-- PRODUCT 3 -->

        <div class="product-card">

            <div class="product-image">
                🍩
            </div>

            <div class="product-info">

                <h3>
                    Pink Donut
                </h3>

                <p>
                    A soft donut covered
                    with delicious pink glaze.
                </p>

                <div class="product-bottom">

                    <div class="price">
                        ₱55
                    </div>

                    <button class="add-button">
                        +
                    </button>

                </div>

            </div>

        </div>


        <!-- PRODUCT 4 -->

        <div class="product-card">

            <div class="product-image">
                🧁
            </div>

            <div class="product-info">

                <h3>
                    Pink Cupcake
                </h3>

                <p>
                    Soft vanilla cake topped
                    with fluffy pink frosting.
                </p>

                <div class="product-bottom">

                    <div class="price">
                        ₱75
                    </div>

                    <button class="add-button">
                        +
                    </button>

                </div>

            </div>

        </div>


        <!-- PRODUCT 5 -->

        <div class="product-card">

            <div class="product-image">
                🍪
            </div>

            <div class="product-info">

                <h3>
                    Chocolate Cookie
                </h3>

                <p>
                    Crispy outside, soft inside,
                    and filled with chocolate chips.
                </p>

                <div class="product-bottom">

                    <div class="price">
                        ₱50
                    </div>

                    <button class="add-button">
                        +
                    </button>

                </div>

            </div>

        </div>


        <!-- PRODUCT 6 -->

        <div class="product-card">

            <div class="product-image">
                🎂
            </div>

            <div class="product-info">

                <h3>
                    Pink Celebration Cake
                </h3>

                <p>
                    A cute cake for birthdays,
                    celebrations, and special days.
                </p>

                <div class="product-bottom">

                    <div class="price">
                        ₱650
                    </div>

                    <button class="add-button">
                        +
                    </button>

                </div>

            </div>

        </div>


    </div>

</section>


<!-- =========================================
     SPECIAL OFFER
========================================= -->

<div class="special">

    <div>

        <h2>
            🎀 Sweet Treat Box
        </h2>

        <p>

            A cute box filled with freshly baked
            bread, pastries, cookies, and our
            famous pink donut!

        </p>

    </div>

    <div class="special-price">
        ₱399
    </div>

</div>


<!-- =========================================
     WHY CHOOSE US
========================================= -->

<section class="why">

    <div class="section-heading">

        <small>
            ✨ WHY CHOOSE US?
        </small>

        <h2>
            What Makes Us Special?
        </h2>

    </div>


    <div class="why-grid">


        <div class="why-card">

            <div class="why-icon">
                🌾
            </div>

            <h3>
                Quality
            </h3>

            <p>
                We carefully select the
                ingredients we use.
            </p>

        </div>


        <div class="why-card">

            <div class="why-icon">
                🔥
            </div>

            <h3>
                Fresh
            </h3>

            <p>
                Our bread and pastries
                are baked fresh every day.
            </p>

        </div>


        <div class="why-card">

            <div class="why-icon">
                💗
            </div>

            <h3>
                Love
            </h3>

            <p>
                Every product is prepared
                with care and love.
            </p>

        </div>


        <div class="why-card">

            <div class="why-icon">
                😊
            </div>

            <h3>
                Happiness
            </h3>

            <p>
                We want every customer
                to leave with a smile.
            </p>

        </div>


    </div>

</section>


<!-- =========================================
     GALLERY
========================================= -->

<section class="gallery" id="gallery">

    <div class="section-heading">

        <small>
            📸 OUR BAKERY
        </small>

        <h2>
            Sweet Little Moments
        </h2>

        <p>
            A few of our favorite treats! 💕
        </p>

    </div>


    <div class="gallery-grid">

        <div class="gallery-item">
            🥐
        </div>

        <div class="gallery-item">
            🧁
        </div>

        <div class="gallery-item">
            🍩
        </div>

        <div class="gallery-item">
            🍪
        </div>

        <div class="gallery-item">
            🎂
        </div>

        <div class="gallery-item">
            🍞
        </div>

        <div class="gallery-item">
            🥨
        </div>

        <div class="gallery-item">
            🎀
        </div>

    </div>

</section>


<!-- =========================================
     REVIEW
========================================= -->

<section class="reviews">

    <div class="review-heart">
        💗
    </div>

    <div class="review-text">

        "The pastries are so cute and delicious!
        The pink donuts are my favorite!" 🧁

    </div>

    <div class="review-name">

        — Happy Sweet Crumbs Customer

    </div>

</section>


<!-- =========================================
     CONTACT
========================================= -->

<section class="contact" id="contact">


    <div class="contact-content">

        <div class="small-title">
            💌 CONTACT US
        </div>

        <h2>
            We'd Love To<br>
            Hear From You!
        </h2>

        <p>

            Have a question or want to order
            some delicious treats?

            Send us a message! 🎀

        </p>


        <div class="contact-details">

            <div>
                📍 123 Bakery Street, Manila
            </div>

            <div>
                📞 0912 345 6789
            </div>

            <div>
                ✉️ hello@sweetcrumbs.com
            </div>

            <div>
                🕒 Monday - Saturday, 7:00 AM - 7:00 PM
            </div>

        </div>

    </div>


    <form class="contact-form"
          id="contactForm">

        <input
            type="text"
            placeholder="Your Name"
            required
        >

        <input
            type="email"
            placeholder="Your Email"
            required
        >

        <input
            type="text"
            placeholder="Subject"
            required
        >

        <textarea
            rows="6"
            placeholder="Your Message"
            required
        ></textarea>

        <button type="submit">
            💌 Send Message
        </button>

    </form>


</section>


<!-- =========================================
     FOOTER
========================================= -->

<footer>

    <h2>
        Sweet Crumbs 🎀
    </h2>

    <p>
        Fresh bread, sweet pastries,
        and happy moments. 💗
    </p>

    <br>

    <p>
        © {{ date('Y') }} Sweet Crumbs Bakery
    </p>

</footer>


<!-- =========================================
     JAVASCRIPT
========================================= -->

<script>

    /* -----------------------------------------
       PRODUCT BUTTONS
    ----------------------------------------- */

    const buttons =
        document.querySelectorAll(".add-button");

    buttons.forEach(function(button) {

        button.addEventListener("click", function() {

            button.innerHTML = "✓";

            button.style.background = "#63a563";

            setTimeout(function() {

                button.innerHTML = "+";

                button.style.background = "#ff659e";

            }, 1000);

        });

    });


    /* -----------------------------------------
       CONTACT FORM
    ----------------------------------------- */

    const form =
        document.getElementById("contactForm");

    form.addEventListener("submit", function(event) {

        event.preventDefault();

        alert(
            "💕 Thank you for contacting Sweet Crumbs Bakery!"
        );

        form.reset();

    });


</script>


</body>

</html>