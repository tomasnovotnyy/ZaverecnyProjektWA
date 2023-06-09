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
            <img src="img/Articles/A2.jpg" alt="Image">
            <h1>Polda 7 vyšel na mobily, vývoj remástru postupuje</h1>
            <h2>Po Androidu dorazila i verze pro iOS. Vývojáři zodpověděli dotazy a plánují budoucnost série</h2>
        </div>
        <hr class="mb-4 mt-4">
        <section>
            <div class="container">
                <article>
                    <h3 class="text-white">Autor článku: Kristýna Sulková</h3>
                    <hr>
                    <p class="bg-dark text-white" style="font-size: 25px;">Na začátku letošního února dorazil Polda 7 na
                        Android a tento týden i na iOS, jak bylo slíbeno. Rok po vydání hry na PC si tak mohou Pankrácův
                        sedmý případ užít i ti, kteří preferují hraní na cestách nebo zkrátka mimo velkou obrazovku. I
                        zde je stejně jako u ostatních mobilních dílů úvodní část dostupná zdarma na zkoušku s možností
                        dokoupit zbytek hry, což je fajn přístup a možnost vyzkoušet si, zda vám styl sedmého dílu sedí.
                        A pokud patříte mezi podporovatele z kampaně na Hithitu, hru si můžete na mobilních zařízeních
                        aktivovat pomocí klíče, který byl určen původně na Steam. Zároveň se tím na mobilních zařízeních
                        nachází všechny vydané díly, tedy pokud se bavíme o dostupnosti na Google Play, protože na
                        konkurenčním App Store není kvůli cenzuře dostupný druhý díl. Na Steamu se prozatím nachází
                        sedmý a šestý díl a z těch starších je k dispozici Polda 3, který dorazil v prosinci. Jaký díl
                        jej bude následovat, to vývojáři zatím ještě nerozhodli.
                        <br><br>
                        Ale když už padla zmínka o Poldovi 2, nadále samozřejmě probíhá vývoj jeho „remástru“, který
                        loni rovněž uspěl na Hithitu a nakonec si na sebe vydělal přes 1,8 milionu korun. A právě o tom,
                        jak práce postupují, se vývojáři rozpovídali ve videu, ve kterém odpovídali na dotazy a nahlédli
                        prostřednictvím toho i do vzdálenější budoucnosti. Na konci března vývojáři vyzvali fanoušky,
                        aby se zeptali na to, co je zajímá. Nejen o remástru, ale klidně i o sérii celkově. V téměř
                        dvacetiminutovém videu tak vedoucí vývoje Petr Svoboda a grafik Jakub Mareš pohovořili o celé
                        řadě témat, jelikož po Poldovi 2 přišla řeč také na možné další platformy, ale rovněž na
                        pokračování Pankrácova příběhu v podobě Poldy 8, další plány a nostalgický pohled do minulosti.
                        <br><br>
                        Začněme ale hezky od začátku – jak je tedy na tom dle vývojářů momentálně remástr? Petr Svoboda
                        i Jakub Mareš potvrdili, že vývoj probíhá podle plánů, a proto by měli stihnout avizované vydání
                        kolem letošních Vánoc. Mareš pak neváhal podotknout, že si jako grafik dává s překreslováním
                        grafiky obzvlášť záležet. Přesněji řečeno nejde jen o překreslení jedna ku jedné, nýbrž i o
                        doplňování detailů a také úpravu animací, která zabere notný čas. Znovu připomněli, že v
                        základní hře zůstává vše při starém a nijak nezasahovali do nám známého příběhu, pouze na něj na
                        jeho konci navazují, aby jej překlenuli k dílu třetímu a nové Pankrácově profesní dráze coby
                        soukromého detektiva. Totéž platí i o hudbě, jejíž melodie zůstávají stejné, pouze jim bude
                        dopřán lepší zvukový mix. Kdo by ovšem mermomocí ze zvyku trval na původní hudbě, bude mít
                        možnost si ji ve hře zvolit.
                        <br><br>
                        Ačkoli dokončení remástru zabere ještě pár měsíců, už se množí dotazy týkající se dalších dílů a
                        vývojáři se netají tím, že o nich také přemýšlí. Často se skloňuje první díl, ale zde by to bylo
                        složitější s autorskými právy, která by musel Petr Svoboda vyjednat s původními vývojáři, tedy
                        SleepTeamem, ale i Jakub Mareš se příliš necítí na předělávání natolik specifické grafiky. Ale
                        zatím nic nebylo rozhodnuto. Ve hře je stále i přepracování starších dílů na konzole, přičemž
                        nejpravděpodobnějším stále zůstává Nintendo Switch díky dotykovému displeji. Přednost ale zatím
                        má doručení zbývajících dílů na Steam.
                        <br><br>
                        Několik otázek se týkalo i historie série, která je vzhledem ke svému počátku v roce 1998 a
                        sedmi hrám skutečně úchvatná a mezi českými hrami nezpochybnitelně významná. Petr Svoboda
                        vzpomněl na SleepTeam a jejich první díl, a poté jak se k vývoji dostal se druhým dílem on, Dan
                        Falta a Karel Matějka. Dan Falta se poté na Poldovi podílel až do Poldy 4 z roku 2002, ale jinak
                        se od té doby dodnes udržel už jen sám Svoboda, jelikož s návratem série v podobě Poldy 6 v roce
                        2014 přišel i zcela nový tým. Z někdejších vývojářů zavzpomínali vedle Matějky i na skladatele
                        Romana Džupinku, který skládal hudbu pro druhý až pátý díl, ale také si posteskli nad tím, že se
                        jim pro poslední sedmý díl již nepodařilo angažovat Jiřího Lábuse, který do té doby daboval
                        kromě pátého dílu v každé hře.
                        <br><br>
                        Kromě remásteru, vydávání starších dílů na Steamu a možnému portování na konzole… Co může po
                        dlouhých pětadvaceti letech Pankráce ještě překvapit? Čeká ho ještě další případ? Je to dost
                        možné, ale byl by to patrně ten úplně poslední. Vývojáři si jsou vědomi toho, že postava
                        Pankráce stojí na dabingu Luďka Soboty, který už však, se vší úctou, má svůj věk. Přes veškerou
                        snahu se to projevovalo už i v Poldovi 7 a další díl s Pankrácem v hlavní roli už by byl zkrátka
                        moc náročný. Polda 8 však může vzniknout a už nyní se dokonce vývojáři fanoušků ptají, zda by
                        stáli právě o něj, nebo raději o jiný projekt. Pankrác by už ovšem nebyl tím hlavním hrdinou a
                        součástí příběhu by bylo pomyslné předání pochodně a počátek něčeho nového v rámci série.
                        <br><br>
                        Petr Svoboda se nicméně znovu rozpovídal i o svém vysněném projektu, kterým se ostatně příliš
                        netají. Tím je trochu jiná hra, temná adventura, která by se v rámci poldovské série dala
                        přirovnat ke čtvrtému dílu. On sám je v tuto chvíli o trochu více pro Poldu 8, aby mohli uzavřít
                        Pankrácův příběh, s čímž souhlasí i řada fanoušků. I nadále však platí, že by si většina z nich
                        zároveň přála i onu temnou adventuru. Plánů v Zima Software rozhodně nemají málo. Budoucnost je
                        otevřená, a tak nezbývá než čekat, co dalšího vývojáři po očekávaném Polda 2 remásteru hráčům a
                        fanouškům nadělí.
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