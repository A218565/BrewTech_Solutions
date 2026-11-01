<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caffinity</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            min-height: 100%;
             margin: 0;
            overflow-x: hidden;
            background-color:#1c2a48

        }

        /* Wrapper that clips elements so they don't overlap the sidebar */
        .main-wrapper {
            position: relative;
            width: 100%;
            min-height: 100vh;
            overflow: hidden; /* Stops diagonal line & checkers from bleeding left */
            z-index: 1;      /* Keeps main area behind a sidebar (sidebar should be z-index: 100) */
        }

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 700px;
            overflow: hidden;
            background-color: #fffdf1;
        }

        /* Top Navigation */
        .navbar {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 15px 30px;
            width: 100%;
            box-sizing: border-box;
            z-index: 20;
        }

       
.navbar {
    position: absolute;
    top: 0;
    right: 0;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 20px 30px;
    width: 100%;
    box-sizing: border-box;
    z-index: 20;
}

.nav-right {
    display: flex;
    align-items: center;
}

.navbar h5 {
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    font-weight: 600;
    color: #182f58;
}


        .icon-circle:hover {
            background-color: #f2efe0;
        }

        .profile-btn svg {
            stroke: #1a1a1a;
        }

        .signup-btn {
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 14px;
            color: #ffffff;
            background-color: #1c2a48;
            padding: 10px 20px;
            border-radius: 20px;
            transition: opacity 0.2s ease;
        }

        .signup-btn:hover {
            opacity: 0.9;
        }

        /* Diagonal Stripe Background */
        .diagonal-stripe {
            position: absolute;
            width: 2700px;
            height: 150px;
            background-color: #182f58;
            top: 53%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-8deg);
            z-index: 1;
            ponter-events: none; /* Prevents interaction with the stripe */
        }

        /* Bottom Checkerboard */
        .checkerboard {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 85px;
            background-color: #fffdf1;
            background-image: repeating-conic-gradient(
                #061536 0% 25%,
                #fffdf1 0% 50%
            );
            background-size: 70px 70px;
            z-index: 2;
        }

        /* Typography */
        @font-face {
            font-family: 'Tomo Acuario';
            src: url('FontsFree-Net-tomo-acuario-regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .from-bean {
            position: absolute;
            top: 45px;
            left: 100px;
            font-family: 'Tomo Acuario', sans-serif;
            font-size: 120px;
            font-weight: normal;
            line-height: 1;
            color: #061536;
            -webkit-text-stroke: 30px #ffffff;
            paint-order: stroke fill;
            z-index: 3;
        }

        .to-cup {
            position: absolute;
            right: 60px;
            bottom: 200px;
            font-family: 'Tomo Acuario', sans-serif;
            font-size: 134px;
            font-weight: normal;
            line-height: 1;
            color: #061536;
            -webkit-text-stroke: 30px #ffffff;
            paint-order: stroke fill;
            z-index: 4;
            text-align: right;
        }

        .caption {
            position: absolute;
            right: 170px;
            bottom: 85px;
            font-family: 'Tomo Acuario', sans-serif;
            font-size: 25px;
            font-weight: normal;
            line-height: 1;
            color: #061536;
            -webkit-text-stroke: 4px #fffdf1;
            paint-order: stroke fill;
            z-index: 3;
        }

        
        

        /* --- Pure CSS Coffee Beans --- */
        .css-bean {
            position: absolute;
            width: 36px;
            height: 52px;
            background: radial-gradient(circle at 35% 35%, #6f4e37, #2b1810);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            box-shadow: 3px 5px 8px rgba(0, 0, 0, 0.3);
            pointer-events: none;
            z-index: 10; /* Set above text and background line */
        }

        .css-bean::after {
            content: '';
            position: absolute;
            top: 10%;
            left: 45%;
            width: 3px;
            height: 80%;
            background: #1a0f0a;
            border-radius: 50%;
            transform: rotate(10deg);
        }

        /* Left Scattered Beans */
        .bean-1 { top: 20%; left: 40px; transform: rotate(-35deg) scale(0.9); }
        .bean-2 { top: 40%; left: 80px; transform: rotate(15deg) scale(1.3); }
        .bean-3 { top: 60%; left: 45px; transform: rotate(-60deg) scale(0.6); opacity: 0.85; }
        .bean-4 { top: 50%; left: 20px; transform: rotate(25deg) scale(0.7); }

        /* Right Scattered Beans */
        .bean-5 { top: 25%; right: 50px; transform: rotate(40deg) scale(1.2); }
        .bean-6 { top: 15%; right: 110px; transform: rotate(-20deg) scale(0.7); }
        .bean-7 { top: 45%; right: 80px; transform: rotate(10deg) scale(1.0); }

        /* --- Hand Drawn Doodles --- */
        .doodle {
            position: absolute;
            pointer-events: none;
            z-index: 15;
        }

        .doodle-squiggle {
            top: 60px;
            left: 470px;
            width: 160px;
            transform: rotate(-30deg);
        }

        .doodle-star-left {
            top: 50%;
            left: 220px;
            width: 50px;
        }

        .doodle-star-right {
            top: 39%;
            right: 260px;
            width: 70px;
        }

        .doodle-loop {
            bottom: 180px;
            left: 200px;
            width: 55px;
        }

        /* Base style for both mug images */
.mug {
  position: absolute;
  height: auto;
  pointer-events: none;
}

/* Green Mug (Back Right) */
.mug-green {
  bottom: 1%;
  right: 20%;
  width: 550px; /* Adjust size as needed */
  z-index: 3;   /* Sits above the diagonal blue line (z-index: 1) */
    rotate: -10deg; /* Slight rotation for a natural look */
}

/* Brown Mug (Front Left Overlay) */
.mug-brown {
  top: 15%;
  right: 40%;
  width: 450px; /* Slightly smaller than green mug */
  z-index: 3;   /* Higher z-index so it overlaps in front of green mug */
  filter: drop-shadow(0 15px 15px rgba(0, 0, 0, 0.25)); /* Adds depth shadow */
transform: scaleX(-1); /* mirror the image */
rotate: 10deg;
}


    </style>
</head>

<body>
    <div class="main-wrapper">
        
<header class="navbar">
    <div class="nav-right">
        <h5 class="mb-0">BrewTech Solutions</h5>
    </div>
</header>


        <section class="hero">
            <!-- Background Graphics -->
            <div class="diagonal-stripe"></div>
            <div class="checkerboard"></div>

            <!-- Mug Images -->
            <img src="images/green mug.png" alt="green mug" class="mug mug-green">
            <img src="images/brown mug.png" alt="brown mug" class="mug mug-brown">

            <!-- Foreground Text -->
            <h1 class="from-bean">FROM<br>BEAN</h1>
            <h1 class="to-cup">TO CUP</h1>
            <p class="caption">
                Redefining your daily coffee<br>
                ritual with smart design, <br>
                effortless convenience, <br>
                and a touch of luxury.
            </p>
           

            <!-- Scattered Coffee Beans -->
            <div class="css-bean bean-1"></div>
            <div class="css-bean bean-2"></div>
            <div class="css-bean bean-3"></div>
            <div class="css-bean bean-4"></div>
            <div class="css-bean bean-5"></div>
            <div class="css-bean bean-6"></div>
            <div class="css-bean bean-7"></div>

            <!-- Decorative Doodles -->
            <svg class="doodle doodle-squiggle" viewBox="0 0 100 50" fill="none" stroke="#061536" stroke-width="4" stroke-linecap="round">
                <path d="M10 25 C 20 5, 35 45, 50 25 C 65 5, 80 45, 90 25" />
            </svg>
            <svg class="doodle doodle-star-left" viewBox="0 0 40 40" fill="#ffffff">
                <path d="M20 0 L24 16 L40 20 L24 24 L20 40 L16 24 L0 20 L16 16 Z" />
            </svg>
            <svg class="doodle doodle-star-right" viewBox="0 0 40 40" fill="#ffffff">
                <path d="M20 0 L23 17 L40 20 L23 23 L20 40 L17 23 L0 20 L17 17 Z" />
            </svg>
            <svg class="doodle doodle-loop" viewBox="0 0 60 40" fill="none" stroke="#061536" stroke-width="3.5" stroke-linecap="round">
                <path d="M10 10 C 40 5, 50 35, 30 35 C 10 35, 20 15, 50 25" />
            </svg>
        </section>
    </div>
</body>
</html>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>