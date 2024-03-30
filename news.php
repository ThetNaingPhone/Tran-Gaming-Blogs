<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link href="main.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #15141d;
        }

        /*
        .nav1 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
            background-color: rgb(23, 23, 23);
            height: 50px;
            position: sticky;
        }

        .nav1 .nav .nav-item {
            width: auto;
            margin-left: 10px;
            display: flex;
        }

        .nav1 .nav .nav-item .nav-link {
            color: rgb(212, 212, 212);
            font-family: 'Roboto', sans-serif;;
        }

        .nav1 .nav .nav-item i {
            margin-right: 10px;
        }

        .nav1 .signout{
            padding-right: 20px;
            color: white;
        } */

        .bg-transparent-blue {
            background-color: rgba(27, 27, 27, 0.5);
            /* Adjust the alpha value as needed for transparency */
        }

        .bg-transparent-blue .card-footer {
            padding: 0.5rem;
            /* Adjust as needed */
        }

        .contactOnSocial i {
            color: azure;
        }

        .hover-shadow {
            transition: transform 0.4s ease-in-out;
        }

        .hover-shadow:hover {
            transform: scale(1.2);
        }

        .card {
            font-family: 'Roboto', sans-serif;
            border: none;
            margin-top: 10px;
            position: relative;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            overflow: hidden;
            /* Add this line */
        }

        .card-group {
            width: 100%;
        }

        .card-group .card {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-right: 10px;
            align-items: center;
            background-color: #201e26;
            color: white;

        }
    </style>
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
                                <a class="nav-link" href="Esport Blogs_home.php  ">
                                    <i class="bi bi-house-door"></i> Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="watch.html">
                                    <i class="bi bi-collection-play"></i> Watch
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="news.php">
                                    <i class="bi bi-globe"></i> News
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactUs.html">
                                    <i class="bi bi-person-lines-fill"></i> Contact
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
        <div style="padding:0px 70px" id="news" class="content">
            <div class="row justify-content-center" style="">
                <!-- First column for hot news -->
                <div class="col">
                    <?php
                    // Database connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "blog";
    
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
    
                    // Query to fetch hot news data from the database
                    $sql = "SELECT title, content, img FROM News WHERE description='hot'";
                    $result = $conn->query($sql);
    
                    // Output hot news cards
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $title = $row["title"];
                            $content = $row["content"];
                            $img = $row["img"];
                            echo '<a href="newsDetail.html">';
                            echo '<div class="card hot">';
                            echo '<img src="' . $img . '" class="card-img hover-shadow" alt="News Image">';
                            echo '<div class="card-footer position-absolute bottom-0 w-100 text-center bg-transparent-blue">';
                            echo '<small class="text-white">Last updated 3 mins ago</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</a>';
                        }
                    }
    
                    $conn->close();
                    ?>
                </div>

                <!-- Second column for regular news -->
                <div class="col">
                    <div class="row row-cols-2 g-1">
                        <?php
                    // Database connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
    
                    // Query to fetch regular news data from the database
                    $sql = "SELECT title, content, img FROM News WHERE description != 'hot' LIMIT 4";
                    $result = $conn->query($sql);
    
                    // Output regular news cards
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $title = $row["title"];
                            $content = $row["content"];
                            $img = $row["img"];
    
                            echo '<div class="col">';
                            echo '<a href="newsDetail.html">';
                            echo '<div class="card position-relative">';
                            echo '<img src="' . $img . '" class="card-img hover-shadow" alt="News Image">';     
                            echo '<div class="card-footer position-absolute bottom-0 w-100 text-center bg-transparent-blue">';
                            echo '<small class="text-white">Last updated 3 mins ago</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                        }
                    }
    
                    $conn->close();
                    ?>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <a href="newsDetail.html" style="width:100%;">
                        <img src="assets/images/mirana.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Dota 2</h5>
                        <p class="card-text">Widely-played MOBA sequel by Valve, based on the popular Warcraft III mod.
                        </p>
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
                <div class="card" style="margin-right:0px">
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
    </div>
    </div>
</body>

</html>