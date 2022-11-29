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
        <link rel='stylesheet' type='text/css' media='screen' href='CSS/detailitem.css'>
        <script src="https://kit.fontawesome.com/1a39ee6206.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
        <div class="detail">
            <img src="ASET/prom1.png" alt="">
            <div class="daftar-detail">
                <p>MOAS</p>
                <H1>Solar System #0001</H1>
                <div class="view">
                    <div class="d-view">
                        <i class="fa-regular fa-eye"></i>
                        <span>478 View</span>
                    </div>
                    <div class="d-view">
                        <i class="fa-regular fa-heart"></i>
                        <span>112 Favorite</span>
                    </div>
                </div>
                <div class="detail-price">
                    <p>Current Price</p>
                    <div class="price">
                        <h1>15 XTZ</h1>
                        <p>14,7 USD</p>
                    </div>
                </div>
                <div class="maincart">
                    <a class="cart"><button>Add To Cart</button></a>
                </div>
            </div>
        </div>
        <div class="descript">
            <H2>Description</H2>
            <p>A beautiful and bright world is coming soon, all life will be beautiful when your god comes to be with you, imagine and feel like you are floating in the heavenly sky</p>
        </div>
        <div class="collection">
            <h2>More Collection</h2>
            <div class="items">
                <div class="cards">
                    <img src="ASET/prom1.png" alt="">
                    <div class="img-txt">
                        <h3>Solar System</h3>
                        <p>Price : 2.1 ETH</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/prom1.png" alt="">
                    <div class="img-txt">
                        <h3>Solar System</h3>
                        <p>Price : 2.1 ETH</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/prom1.png" alt="">
                    <div class="img-txt">
                        <h3>Solar System</h3>
                        <p>Price : 2.1 ETH</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="ASET/prom1.png" alt="">
                    <div class="img-txt">
                        <h3>Solar System</h3>
                        <p>Price : 2.1 ETH</p>
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