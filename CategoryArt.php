<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>WEB NFT01</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='CSS/categoryArt.css'>
        <script src="https://kit.fontawesome.com/1a39ee6206.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <header>
            <h1>NFT.</h1>
            <nav>
                <ul class="navbar">
                    <li><a href="userpage.php">Explore</a></li>
                    <li><a href="#category">Category</a></li>
                    <li><a href="#community">Community</a></li>
                    <li><a href="created.php">Created</a></li>
                </ul>
            </nav>
            <div class="main">
                <a class="user" href="logout.php"><button>Log Out</button></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
        <div class="hero">
        <!-- <p>Welcome.</p> -->
        </div>
        <div class="judul">
            <h1>Explore the Art</h1>
            <p>a collection of some of the greatest artist in the world of art, and discover the amazing work of your new and favorite artist.</p>
        </div>
        <div class="category">
        <h3>Collection</h3>
        <div class="row-c">
            <div class="cardz">
                <img src="ASET/richard-thomposn-PnMCRBRajFw-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/Acid Music.jpg" alt="">
                    <h3>NeO</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/winston-chen-VCbUP4OBIVw-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/Style Up Social Media — Mumfolk Studio.png" alt="">
                    <h3>ANNE F.</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/diogo-nunes-Wa9ilX9XYOI-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/download (3).jpg" alt="">
                    <h3>MARKs</h3>
                </article>
            </div>
        </div>
        <div class="row-c">
            <div class="cardz">
                <img src="ASET/dan-farrell-fT49QnFucQ8-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/download (2).jpg" alt="">
                    <h3>MoonGirls</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/darya-tryfanava-9Z_VwmBVYNY-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/The magic of the Internet.png" alt="">
                    <h3>The Culture</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/alp-ancel-WKQt_X-SKFI-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/New Idea for Self Portraits – Weekly Extra.png" alt="">
                    <h3>Jeon Smith</h3>
                </article>
            </div>
        </div>
        <div class="row-c">
            <div class="cardz">
                <img src="ASET/alina-grubnyak-IsxaFsXi2rs-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/REALITY WITHIN FRAME.png" alt="">
                    <h3>Phiozio Xs</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/dimitri-simon-5XtTDk2Y7q4-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/download (1).jpg" alt="">
                    <h3>Dark bOX</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/stephanie-watters-flores-VSxThTFyHGk-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/Let Your Insides Grow.jpg" alt="">
                    <h3>Tjourney</h3>
                </article>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="company">
            <h1>NFT.</h1>
            <p>
                The digital marketplace for crypto
                collectibles and non-fungible tokens (NFTs), 
                Buy and sell works as you like.
            </p>
        </div>
        <div class="link-nav">
            <h3>Service</h3>
            <li><a href="userpage.php">Explore</a></li>
            <li><a href="#category">Category</a></li>
            <li><a href="#community">Community</a></li>
            <li><a href="created.php">Created</a></li>
        </div>
        <div class="forms">
            <h3>Stay With US.</h3>
            <form action="">
                <input type="email" class="input-field" id="email" placeholder="Email" required/>
                <button id="myBtn" onclick="myFunction()">Submit</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="JS/script.js"></script>
    </body>
</html>