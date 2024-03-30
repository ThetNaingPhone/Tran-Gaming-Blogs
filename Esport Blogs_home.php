<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esport Blog</title>
    <link href="main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #15141d;
        }

        

        #pillNav2 .nav-link {
            background-color: rgb(26, 23, 34);
            color: rgb(155, 154, 154);
        }

        #pillNav2 .nav-link.active {
            background-color: rgb(62, 59, 79);
            color: white;
        }

        .nav2 {
            /* align-items: center; */
            margin-bottom: 40px;
            width: 100%;
        }

        .popular {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .popular .card {
            width: 91%;
            /* height: 300px; */
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #201e26;
            color: white;
        }

        .carousel-inner .carousel-item .blogs {
            display: flex;
            justify-content: center;
        }

        .blogs .card-group {
            width: 92%;
        }

        .blogs .card-group .card {
            margin: 10px;
            align-items: center;
            background-color: #201e26;
            color: white;
        }

        .watch {
            padding: 0px 50px;
        }

        #watch .card {
            background-color: #201e26;
            color: white;
        }

        .bg-transparent-blue {
            background-color: rgba(27, 27, 27, 0.5);
            /* Adjust the alpha value as needed for transparency */
        }

        .bg-transparent-blue .card-footer {
            padding: 0.5rem;
            /* Adjust as needed */
        }
    </style>

    <script>
        function showContent(tab) {
            var contents = document.getElementsByClassName("content");
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = "none";
            }

            document.getElementById(tab).style.display = "block";
        }
    </script>

</head>

<body class="container-fluid">
    <div class="row">
        <nav class="nav1 sticky-top">
            <div style="padding: 5px 0px 0px 80px; display:flex; width: 400px;">
                <img style="width: 40px; height: 40px;" src="assets/images/Esport_logo.png" />
                <h5 style="padding:7px 0px 0px 10px; color:white;">Tran Esport</h5>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col" style="margin-right:27%">
                        <ul class="nav nav-underline justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="Esport Blogs.php">
                                    <i class="bi bi-house-door"></i>
                                    <span class="d-none d-lg-inline">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="watch.html">
                                    <i class="bi bi-collection-play"></i><span class="d-none d-lg-inline">Watch</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news.php">
                                    <i class="bi bi-globe"></i> <span class="d-none d-lg-inline">News</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactUs.html">
                                    <i class="bi bi-person-lines-fill"></i> <span
                                        class="d-none d-lg-inline">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-auto signout">
                <a href="SignIn.html" class="nav-link">
                    <i class="bi bi-box-arrow-left h4"></i>
                </a>
            </div>
        </nav>

        <div id="home" class="content mb-3">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <nav class="nav2">
                        <ul class="nav nav-pills nav-fill gap-2 p-1 small rounded-5 shadow-sm" id="pillNav2"
                            role="tablist">
                            <li class="nav-item col-5 col-lg-2" role="presentation">
                                <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab"
                                    type="button" role="tab" aria-selected="true"
                                    onclick="updateCard('DOTA 2', 'Widely-played MOBA sequel by Valve, based on the popular Warcraft III mod.', 'assets/images/dota2.jpg')">MOBA</button>
                            </li>
                            <li class="nav-item col-5 col-lg-2" role="presentation">
                                <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button"
                                    role="tab" aria-selected="false"
                                    onclick="updateCard('PUBG', 'Trendsetting battle royale game developed by PUBG Corporation.', 'assets/images/PUBG_popular.jpg')">FPS</button>
                            </li>
                            <li class="nav-item col-5 col-lg-2" role="presentation">
                                <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button"
                                    role="tab" aria-selected="false"
                                    onclick="updateCard('FIFA 23', 'Mobile-centric MOBA known for its fast-paced matches.', 'assets/images/fifa23.jpg')">
                                    Sports
                                </button>
                            </li>
                            <li class="nav-item col-5 col-lg-2" role="presentation">
                                <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button"
                                    role="tab" aria-selected="false"
                                    onclick="updateCard('Candy Crash', 'Iconic FPS title featuring tactical gameplay and competitive modes.', 'assets/images/candycrash.webp')">
                                    Puzzles
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <script>
                function updateCard(title, text, img) {
                    document.getElementById('cardTitle').innerText = title;
                    document.getElementById('cardText').innerText = text;
                    document.getElementById('popular-img').src = img;
                }
            </script>

            <div class="popular">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="newsDetail.html"><img style="height:380px; width: 1700px;" id="popular-img"
                                    src="assets/images/dota2.jpg" class="img-fluid rounded-start" alt="..."></a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h4 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: rgb(107, 121, 134); margin-bottom: 50px; margin-top: 50px;"
                                    class="card-title" id="cardTitle">DOTA 2</h4>
                                <p style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:24px;"
                                    class="card-text" id="cardText"> Widely-played MOBA sequel by Valve, based on the
                                    popular Warcraft III mod. </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="blogs">

                            <div class="card-group">
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/mirana.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Dota 2</h5>
                                        <p class="card-text">Widely-played MOBA sequel by Valve, based on the popular
                                            Warcraft III mod.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/new hero.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">New Hero</h5>
                                        <p class="card-text">Exciting addition to the game.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/omniknight.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Omniknight</h5>
                                        <p class="card-text">Protective melee strength hero.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/zeus.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Zeus</h5>
                                        <p class="card-text">Mighty ranged intelligence hero.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="blogs">
                            <div class="card-group">
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/mirana.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Dota 2</h5>
                                        <p class="card-text">Widely-played MOBA sequel by Valve, based on the popular
                                            Warcraft III mod.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/new hero.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">New Hero</h5>
                                        <p class="card-text">Exciting addition to the game.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/omniknight.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Omniknight</h5>
                                        <p class="card-text">Protective melee strength hero.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/zeus.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Zeus</h5>
                                        <p class="card-text">Mighty ranged intelligence hero.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev"
                        style="color: black;">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div id="demo1" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="blogs">
                            <div class="card-group">
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/arlucard.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Arlucard</h5>
                                        <p class="card-text">Powerful hero with high damage and lifesteal abilities.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/Arlot.webp" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Arlot</h5>
                                        <p class="card-text">Swift assassin with high mobility and burst damage.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/Grock.webp" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Grock</h5>
                                        <p class="card-text">Tank hero known for his sturdy defense and disruptive
                                            abilities.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/ling.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Ling</h5>
                                        <p class="card-text">Agile assassin with exceptional mobility and crowd control.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="blogs">

                            <div class="card-group">
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/mirana.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Dota 2</h5>
                                        <p class="card-text">Widely-played MOBA sequel by Valve, based on the popular
                                            Warcraft III mod.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/new hero.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">New Hero</h5>
                                        <p class="card-text">Exciting addition to the game.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/omniknight.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Omniknight</h5>
                                        <p class="card-text">Protective melee strength hero.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/zeus.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Zeus</h5>
                                        <p class="card-text">Mighty ranged intelligence hero.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev"
                        style="color: black;">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div id="demo2" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#de" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#de" data-bs-slide-to="1"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="blogs">
                            <div class="card-group">
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/sanhok-map.jpeg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Sanhok Map</h5>
                                        <p class="card-text">An exciting new map introduced in the latest update.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/erangel.jpeg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Erangel</h5>
                                        <p class="card-text">Classic battleground for intense firefights and strategic
                                            gameplay.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/ronaldo.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Ronaldo</h5>
                                        <p class="card-text">Legendary footballer joins the game as a playable
                                            character.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/messi.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Messi</h5>
                                        <p class="card-text">Iconic footballer brings his skills to the battlefield.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="blogs">
                            <div class="card-group">
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/mirana.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Dota 2</h5>
                                        <p class="card-text">Widely-played MOBA sequel by Valve, based on the popular
                                            Warcraft III mod.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/new hero.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">New Hero</h5>
                                        <p class="card-text">Exciting addition to the game.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/omniknight.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Omniknight</h5>
                                        <p class="card-text">Protective melee strength hero.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="newsDetail.html" style="width:100%;">
                                        <img src="assets/images/zeus.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Zeus</h5>
                                        <p class="card-text">Mighty ranged intelligence hero.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev"
                        style="color: black;">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>

</body>

</html>