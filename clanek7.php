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
            <img src="img/Articles/A7.jpg" alt="Image">
            <h1>Proč si musí hráči připlatit za elfštinu v Glumovi?</h1>
            <h2>Dabing v sindarštině stojí hráče 250 korun navíc. Připlácí se za výuku cizího jazyka dabérů</h2>
        </div>
        <hr class="mb-4 mt-4">
        <section>
            <div class="container">
                <article>
                    <h3 class="text-white">Autor článku: Zdeněk Princ</h3>
                    <hr>
                    <p class="bg-dark text-white" style="font-size: 25px;">Po dlouhém mlčení a následném odkladu hry na
                        neurčito se na konci května konečně dočkají hráči adventury The Lord of the Rings: Gollum od
                        vývojářů ze studia Daedalic Entertainment. Trvalo doslova několik let, než jsme ze hry viděli
                        první obrázky, s napětím jsme čekali i na plnohodnotnější ukázku hratelnosti, to všechno už ale
                        má titul za sebou, a pokud se už nestane něco neočekávaného, skutečně 25. května dorazí na PC,
                        PS4, PS5, Xbox One a Xbox Series s tím, že verze pro Switch přijde ke slovu trochu déle. A
                        protože už známe datum uvedení, běží také předobjednávky, které by na první pohled působily
                        vcelku standardně – koupit si můžete základní a vylepšenou verzi, tzv. Precious Edition – a
                        samozřejmě očekávat, že v dražší edici najdete nějaký ten bonus navíc. Hráče ovšem překvapilo,
                        když zjistili, že součástí oné miláčkovské edice je dabing v sindarštině, jazyce elfů, což zní
                        lákavě a fanoušci by nepochybně chtěli mít tuhle záležitost přístupnou i ve standardní edici.
                        Rozběhla se proto vášnivá debata, která nakonec přiměla vývojáře vysvětlit některé okolnosti a
                        doplnit, proč si za dabing, ale také balíček emotů, kompendium s odkazem na svět Pána prstenů,
                        soundtrack a artworky musí hráči připlatit.
                        <br><br>
                        Předně, sindarština se netýká celé hry a všech postav, ačkoliv základní popis – sinadrský voice
                        over – to může naznačovat. Jak vývojáři vysvětlili, dabing se týká skutečně jen elfů, kteří
                        nebudou mluvit jazykem hry, ale právě zvučnou řečí, kterou si mohli fanoušci Pána prstenů užít
                        nejen v knihách, ale samozřejmě i filmech režiséra Petera Jacksona. Dále je důležité podtrhnout,
                        že Precious Edition skutečně přichází i s dalšími bonusy, takže cena, která se pohybuje
                        přibližně o 250 korun výše nežli cena standardní verze hry, je tím dostatečně obhájená. A pak je
                        tu ještě jeden faktor, o kterém promluvili vývojáři ve svém prohlášení pro britský Eurogamer.
                        Mluvit jazykem, který se běžně nepoužívá a neočekává se, že jím budou vládnout vybraní herci, je
                        nutné konkrétní lidi naučit, resp. nechat je osvojit si jednotlivé pronášené věty, aby zněly
                        autenticky a fanoušci, pro které je tento bonus určen, v nich nenašli nějaké zjevné chyby či
                        nedostatky.
                        <br><br>
                        „Elfové budou v základní hře čas od času mluvit svým rodným jazykem. Rozšíření „Sindarin VO“
                        navíc přidává další hlášky v sindarštině některým postavám v pozadí,“ uvádí přesně zástupci
                        studia. Díky tomu bude moci Glum a potažmo i hrát naslouchat rozpravám elfů, aniž by jim nutně
                        rozuměl, a hra se tak postará o dokreslení autentické atmosféry, ať už to bude přímo v Temném
                        hvozdě nebo kdekoliv jinde ve Středozemi, kde se budou pohybovat elfové. „Společnost Daedalic si
                        dala záležet a najala profesionální hlasové herce, kteří byli vyškoleni v sindarštině našimi
                        odborníky na svět [Pána prstenů],“ doplňují pak vývojáři a naznačují, že i to samozřejmě stálo
                        nějaké peníze navíc. Samozřejmě nikdo z vývojářů nezachází do detailů kalkulace, jde o
                        symbolické podtrhnutí, že za přípravou dalšícho dabingu stálo značné úsilí a ve společnosti
                        dalších odměn má být přijatelné chtít od hráčů něco navíc.
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