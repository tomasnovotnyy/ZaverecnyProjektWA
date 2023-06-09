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
            <img src="img/Articles/A1.jpg" alt="Image">
            <h1>Hráči mají bojovat podle pravidel skutečné války</h1>
            <h2>Svou taktiku ve first person akcích můžete dobrovolně podřídit variaci na reálná omezení</h2>
        </div>
        <hr class="mb-4 mt-4">
        <section>
            <div class="container">
                <article>
                    <h3 class="text-white">Autor článku: Jiří Bigas</h3>
                    <hr>
                    <p class="bg-dark text-white" style="font-size: 25px;">Červený kříž vyzval hráče, aby nepáchali ve
                        first
                        person akcích “válečné zločiny” a zkusili se chovat i
                        na digitálním bojišti podle pravidel skutečné války, jejichž smyslem je chránit život a
                        důstojnost lidí.
                        Jedná se samozřejmě svého druhu o experiment a gesto. Červený kříž upozorňuje na popularitu FPS
                        s tím,
                        že lidé se jejich prostřednictvím zapojují do “válek” z bezpečí domova. Ale venku zuří skutečné
                        konflikty, které neblaze ovlivňují životy lidí. Tímto způsobem mohou hráči ukázat, že i války
                        mají svá
                        pravidla.
                        <br><br>
                        K iniciativě se připojily hry Fortnite prostřednictvím módu Play by the Rules a Arma 3 skrze
                        DLC Laws of War. To vyšlo už v roce 2017 a část příjmů z rozšíření šla už dřív Červenému kříži.
                        Ale uplatnit lze předepsaný přístup také u dalších her, i když samozřejmě s různou úspěšností.
                        Na místě je ale samozřejmě otázka, co to přesně znamená hrát podle pravidel. Červený kříž říká,
                        že takto mohou hrát všichni hráči. Když je nepřítel na zemi a nemůže se bránit, nesmíte na něj
                        dál střílet. Boti, kteří na vás nezaútočí jako první, jsou považováni za civilisty a nesmíte jim
                        ublížit.
                        <br><br>
                        Dále pak nesmíte útočit na nemocnice, školy a obytné domy. Jsou považovány za civilní objekty a
                        útočiště. Když už tu dojde k boji, musíte se snažit minimalizovat vzniklé škody. A konečně
                        poslední pravidlo vyzývá, abyste pomohli lékárničkou všem, kdo ji potřebují. Pokud máte nějakou
                        nazbyt a mohou ji použít i ostatní, musíte ji věnovat tomu, kdo je v ohrožení života, ať je to
                        spojenec, nebo nepřítel.
                        <br><br>
                        Všechna pravidla jsou samozřejmě inspirována skutečností, ale pozměněna tak, aby dávala ve hrách
                        smysl. Nicméně pochopitelně můžete namítnout, že to není ten nejefektivnější způsob, jak vyhrát.
                        Ale to ani není primárním cílem výzvy.
                        <br><br>
                        Červený kříž připomíná, že smyslem skutečných pravidel je chránit lidské životy i během
                        ozbrojených konfliktů a zmenšovat utrpení. Pravidla mají chránit civilisty, humanitární
                        pracovníky, zdravotníky i zraněné vojáky a zajatce, kteří nemohou bojovat. Cílem je ale také
                        ochraňovat zdroje vody, úrodu či zvířata, tedy to, co potřebují k přežití ti, kteří nejsou přímo
                        zapojeni do konfliktu. O zraněné a nemocné má být postaráno bez ohledu na to, k jaké straně
                        přísluší. Použitá taktika a zbraně nesmí přispívat k nadměrnému utrpení a zakázáno je samozřejmě
                        také mučení zajatců.
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