<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src="https://kit.fontawesome.com/1a39ee6206.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/detailTeddy.css">
    </head>
    <body>
        <!-- navbar -->
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
        <img class="prof" src="ASET/no1.png" alt="prom1">
        <div class="head-sos">
            <h1>Teddy Teddy</h1>
            <div class="sos">
                <i class="fa-brands fa-discord"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-reddit-alien"></i>
            </div>
        </div>
        <p class="creator">By <strong>CICA</strong></p>
        <div class="items-date">
            <p>Items <strong>12</strong></p>
            <p>Created <strong>NOV 2022</strong></p>
        </div>
        <p class="desc">The Solar System are a Collection of 1/1 limited design by Lula | CS</p>
        <hr color="#EBEBEB">
        <div class="container">
            <div class="items">
                <div class="cards">
                    <a href="detailITEM.php">
                        <img src="ASET/teddy1.jpg" alt="">
                        <div class="img-txt">
                            <h3>Teddy1</h3>
                            <p>Price : 8 TXZ</p>
                        </div>
                    </a>
                </div>
                <div class="cards">
                    <img src="ASET/teddy2.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 2</h3>
                        <p>Price : 10 TXZ</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/teddy3.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 3</h3>
                        <p>Price : 9 TXZ</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/teddy4.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 4</h3>
                        <p>Price : 13 TXZ</p>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="cards">
                    <img src="ASET/teddy4.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 5</h3>
                        <p>Price : 13 TXZ</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/teddy3.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 6</h3>
                        <p>Price : 9 TXZ</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/teddy4.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 7</h3>
                        <p>Price : 13 TXZ</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/teddy2.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 8</h3>
                        <p>Price : 10 TXZ</p>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="cards">
                    <img src="ASET/teddy2.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 9</h3>
                        <p>Price : 10 TXZ</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/teddy4.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 10</h3>
                        <p>Price : 13 TXZ</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/teddy4.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 11</h3>
                        <p>Price : 13 TXZ</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/teddy3.jpg" alt="">
                    <div class="img-txt">
                        <h3>Teddy 12</h3>
                        <p>Price : 9 TXZ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="company">
                <h1>NFT.</h1><p>
                The digital marketplace for crypto
                collectibles and non-fungible tokens (NFTs), 
                Buy and sell works as you like.</p>
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