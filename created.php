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
        <link rel='stylesheet' type='text/css' media='screen' href='CSS/createdStyle.css'>
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
        <div class="container">
            <div class="connect">
                <h1>Connect Your Wallet</h1>
                <p>If you don't have a wallet, you can select a provider and create one now.</p>
                <div class="box">
                    <div class="wallet">
                        <img src="ASET/metamask.png" alt="">
                        <span>Metamask</span>
                    </div>
                    <div class="wallet">
                        <img src="ASET/phantom-wallet-logo.png" alt="">
                        <span>Phantom</span>
                    </div>
                    <div class="wallet">
                        <img src="ASET/Coinbase.png" alt="">
                        <span>Coinbase</span>
                    </div>
                </div>
            </div>
            <div class="create">
                <h1>Create Your NFT</h1>
                <p>Create your NFT and observe the steps provided correctly, Wish you a successful creator!</p>
                <div class="maincart">
                    <a class="cart"><button><i class="fa-solid fa-circle-plus"></i><p>Create NFT</p></button></a>
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