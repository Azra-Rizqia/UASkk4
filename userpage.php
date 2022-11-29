<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>WEB NFT01</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/home(userpage).css'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/home2.css'>
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
         <li><a href="register.php">Created</a></li>
      </ul>
      </nav>
      <div class="main">
         <a class="user" href="logout.php"><button>Log Out</button></a>
         <div class="bx bx-menu" id="menu-icon"></div>
      </div>
   </header>
   
   <!--crolling Horizontal (1) -->
   <div class="container1">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="card">
         <a href="detailMoas.php">
            <div class="cards">
                <img src="ASET/prom1.png" alt="">
                <div class="img-txt">
                    <h3>MOAS</h3>
                    <h5>Floor : 8.11 XTZ</h5>
                </div>
            </div>
         </a>
         <div class="cards">
            <img src="ASET/prom2.png" alt="">
            <div class="img-txt">
               <h3>PurpleMan</h3>
               <h5>Floor : 11.01 XTZ</h5>
            </div>
         </div>
         <div class="cards">
            <img src="ASET/prom3.png" alt="">
            <div class="img-txt">
               <h3>Kathryn Blake</h3>
               <h5>Floor : 8.48 XTZ</h5>
            </div>
         </div>
         <div class="cards">
            <img src="ASET/prom4.png" alt="">
            <div class="img-txt">
               <h3>Aphrodite</h3>
               <h5>Floor : 7.4 XTZ</h5>
            </div>
         </div>
         <div class="cards">
            <img src="ASET/prom5.jpg" alt="">
            <div class="img-txt">
               <h3>DodoLEE</h3>
               <h5>Floor : 10 XTZ</h5>
            </div>
         </div>
         <div class="cards">
            <img src="ASET/prom6.png" alt="">
            <div class="img-txt">
               <h3>Fantastic</h3>
               <h5>Floor : 9.8 XTZ</h5>
            </div>
         </div>
         <div class="cards">
            <img src="ASET/prom7.png" alt="">
            <div class="img-txt">
               <h3>PuduPudu</h3>
               <h5>Floor : 6.1 XTZ</h5>
            </div>
         </div>
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
   </div>
   <!--akhir scrolling Horizontal (1) -->

   <div class="greeting">
    <h1>Hello <span><?php echo $_SESSION['user_name'] ?></span>!</h1>
    <h1>Explore and Collect Your NFT.</h1>
   </div>

   <!-- Trend Page -->
   <div class="trend">
        <h2>Trending</h2>
        <div class="row">
            <div class="col">
                <div class="sisi">
                    <h4>Collection</h4>
                    <h4>Volume</h4>
                </div>
                <a href="detailTeddy.php">
                    <div class="urutan1">
                        <h2 class="no">1</h2>
                        <img class="imgurutan" src="ASET/no1.png" alt="">
                        <div class="volum">
                            <h4>Teddy Teddy</h4>
                            <h4>999 XTZ</h4>
                        </div>
                    </div>
                </a>
                <div class="urutan">
                    <h2 class="no">2</h2>
                    <img class="imgurutan" src="ASET/no2.png" alt="">
                    <div class="volum2">
                        <h4>Peachy</h4>
                        <h4>987 XTZ</h4>
                    </div>
                </div>
                <div class="urutan">
                    <h2 class="no">3</h2>
                    <img class="imgurutan" src="ASET/no3.png" alt="">
                    <div class="volum3">
                        <h4>CloneX</h4>
                        <h4>954 XTZ</h4>
                    </div>
                </div>
                <div class="urutan">
                    <h2 class="no">4</h2>
                    <img class="imgurutan" src="ASET/no4.png" alt="">
                    <div class="volum4">
                        <h4>Interfaces</h4>
                        <h4>918 XTZ</h4>
                    </div>
                </div>
                <div class="urutan">
                    <h2 class="no">5</h2>
                    <img class="imgurutan" src="ASET/no5.png" alt="">
                    <div class="volum5">
                        <h4>OMG Man</h4>
                        <h4>898 XTZ</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="sisi">
                    <h4>Collection</h4>
                    <h4>Volume</h4>
                </div>
                <div class="urutan">
                    <h2 class="no">6</h2>
                    <img class="imgurutan" src="ASET/no6.jpg" alt="">
                    <div class="volum6">
                        <h4>Yummy</h4>
                        <h4>864 XTZ</h4>
                    </div>
                </div>
                <div class="urutan">
                    <h2 class="no">7</h2>
                    <img class="imgurutan" src="ASET/prom5.jpg" alt="">
                    <div class="volum7">
                        <h4>DodoLEE</h4>
                        <h4>850 XTZ</h4>
                    </div>
                </div>
                <div class="urutan">
                    <h2 class="no">8</h2>
                    <img class="imgurutan" src="ASET/no8.jpg" alt="">
                    <div class="volum8">
                        <h4>GLITCH3</h4>
                        <h4>827 XTZ</h4>
                    </div>
                </div>
                <div class="urutan">
                    <h2 class="no">9</h2>
                    <img class="imgurutan" src="ASET/no9.jpg" alt="">
                    <div class="volum9">
                        <h4>Yuki</h4>
                        <h4>810 XTZ</h4>
                    </div>
                </div>
                <div class="urutan10">
                    <h2 class="no">10</h2>
                    <img class="imgurutan" src="ASET/no10.png" alt="">
                    <div class="volum10">
                        <h4>XsuLLo</h4>
                        <h4>799 XTZ</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir Trend Page -->


    <!-- Awal Category -->
    <div class="category">
        <h2 id="category">Category</h2>
        <div class="row-c">
            <div class="cardz">
                <a href="CategoryPhoto.php">
                    <img src="ASET/Landscape-Photo.jpg" alt="card image">
                    <article class="conten">
                        <h3>Photography</h3>
                    </article>
                </a>
            </div>
            <div class="cardz">
                <a href="CategoryArt.php">
                    <img src="ASET/Landscape-Art.jpg" alt="card image">
                    <article class="conten">
                        <h3>Art</h3>
                    </article>
                </a>
            </div>
            <div class="cardz">
                <a href="CategoryMusic.php">
                    <img src="ASET/Landscape-Music.jpg" alt="card image">
                    <article class="conten">
                        <h3>Music</h3>
                    </article>
                </a>
            </div>
        </div>
    </div>

    <div id="community" class="community">
        <h2>Join Community</h2>
        <div class="sm">
            <a href="https://discord.gg/dNrsKXUV"><i class="fa-brands fa-discord"></i></a>
            <a href="https://www.instagram.com/_rizqiaz/?hl=id"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/rarrwwr"><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-reddit-alien"></i></a>
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