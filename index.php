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
        }

        .navbar-nav li a:hover {
            background-color: red;
            color: black;
        }

        #separator {
            margin-left: 50px;
            margin-right: 50px;
        }

        #logoText {
            color: black;
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index2.php">Geek Jokes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index3.php">Gallery of Games</a>
                        </li>
                    </ul>
                    <?php
                    session_start();
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
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 p-4">

                <div class="col pb-4">
                    <div class="card m-2 h-100">
                        <img src="img/Articles/A1.jpg" class="card-img-top" alt="picture2">
                        <div class="card-body">
                            <h5 class="card-title text-center" id="heading1" onclick="saveArticleClick('article1')">
                                Hráči mají bojovat podle pravidel skutečné
                                války. Svou
                                taktiku ve first person akcích můžete dobrovolně podřídit variaci na reálná omezení</h5>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="card m-2 h-100">
                        <img src="img/Articles/A2.jpg" class="card-img-top" alt="picture3">
                        <div class="card-body">
                            <h5 class="card-title text-center" id="heading2" onclick="saveArticleClick('article2')">
                                Polda 7 vyšel na mobily, vývoj remástru
                                postupuje. Po
                                Androidu dorazila i verze pro iOS. Vývojáři zodpověděli dotazy a plánují budoucnost
                                série</h5>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="card m-2 h-100">
                        <img src="img/Articles/A3.jpg" class="card-img-top" alt="picture4">
                        <div class="card-body">
                            <h5 class="card-title text-center" id="heading3" onclick="saveArticleClick('article3')">Dead
                                Island 2. Takhle povedenou hru zřejmě
                                čekal jen
                                málokdo. Prokletí bylo prolomeno, vzhůru do LA!</h5>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="card m-2 h-100">
                        <img src="img/Articles/A4.jpg" class="card-img-top" alt="picture5">
                        <div class="card-body">
                            <h5 class="card-title text-center" id="heading4" onclick="saveArticleClick('article4')">Sony
                                kupuje Firewalk Studios, Focus pak
                                Dovetail Games.
                                Firewalk chystá další AAA live service titul, Focus získává odborníky na vlakové
                                simulátory</h5>
                        </div>
                    </div>
                </div>
                <div class="col pb-4">
                    <div class="card m-2 h-100">
                        <img src="img/Articles/A5.jpg" class="card-img-top" alt="picture2">
                        <div class="card-body">
                            <h5 class="card-title text-center" id="heading5" onclick="saveArticleClick('article5')">
                                Diablo IV se dočká před vydáním ještě
                                jednoho testu.
                                Vývojáři potřebují zkusit maximální zátěž serverů. World Boss se bude objevovat častěji
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="card m-2 h-100">
                        <img src="img/Articles/A6.jpg" class="card-img-top" alt="picture3">
                        <div class="card-body">
                            <h5 class="card-title text-center" id="heading6" onclick="saveArticleClick('article6')">
                                Windows 95 byl speciálně upraven kvůli
                                chybě v SimCity.
                                Na novém systému by byla hra bez kuriózního programátorského zásahu do kódu nefunkční
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="card m-2 h-100">
                        <img src="img/Articles/A7.jpg" class="card-img-top" alt="picture4">
                        <div class="card-body">
                            <h5 class="card-title text-center" id="heading7" onclick="saveArticleClick('article7')">Proč
                                si musí hráči připlatit za elfštinu v
                                Glumovi?
                                Dabing v sindarštině stojí hráče 250 korun navíc. Připlácí se za výuku cizího jazyka
                                dabérů</h5>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="card m-2 h-100">
                        <img src="img/Articles/A8.jpg" class="card-img-top" alt="picture5">
                        <div class="card-body">
                            <h5 class="card-title text-center" id="heading8" onclick="saveArticleClick('article8')">
                                Specifikace handheldu ROG Ally zřejmě
                                unikly předčasně.
                                Detaily přináší věrohodný leták. Došlo také ke smazání tweetu, který na něj upozornil
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex mx-auto justify-content-center align-items-center">
            <div id="popularArticlesContainer" style="text-align: center;">
                <h3 id="popularArticlesHeader" style="color: white;">Top Články</h3>
                <ol id="popularArticles" style="color: white;"></ol>
            </div>
        </div>
        <br>
        <div class="text-center" id="deleteLocalStorage" style="display: none;">
            <button class="btn btn-danger">Delete Local Storage</button>
        </div>
        <br>
    </main>

    <hr class="mb-0" style="color: white;" id="separator">

    <footer class="text-center bg-dark text-white pt-4 pb-4">
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
        function deleteLocalStorage() {
            localStorage.clear();
            const popularArticles = document.getElementById('popularArticlesContainer');
            const popularArticlesHeader = document.getElementById('popularArticlesHeader');
            const popularArticlesList = document.getElementById('popularArticles');
            const deleteButton = document.getElementById('deleteLocalStorage');

            popularArticlesList.innerHTML = '';
            popularArticles.innerHTML = '';
            popularArticlesHeader.innerHTML = '';
            popularArticlesList.innerHTML = '';
            deleteButton.innerHTML = '';
            alert('Local storage byla vymazána.');
        }
        document.getElementById('deleteLocalStorage').addEventListener('click', deleteLocalStorage);

        function saveArticleClick(articleId) {
            const clickedArticle = localStorage.getItem(articleId);
            let clickCount = clickedArticle ? parseInt(clickedArticle) : 0;
            clickCount++;
            localStorage.setItem(articleId, clickCount);

            displayPopularArticles();
        }

        function displayPopularArticles() {
            const popularArticles = document.getElementById('popularArticlesContainer');
            const popularArticlesHeader = document.getElementById('popularArticlesHeader');
            const popularArticlesList = document.getElementById('popularArticles');
            popularArticlesList.innerHTML = '';

            const deleteButton = document.getElementById('deleteLocalStorage');

            const articles = [
                { id: 'article1', title: 'Hráči mají bojovat podle pravidel skutečné války' },
                { id: 'article2', title: 'Polda 7 vyšel na mobily, vývoj remástru postupuje' },
                { id: 'article3', title: 'Dead Island 2' },
                { id: 'article4', title: 'Sony kupuje Firewalk Studios, Focus pak Dovetail Games' },
                { id: 'article5', title: 'Diablo IV se dočká před vydáním ještě jednoho testu' },
                { id: 'article6', title: 'Windows 95 byl speciálně upraven kvůli chybě v SimCity' },
                { id: 'article7', title: 'Proč si musí hráči připlatit za elfštinu v Glumovi?' },
                { id: 'article8', title: 'Specifikace handheldu ROG Ally zřejmě unikly předčasně' },
            ];

            const clickedArticles = articles.filter(article => {
                const clicks = parseInt(localStorage.getItem(article.id)) || 0;
                return clicks > 0;
            });

            if (clickedArticles.length === 0) {
                popularArticles.style.display = 'none';
            } else {
                popularArticles.style.display = 'block';
                popularArticlesHeader.style.display = 'block';

                clickedArticles.sort((a, b) => {
                    const clicksA = parseInt(localStorage.getItem(a.id)) || 0;
                    const clicksB = parseInt(localStorage.getItem(b.id)) || 0;
                    return clicksB - clicksA;
                });

                clickedArticles.slice(0, 3).forEach(article => {
                    const listItem = document.createElement('li');
                    listItem.textContent = article.title;
                    popularArticlesList.appendChild(listItem);
                });

                deleteButton.style.display = 'block';
            }
        }

        displayPopularArticles();

        const heading = document.getElementById('heading1');
        const heading2 = document.getElementById('heading2');
        const heading3 = document.getElementById('heading3');
        const heading4 = document.getElementById('heading4');
        const heading5 = document.getElementById('heading5');
        const heading6 = document.getElementById('heading6');
        const heading7 = document.getElementById('heading7');
        const heading8 = document.getElementById('heading8');

        heading.addEventListener('mouseover', () => {
            heading.style.color = 'red';
            heading.style.cursor = 'pointer';
        });

        heading.addEventListener('mouseout', () => {
            heading.style.color = 'black';
        });

        heading.addEventListener('click', () => {
            window.location.href = 'clanek1.php';
        });




        heading2.addEventListener('mouseover', () => {
            heading2.style.color = 'red';
            heading2.style.cursor = 'pointer';
        });

        heading2.addEventListener('mouseout', () => {
            heading2.style.color = 'black';
        });

        heading2.addEventListener('click', () => {
            window.location.href = 'clanek2.php';
        });




        heading3.addEventListener('mouseover', () => {
            heading3.style.color = 'red';
            heading3.style.cursor = 'pointer';
        });

        heading3.addEventListener('mouseout', () => {
            heading3.style.color = 'black';
        });

        heading3.addEventListener('click', () => {
            window.location.href = 'clanek3.php';
        });




        heading4.addEventListener('mouseover', () => {
            heading4.style.color = 'red';
            heading4.style.cursor = 'pointer';
        });

        heading4.addEventListener('mouseout', () => {
            heading4.style.color = 'black';
        });

        heading4.addEventListener('click', () => {
            window.location.href = 'clanek4.php';
        });




        heading5.addEventListener('mouseover', () => {
            heading5.style.color = 'red';
            heading5.style.cursor = 'pointer';
        });

        heading5.addEventListener('mouseout', () => {
            heading5.style.color = 'black';
        });

        heading5.addEventListener('click', () => {
            window.location.href = 'clanek5.php';
        });




        heading6.addEventListener('mouseover', () => {
            heading6.style.color = 'red';
            heading6.style.cursor = 'pointer';
        });

        heading6.addEventListener('mouseout', () => {
            heading6.style.color = 'black';
        });

        heading6.addEventListener('click', () => {
            window.location.href = 'clanek6.php';
        });




        heading7.addEventListener('mouseover', () => {
            heading7.style.color = 'red';
            heading7.style.cursor = 'pointer';
        });

        heading7.addEventListener('mouseout', () => {
            heading7.style.color = 'black';
        });

        heading7.addEventListener('click', () => {
            window.location.href = 'clanek7.php';
        });




        heading8.addEventListener('mouseover', () => {
            heading8.style.color = 'red';
            heading8.style.cursor = 'pointer';
        });

        heading8.addEventListener('mouseout', () => {
            heading8.style.color = 'black';
        });

        heading8.addEventListener('click', () => {
            window.location.href = 'clanek8.php';
        });

        displayPopularArticles();


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