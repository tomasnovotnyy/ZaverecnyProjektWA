<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>TechZone</title>
    <link rel="icon" type="image/x-icon" href="img/Favicon/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @font-face {
            font-family: "Warfare";
            src: url("fonts/ModernWarfare.ttf");
        }

        body {
            padding-top: 80px;
        }

        header {
            font-family: "Warfare", sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }

        .navbar-brand img {
            max-height: 30px;
            max-width: 30px;
        }

        .navbar-nav li a:hover {
            background-color: red;
            color: black;
        }

        .container {
            position: relative;
        }

        article {
            border-bottom: 1px solid #404040;
            border-top: 1px solid #404040;
            padding: 20px;
            margin-bottom: 20px;
        }

        h1 {
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 10px;
            margin-bottom: 170px;
            padding: 10px;
            color: white;
            background-color: red;
            z-index: 2;
        }

        h2 {
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 10px;
            margin-bottom: 60px;
            padding: 10px;
            color: white;
            background-color: red;
            z-index: 1;
        }

        img {
            width: 100%;
            height: auto;
        }

        #blackText {
            color: black;
        }

        #redText {
            color: red;
        }

        .loginbtn {
            background-color: red;
            color: #ffffff;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .loginbtn:hover {
            background-color: black;
            color: white;
            transform: scale(1.05);
        }

        .loginbtn.active {
            background-color: black !important;
            color: #ffffff !important;
            transform: none !important;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 767px) {
            h1 {
                position: static;
                margin-top: 10px;
                margin-bottom: 0;
                z-index: 2;
            }

            h2 {
                position: static;
                margin-top: 0;
                margin-bottom: 10px;
                z-index: 1;
            }
        }

        @media only screen and (max-width: 576px) {
            h1 {
                margin-bottom: 25px;
            }

            h2 {
                margin-bottom: 15px;
            }
        }

        @media only screen and (max-width: 420px) {
            h1 {
                margin-bottom: 70px;
            }

            h2 {
                bottom: 60px;
            }
        }
    </style>
</head>

<body class="bg-dark">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-3" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/Logo/logo2.png" alt="logo"><span
                        id="blackText">Tech</span><span id="redText">Zone</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index2.php">Geek Jokes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index3.php">Gallery of Games</a>
                        </li>
                    </ul>
                    <?php
                    if(!isset($_SESSION['email'])){
                    ?>
                    <div class="ms-auto">
                        <a href="login.php"><button class="btn btn-primary loginbtn" id="loginbtn">Login</button></a>
                    </div>
                    <?php
                    }else{
                    ?>
                    <div class="ms-auto">
                        <a href="logout.php"><button class="btn btn-primary loginbtn" id="loginbtn">Logout</button></a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <img src="img/Articles/A5.jpg" alt="Image">
            <h1>Diablo IV se dočká před vydáním ještě jednoho testu</h1>
            <h2>Vývojáři potřebují zkusit maximální zátěž serverů. World Boss se bude objevovat častěji</h2>
        </div>
        <hr class="mb-4 mt-4">
        <section>
            <div class="container">
                <article>
                    <h3 class="text-white">Autor článku: Zdeněk Princ</h3>
                    <hr>
                    <p class="bg-dark text-white" style="font-size: 25px;">Vprůběhu včerejšího dne jsme vás upozorňovali
                        na večerní prezentaci hry Diablo IV, ve které chtěl Blizzard ještě jednou reflektovat uplynulý
                        betatest, představit změny v dungeonech či vlastnostech jednotlivých tříd hrdinů a promluvit
                        také o blížícím se vydání. Objevovaly se však náznaky, že součástí hodinu a půl trvající
                        prezentace bude také nějaké překvapení, a ačkoliv se nejednalo o mnohými hráči vytoužené
                        předčasné vydání, potvrdily se spekulace o ještě jednom testu. Vývojáři jej nazývají „Server
                        Slam“, proběhne od 12. do 14. května, a hráči si budou moci vychutnat úplně novou verzi, do
                        které se už promítly některé z předchozích připomínek a avizovaných změn.
                        <br><br>
                        Během přenosu to oznámil sám game director Joe Shelly a doslova vyzval hráče, aby přišli a
                        pokusili se zničit servery, na kterých Diablo IV běží. „Potřebujeme tolik lidí, kolik to jen
                        bude možné, aby se připojili, podívali se na Diablo IV a hru si zahráli, abychom otestovali naše
                        servery před spuštěním,“ vysvětlil game director a nepřímo tím odkázal na problémy, které hráči
                        zažili během betatestu. Zejména v první předčasné vlně přístupů pro hráče s předobjednávkami
                        vznikaly dlouhé fronty, v nichž se na připojení do hry čekalo i desítky minut. Ještě horší ale
                        bylo, že hra zjevně trpěla na problémy s konektivitou a mnozí hráči, kteří trpělivě čekali velmi
                        dlouhou dobu na to, aby si mohli konečně zahrát, se ve výsledku pročekali jen k chybové hlášce a
                        mohli začít čekat znovu. V druhé vlně, otevřené už všem hráčům bez jakýchkoliv restrikcí, byla
                        situace hladší, ne však ideální a Blizzard zřejmě i se vzpomínkou na tragický launch Diabla III
                        dělá všechno pro to, aby se 6. června apokalypsa neopakovala.
                        <br><br>
                        Co se týče posledního testu před vydáním, dostupný bude na všech platformách a hráči se opět
                        podívají na samý začátek příběhu. Čeká je po obsahové stránce to stejné, co si mohli vyzkoušet
                        už dříve a stejný zůstává i limit maximální dosažitelné úrovně, tedy 20. Nad rámec zanesených
                        oprav, změn a vybalancování řady aspektů se pak mohou zájemci těšit na častější výskyt World
                        Bosse – Ashavy – který se objeví každé tři hodiny a dá tak hráčům víc pokusů na zisk cenné
                        trofeje. K dispozici bude všech pět hratelných tříd, všechny questy, dungeony i výbava, a pokud
                        se vám podaří dojít až na konec – tedy získat 20. úroveň i skalp Ashavy – čeká vás odměna v
                        podobě trofeje pro svého budoucího koně či jiné zvíře určené k rychlému přesunu.
                    </p>
                </article>
            </div>
        </section>
    </main>



    <footer class="text-center bg-dark text-white pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-danger">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i> Ječná 517/30, 120 00 Prague 2, Czechia
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> +420 123 456 789
                    </p>
                </div>
            </div>

            <hr class="mb-4" style="color: white;">

            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>Copyright ©2023 All rights reserved by:
                        <a href="" style="text-decoration: none;">
                            <strong class="text-danger">Tomáš Novotný</strong>
                        </a>
                    </p>
                </div>

                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
                                    class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-youtube">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const loginButton = document.getElementById("loginbtn");

loginButton.addEventListener("mousedown", () => {
    loginButton.classList.add("active");
});

loginButton.addEventListener("mouseup", () => {
    loginButton.classList.remove("active");
});
    </script>
</body>

</html>