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
        <link rel='stylesheet' type='text/css' media='screen' href='CSS/categoryPhoto.css'>
        <script src="https://kit.fontawesome.com/1a39ee6206.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <header>
            <h1>NFT.</h1>
            <nav>
                <ul class="navbar">
                    <li><a href="#">Explore</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Created</a></li>
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
            <h1>Explore the photography</h1>
            <p>a collection of some of the greatest photographers in the world of photography, and discover the amazing work of your new and favorite photographers.</p>
        </div>
        <div class="category">
        <h3>Collection</h3>
        <div class="row-c">
            <div class="cardz">
                <img src="ASET/annie-spratt-VvE9lcIQ5Xo-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/Acid Music.jpg" alt="">
                    <h3>NeO</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/sara-kurfess-DJ2Mp9JC2cU-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/Style Up Social Media — Mumfolk Studio.png" alt="">
                    <h3>ANNE F.</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/markus-spiske-HRXGTBn9b7Y-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/download (3).jpg" alt="">
                    <h3>MARKs</h3>
                </article>
            </div>
        </div>
        <div class="row-c">
            <div class="cardz">
                <img src="ASET/markus-spiske-fYnyfx3UBxk-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/download (2).jpg" alt="">
                    <h3>MoonGirls</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/danny-g-OR6zYl4VZ7Q-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/The magic of the Internet.png" alt="">
                    <h3>The Culture</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/annie-spratt-AmBwhnic0_s-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/New Idea for Self Portraits – Weekly Extra.png" alt="">
                    <h3>Jeon Smith</h3>
                </article>
            </div>
        </div>
        <div class="row-c">
            <div class="cardz">
                <img src="ASET/amirhosain-gazor-vOeoWzYDDjg-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/REALITY WITHIN FRAME.png" alt="">
                    <h3>Phiozio Xs</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/alif-ngoylung-jg-6ARMiaPM-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/download (1).jpg" alt="">
                    <h3>Dark bOX</h3>
                </article>
            </div>
            <div class="cardz">
                <img src="ASET/alexander-andrews-A545KXf87jE-unsplash.jpg" alt="card image">
                <article class="conten">
                    <img src="ASET/Let Your Insides Grow.jpg" alt="">
                    <h3>Tjourney</h3>
                </article>
            </div>
        </div>
    </div>

    <!-- contoh -->
    <div class="category">
        <h2>Illustration Spotlight</h2>
        <div class="row-c">
            <div class="cardz">
                <img class="foto-cardz" src="ASET/annie-spratt-VvE9lcIQ5Xo-unsplash.jpg" alt="">
                <div class="contenz" >
                    <img class="foto-category" src="ASET/Acid Music.jpg" alt="">
                    <h3>MIAMIA</h3>
                </div>
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
            <li><a href="#">Explore</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Created</a></li>
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