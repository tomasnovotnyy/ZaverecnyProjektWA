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
            <img src="img/Articles/A6.jpg" alt="Image">
            <h1>Windows 95 byl speciálně upraven kvůli chybě v SimCity</h1>
            <h2>Na novém systému by byla hra bez kuriózního programátorského zásahu do kódu nefunkční</h2>
        </div>
        <hr class="mb-4 mt-4">
        <section>
            <div class="container">
                <article>
                    <h3 class="text-white">Autor článku: Kristýna Sulková</h3>
                    <hr>
                    <p class="bg-dark text-white" style="font-size: 25px;">Kdo by neznal SimCity, legendární
                        budovatelskou strategii z roku 1989, za níž stojí designér Will Wright a studio Maxis. Série
                        SimCity se těší velké popularitě dodnes a nejinak tomu bylo v devadesátých letech. Programátor a
                        spisovatel Joel Spolsky před lety odhalil, že původní SimCity (a vlastně i samotný Microsoft)
                        mohlo narazit kvůli obsažené chybě a nástupu operačního systému Windows 95, ale tak se nakonec
                        nestalo díky zajímavé opravě.
                        <br><br>
                        Ve skutečnosti se nejedná o žádnou novou informaci, neboť ji Spolsky na svém blogu popsal již
                        před dvaadvaceti lety. Spolsky mezi lety 1991 a 1994 pracoval v týmu Microsoft Excel, a tak měl
                        celou záležitost z první ruky. Navíc to byl právě on, komu se programátor hry s chybou svěřil.
                        Spolsky v textu tvrdí, že si Microsoft u svých operačních systémů zakládal na zpětné
                        kompatibilitě, což mnohdy znamenalo častá přepracování kódu, aby byla ona kompatibilita vůbec
                        možná, s čímž se počítalo i při vývoji Windows 95. „Windows 95? Žádný problém,“ píše Spolsky ve
                        svém starém blogovém příspěvku, který vydal 24. května 2000. „Pěkné nové 32bitové API, starý
                        16bitový software ale běžel stále perfektně. Microsoft tím byl posedlý a utratil velký balík
                        peněz za testování každého starého programu, který se mu podařilo najít.“
                        <br><br>
                        Se SimCity ovšem mohl být problém, jelikož se programátor Jon Ross, který původní SimCity napsal
                        pro Windows 3.x, dopustil v kódu hry chyby s uvolněnou pamětí, která se znovu načítala. Kvůli
                        této chybě by hra nebyla na novém operačním systému funkční. To se potvrdilo i při testování
                        SimCity v betě Windows 95, kdy hra zkrátka nefungovala. Ona chyba byla ovšem nalezena a vzhledem
                        k nemožnosti opravit samotnou hru (respektive onu opravu dodat hráčům) se do Windows 95 přidal
                        specifický kód, který v počítači hledá SimCity. V případě spuštění hry ji systém zaregistroval a
                        na základě přidaného kódu se alokátor paměti ve speciálním režimu postaral o to, aby se paměť
                        hned neuvolnila.
                        <br><br>
                        Tak se podařilo oblíbenému SimCity přežít přechod na novější operační systém a Microsoftu zase
                        neustoupit ze své snahy ohledně zpětné kompatibility. „To je právě ta posedlost zpětnou
                        kompatibilitou, kvůli které byli lidé ochotni přejít na Windows 95,“ uzavírá Spolsky ve svém
                        textu část o SimCity. Tento zajímavý příběh na světlo po letech vytáhl herní vývojář a podcaster
                        Kal Yoshika, jenž jej sdílel na svém Twitteru. Pod tento tweet přidal jeden z komentujících s
                        přezdívkou code_and_beer další zajímavý způsob, jak udržet hru funkční. Ten se pro změnu týká
                        Final Fantasy VII, kdy hra nechce běžet na Windows NT, a tak soubory v podstatě lžou a
                        předstírají, že se jedná o Windows 95. Aneb i takto se řešily chyby v době před aktualizacemi a
                        rozhodně se nejedná o ojedinělé případy. Nicméně samotný fakt, že byl příběh se SimCity v
                        podstatě objeven až po dlouhých dvaadvaceti letech, názorně ukazuje, jak málo jsou tyto zásahy a
                        záchrany známy, ačkoli jejich iniciátoři nepochybně zasluhují uznání.
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