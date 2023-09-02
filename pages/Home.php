<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UnVelos| Gaming Theme</title>
  <link rel="icon" type="image/png" href="../images/LOGGO.PNG">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: url('../images/BACKGROUIND.PNG') no-repeat center center fixed;
    background-size: cover;
  }

  .navbar {
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100px;
    padding: 0 20px;
    background:#111;
  }

  .navbar-logo a {
    display: flex;
  }

  .logo {
    width: 350px;
    height: 72px;
    margin-right: 10px;
  }

  .navbar ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
  }

  .navbar li {
    margin: 0 20px;
  }

  .navbar a { 
    text-decoration: none;
    color: inherit;
    font-weight: bold;
    position: relative;
    transition: color 0.3s, transform 0.3s;
  }

  .navbar a:before {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -4px;
    left: 0;
    background-color: #e4d9e6;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.3s ease-in-out;
  }

  .navbar a:hover:before,
  .navbar a:focus:before {
    transform: scaleX(1);
    transform-origin: left;
  }

  .dropdown {
    position: relative;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #000000;
    min-width: 160px;
    border-radius: 10px;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown-content a {
    display: block;
    padding: 10px;
    color: #ffffff;
    text-decoration: none;
    transition: background-color 0.2s;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
  }

  


.footer-links {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-bottom: 10px;
}

.footer-links a {
  color: white;
  text-decoration: none;
}

.footer-links a:hover {
  text-decoration: underline;
}


  .logo-symbol {
  display: inline-block;
  width: 50px; 
  height: 50px;
  background-image: url('../images/loggo.png');
  background-size: contain;
  background-repeat: no-repeat;
  margin-right: 10px; 
  vertical-align: middle;
}


header {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px 0;
}

main {
    padding: 200px 20px 20px; 
  }

.game-list {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  .game {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(to bottom, #7008e8, #d50756);
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .game img {
    max-width: 200px;
    max-height: 200px;
  }

  .game-details {
    flex: 1;
    margin: 0 10px;
  }

  .game-price {
    font-weight: bold;
  }

  .button-container {
    display: flex;
    align-items: center;
  }

  .button {
    background-color: #222;
    color: white;
    border: none;
    border-radius: 3px;
    padding: 8px 12px;
    margin: 10px;
    cursor: pointer;
    transition: background-color 0.2s;
  }

  .button:hover {
    background-color: #111;
  }

  footer {
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #000000;
    color: white;
    padding: 10px 0;
    text-align: center;
  }

  @media screen and (max-width: 768px) {
    .navbar {
      height: auto;
      flex-direction: column;
      text-align: center;
    }

    .navbar ul {
      margin-top: 20px;
    }

    .navbar li {
      margin: 10px 10px;
    }

    .logo {
      width: 250px;
      height: auto;
      margin: 10px auto;
    }

    .game-list {
      padding: 10px;
    }

    .game {
      flex-direction: column;
      align-items: flex-start;
    }

    .game img {
      max-width: 100%;
      max-height: auto;
    }

    .game-details {
      margin-top: 10px;
    }

    .game-price {
      margin-top: 5px;
    }

    .button-container {
      flex-direction: column;
      align-items: flex-start;
    }

    .button {
      margin: 5px 0;
    }
    }




</style>

<div class="navbar">
        <div class="navbar-logo">
            <a href="Home.php">
                <img src="../images/logo.png" alt="Logo" class="logo">
            </a>
        </div>

        <ul>
            <li><a href="Home.php">Home</a></li>
            <li class="dropdown">
                <a href="#">Games ▼<i class="gamesdown"></i></a>
                <div class="dropdown-content">
                    <a href="horror.html">Horror</a>
                    <a href="Adventure.html">Adventure</a>
                    <a href="Shooter.html">Shooter</a>
                    <a href="Sport.html">Sport</a>
                    <a href="Fighting.html">Fighting</a>
                </div>
            </li>
            
        
               <li><a href="login.php">Login/Register</a></li>
               <li><a href="logout.php">Log Out</a></li>
               <li><a href="cart-user.php"><i class="fas fa-shopping-cart"></i></a></li>
            
        </ul>
    </div>

  <main>



  <div class="game">
      <img src="https://i.ytimg.com/vi/PFUSgaH_t7M/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBK4v6_MInU7jXy1I1rKfmKSKiuAw" alt="Alternate Watch">
      <div class="game-details">
        <h3>Alternate Watch</h3>
        <p>Report Anomalies until 6 am to beat the game.</p>
        <p class="game-price">Free</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="Alternate Watch">
        <input type="hidden" name="price" value="0">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://cdn.mos.cms.futurecdn.net/5UDTM7aPy5RHaZFcs4XJQh.jpg" alt="amnesia-rebirth">
      <div class="game-details">
        <h3>amnesia rebirth</h3>
        <p>A first-person horror adventure. Uncover your past and survive the Algerian desert. Fear is your enemy; stay calm to not succumb to an illness threatening you and your loved one</p>
        <p class="game-price">$29.99</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="amnesia rebirth">
        <input type="hidden" name="price" value="29.99">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://prod.assets.earlygamecdn.com/images/phasmophobia-titelbild.jpg?x=0.5&y=0.5" alt="Phasmophobia">
      <div class="game-details">
        <h3>Phasmophobia</h3>
        <p>terrifying psychological online co-op ghost hunting experience</p>
        <p class="game-price">$39.99</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="Phasmophobia">
        <input type="hidden" name="price" value="39.99">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
        <img src="https://ksr-ugc.imgix.net/assets/012/260/845/4753413642f261c2ff1fd3f2aff239ff_original.png?ixlib=rb-4.1.0&crop=faces&w=1552&h=873&fit=crop&v=1463747547&auto=format&frame=1&q=92&s=3f967daba6e9969f8c2af9e06c7215fc" alt="Visage">
        <div class="game-details">
          <h3>Visage</h3>
          <p>psychological horror game. Explore a mysterious ever-changing house in a slow-paced, atmospheric world</p>
          <p class="game-price">$39.99</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="Visage">
          <input type="hidden" name="price" value="39.99">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>

      <div class="game">
      <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt674314efe488e9a4/64b13f0acc7487ee6e3bea1c/fc24.jpg?auto=webp&format=pjpg&width=3840&quality=60" alt="fifa24">
      <div class="game-details">
        <h3>fifa 24</h3>
        <p>EA SPORTS FC™ 24 welcomes you to The World’s Game—the most true-to-football experience ever with HyperMotionV</p>
        <p class="game-price">$29.99</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="fifa 24">
        <input type="hidden" name="price" value="29.99">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://img-eshop.cdn.nintendo.net/i/7497158e5aae19540f857e9ae384a38819a5c53d5a4984133c662edfbb687e33.jpg" alt="fifa23">
      <div class="game-details">
        <h3>fifa 23</h3>
        <p>Experience the pinnacle of women’s football by playing the Women’s World Cup in FIFA 23 now at no additional cost.*</p>
        <p class="game-price">$29.99</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="fifa 23">
        <input type="hidden" name="price" value="29.99">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://www.harrisburgu.edu/wp-content/uploads/189dce017fb19e3ca1b94b2095d519cc514df22c.jpg" alt="RL">
      <div class="game-details">
        <h3>rocket league</h3>
        <p>THIS IS ROCKET LEAGUE!
            Welcome to the high-powered hybrid of arcade-style soccer and vehicular mayhem! Customize your car, hit the field, and compete in one of the most critically acclaimed sports games of all time!</p>
        <p class="game-price">Free</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="rocket league">
        <input type="hidden" name="price" value="0">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
        <img src="https://gamingtrend.com/wp-content/uploads/2021/10/FIFA-22.jpg" alt="fifa22">
        <div class="game-details">
          <h3>fifa 22</h3>
          <p>PLAY THE WORLD’S GAME NOW.
            It’s Matchday. Everywhere.</p>
          <p class="game-price">$39.99</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="fifa 22">
          <input type="hidden" name="price" value="39.99">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>
      
      <div class="game">
        <img src="https://assets.nintendo.com/image/upload/q_auto/f_auto/c_fill,w_1200/ncom/en_US/articles/2022/knockout-city-is-now-free-to-play-in-season-6-city-of-tomorrow/1920x1080_ncom_WN_knockout-city_S6" alt="KOC">
        <div class="game-details">
          <h3>knockout city</h3>
          <p>Duke it out in Knockout City, where Crews settle the score in intense dodgebrawl action. Knock out opponents with trick shots and coordinated teamwork while dodging and catching balls flying across the map.</p>
          <p class="game-price">Free</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="knockout city">
          <input type="hidden" name="price" value="0">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>

      <div class="game">
      <img src="https://cdn.arstechnica.net/wp-content/uploads/2020/04/valorant-listing-800x450.jpg" alt="Val">
      <div class="game-details">
        <h3>Valorant</h3>
        <p>5v5 character-based tactical FPS where precise gunplay meets unique agent abilities</p>
        <p class="game-price">Free</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="Valorant">
        <input type="hidden" name="price" value="0">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://news.xbox.com/en-us/wp-content/uploads/sites/2/2022/10/OW2-be9287b234afbe7898ac.jpg" alt="OV2">
      <div class="game-details">
        <h3>OverWatch 2</h3>
        <p>Overwatch 2 is a free-to-play, always-on, and ever-evolving live game. Team up with friends regardless of platform and jump into the reimagined PvP experience.
        </p>
        <p class="game-price">Free</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="OverWatch2">
        <input type="hidden" name="price" value="0">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://phantom-marca.unidadeditorial.es/04d687a87115211d9a759c74116d5826/resize/828/f/jpg/assets/multimedia/imagenes/2023/03/17/16790510953870.jpg" alt="CS:GO">
      <div class="game-details">
        <h3>Counter Strike:Global Offenseve</h3>
        <p>Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content</p>
        <p class="game-price">Free</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="Counter Strike:Global Offenseve">
        <input type="hidden" name="price" value="0">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://cdn.akamai.steamstatic.com/steam/apps/10/header.jpg?t=1666823513" alt="CS-1.6">
      <div class="game-details">
        <h3>Counter-Strike 1.6</h3>
        <p>Counter-Strike (CS) is a series of multiplayer tactical first-person shooter video games in which teams of terrorists battle to perpetrate an act of terror (bombing, hostage-taking, assassination) while counter-terrorists try to prevent it (bomb defusal, hostage rescue, escort mission)</p>
        <p class="game-price">Free</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="Counter Strike1.6">
        <input type="hidden" name="price" value="0">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
        <img src="https://assets-prd.ignimgs.com/2023/02/20/wolfenstein-new-order-object-1676884361082.png" alt="WS:NO">
        <div class="game-details">
          <h3>wolfenstein: the new order</h3>
          <p>The New Order reignites the series that created the first-person shooter genre. Wolfenstein offers a deep game narrative packed with action, adventure and first-person combat.</p>
          <p class="game-price">$39.99</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="wolfenstein: the new order">
          <input type="hidden" name="price" value="39.99">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>

      <div class="game">
        <img src="https://www.global-esports.news/wp-content/uploads/2022/09/CoD-Modern-Warfare-2-Multiplayer-1.jpg" alt="COD:MW2">
        <div class="game-details">
          <h3>Call Of Duty:Modern Warfare2</h3>
          <p>Squad up and fight alongside the iconic operators of Task Force 141 with the return of Modern Warfare.</p>
          <p class="game-price">$39.99</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="Call Of Duty:Modern Warfare2">
          <input type="hidden" name="price" value="39.99">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>

      <div class="game">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/307780/capsule_616x353.jpg?t=1691102734" alt="MCX">
        <div class="game-details">
          <h3>Mortal Kombat X</h3>
          <p>Experience the Next Generation of the #1 Fighting Franchise. Mortal Kombat X combines unparalleled, cinematic presentation with all new gameplay.</p>
          <p class="game-price">$40.99</p>
        </div>
          <form method="post" action="cart.php">
            <input type="hidden" name="game_name" value="Mortal Kombat X">
            <input type="hidden" name="price" value="40.99">
            <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>
    

      <div class="game">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1364780/extras/13_Custom-Images_ULT.png?t=1692019663" alt="SF6">
        <div class="game-details">
          <h3>Steet Fighter 6</h3>
          <p>STREET FIGHTER 6Buckler's Boot Camp ... Wanna break a sweat with us? We're offering a course for newcomers looking to learn the fundamentals of fighting! </p>
          <p class="game-price">$20.99</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="Steet Fighter 6">
          <input type="hidden" name="price" value="20.99">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>
  
  
      <div class="game">
        <img src="https://rhodycigar.com/wp-content/uploads/2023/04/Mortal-Kombat-11-1023x576.jpg" alt="MC11">
        <div class="game-details">
          <h3>Mortal Kombat 11</h3>
          <p>Mortal Kombat is back and better than ever in the next evolution of the iconic franchise.</p>
          <p class="game-price">$30.99</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="Mortal Kombat 11">
          <input type="hidden" name="price" value="30.99">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>
  
  
      <div class="game">
        <img src="https://cdn.multiversus.com/hero/hero.jpg" alt="MV">
        <div class="game-details">
          <h3>Multiversus</h3>
          <p>In MultiVersus, the Multiverse is at your fingertips as you battle it out in intense 2v2 matches. Up against Batman & Shaggy? </p>
          <p class="game-price">Free</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="Multiversus">
          <input type="hidden" name="price" value="0">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>
  
  
      <div class="game">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1778820/header.jpg?t=1692957440" alt="TEK8">
        <div class="game-details">
          <h3>Tekken 8</h3>
          <p>Get ready for the next chapter in the legendary fighting game franchise, TEKKEN 8.</p>
          <p class="game-price">$25.00</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="Tekken 8">
          <input type="hidden" name="price" value="25.00">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>
  
  
      <div class="game">
        <img src="https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/software/switch/70010000012098/1b3c42aaf8b8daf15a78bf210678dab55d1c15a58255b76f3599d1c7d908f27e" alt="Brawl">
        <div class="game-details">
          <h3>Brawllhala</h3>
          <p>An epic platform fighter for up to 8 players online or local. Try casual free-for-alls, ranked matches, or invite friends to a private room</p>
          <p class="game-price">Free</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="Brawllhala">
          <input type="hidden" name="price" value="0">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>
  
  
      <div class="game">
        <img src="https://www.glitched.online/wp-content/uploads/2022/11/Mortal-Kombat-9-2011-PS4-PS5-Backwards-Compatibility-.jpg" alt="MC9">
        <div class="game-details">
          <h3>Mortal Kombat 9</h3>
          <p>The newest chapter of the iconic fighting franchise is now available! Experience the deadliest tournament with all the kombatants and their unique fatalities.</p>
          <p class="game-price">$24.99</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="Mortal Kombat 9a">
          <input type="hidden" name="price" value="24.99">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>

      <div class="game">
      <img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_RiseoftheTombRaider20YearCelebration_CrystalDynamics_S1_2560x1440-3bd5b3c4c11d46cc2dcb06bdf2f77627" alt="ROTR">
      <div class="game-details">
        <h3>Rise of the Tomb Raider: 20 Year Celebration</h3>
        <p>he game is the eleventh main entry in the Tomb Raider series, the sequel to the 2013's Tomb Raider, and is the second instalment in the Survivor trilogy</p>
        <p class="game-price">$29.99</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="Rise of the Tomb Raider: 20 Year Celebration">
        <input type="hidden" name="price" value="29.99">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://news.xbox.com/en-us/wp-content/uploads/sites/2/2021/08/NMS_Frontiers_Hero.jpg" alt="NMS">
      <div class="game-details">
        <h3>No Man's Sky</h3>
        <p>No Man's Sky is a game about exploration and survival in an infinite procedurally generated universe.</p>
        <p class="game-price">$29.99</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="No Man's Sky">
        <input type="hidden" name="price" value="29.99">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://image.api.playstation.com/vulcan/img/cfn/11307obn0reFe1U4gMc6b1pGe29vUWBAwdA8-rwjTkBN9iSwdc4rU6hpu5QI4ZXkrja75v0RAOXR1bNsTAg1jbb-3AgvCc1Y.png" alt="SOTTR">
      <div class="game-details">
        <h3>Shadow of the Tomb Raider</h3>
        <p>As Lara Croft races to save the world from a Maya apocalypse, she must become the Tomb Raider she is destined to be.</p>
        <p class="game-price">$39.99</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="Shadow of the Tomb Raider">
        <input type="hidden" name="price" value="39.99">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
      <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/648800/capsule_616x353.jpg?t=1655744208" alt="Raft">
      <div class="game-details">
        <h3>Raft</h3>
        <p>No Man's Sky is a game about exploration and survival in an infinite procedurally generated universe.</p>
        <p class="game-price">$29.99</p>
      </div>
      <form method="post" action="cart.php">
        <input type="hidden" name="game_name" value="Raft">
        <input type="hidden" name="price" value="29.99">
        <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
    </form>
    </div>

    <div class="game">
        <img src="https://images.gog-statics.com/74ef44a280dd89f7764b2e31a3356cb7fa90f89a0227038191e2714ccfd3cbdb.jpg" alt="TRGOTY">
        <div class="game-details">
          <h3>tomb raider game of the year edition</h3>
          <p>psychological horror game. Explore a mysterious ever-changing house in a slow-paced, atmospheric world</p>
          <p class="game-price">$39.99</p>
        </div>
        <form method="post" action="cart.php">
          <input type="hidden" name="game_name" value="tomb raider game of the year edition">
          <input type="hidden" name="price" value="39.99">
          <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
      </form>
      </div>

    <script>
      // Function to shuffle an array
      function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
          const j = Math.floor(Math.random() * (i + 1));
          [array[i], array[j]] = [array[j], array[i]];
        }
      }

      // Get the main container for all games
      const mainContainer = document.querySelector('main');

      // Get all the game containers and convert to an array
      const gameContainers = Array.from(mainContainer.querySelectorAll('.game'));

      // Shuffle the array of game containers
      shuffleArray(gameContainers);

      // Clear existing content
      mainContainer.innerHTML = '';

      // Append shuffled game containers back to the main container
      gameContainers.forEach(container => {
        mainContainer.appendChild(container);
      });</script>


  </main>


  <footer>
    <div class="footer-links">
      <a href="#">Feedback</a>
      <a href="#">Terms of Use</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Copyright</a>
    </div>
    <p>
      <span class="logo-symbol"></span>
      &copy; UnVelos.com All rights reserved.
    </p>
  </footer>
</body>

</html>