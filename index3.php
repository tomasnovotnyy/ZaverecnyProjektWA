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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        @font-face {
            font-family: "Warfare";
            src: url("fonts/ModernWarfare.ttf");
        }

        body {
            padding-top: 80px;
        }

        main,
        header {
            font-family: "Warfare", sans-serif;
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

        article {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            max-width: 300px;
            max-height: 200px;
            margin: 10px;
            cursor: pointer;
        }

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
            display: none;
        }

        #imageContainer {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            display: none;
        }

        #enlargedImg {
            max-width: 80vw;
            max-height: 80vh;
        }

        #separator {
            margin-left: 50px;
            margin-right: 50px;
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

    <script>
        function showImage(img) {
            $('#enlargedImg').attr('src', img.src);
            $('#overlay').fadeIn();
            $('#imageContainer').fadeIn();
            $(document).on('keydown', closeOnEsc);
        }

        function hideImage() {
            $('#overlay').fadeOut();
            $('#imageContainer').fadeOut('slow', function () {
                $('#enlargedImg').attr('src', '');
            });
            $(document).off('keydown', closeOnEsc);
        }

        function closeOnEsc(e) {
            if (e.keyCode === 27) {
                hideImage();
            }
        }
    </script>
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
                            <a class="nav-link active" href="index3.php">Gallery of Games</a>
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

    <main class="p-5">
        <section class="mb-5">
            <article>
                <h2 class="text-white">Hades</h2>
                <div class="gallery">
                    <img src="img/Hades/Game1.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades/Game2.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades/Game3.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades/Game4.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades/Game5.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades/Game6.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades/Game7.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades/Game8.jpg" alt="Game Image" onclick="showImage(this)">
                </div>
                <div id="overlay" onclick="hideImage()"></div>
                <div id="imageContainer"><img id="enlargedImg"></div>
            </article>
        </section>

        <section class="mb-5">
            <article>
                <h2 class="text-white">HADES II</h2>
                <div class="gallery">
                    <img src="img/Hades2/Game1.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades2/Game2.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades2/Game3.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades2/Game4.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades2/Game5.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades2/Game6.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/Hades2/Game7.png" alt="Game Image" onclick="showImage(this)">
                </div>
                <div id="overlay" onclick="hideImage()"></div>
                <div id="imageContainer"><img id="enlargedImg"></div>
            </article>
        </section>

        <section class="mb-5">
            <article>
                <h2 class="text-white">Call of Duty: Modern Warfare 2</h2>
                <div class="gallery">
                    <img src="img/CoD/Game1.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/CoD/Game2.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/CoD/Game3.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/CoD/Game4.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/CoD/Game5.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/CoD/Game6.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/CoD/Game7.jpg" alt="Game Image" onclick="showImage(this)">
                    <img src="img/CoD/Game8.jpg" alt="Game Image" onclick="showImage(this)">
                </div>
                <div id="overlay" onclick="hideImage()"></div>
                <div id="imageContainer"><img id="enlargedImg"></div>
            </article>
        </section>

        <section class="mb-5">
            <article>
                <h2 class="text-white">Super Robot</h2>
                <div class="gallery">
                    <img src="img/SuperRobot/Game1.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/SuperRobot/Game2.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/SuperRobot/Game3.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/SuperRobot/Game4.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/SuperRobot/Game5.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/SuperRobot/Game6.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/SuperRobot/Game7.png" alt="Game Image" onclick="showImage(this)">
                    <img src="img/SuperRobot/Game8.png" alt="Game Image" onclick="showImage(this)">
                </div>
                <div id="overlay" onclick="hideImage()"></div>
                <div id="imageContainer"><img id="enlargedImg"></div>
            </article>
        </section>
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