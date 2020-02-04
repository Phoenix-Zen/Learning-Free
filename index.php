<?php
$account = false


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/nav/style.css" media="(max-width: 900px)">
    <link rel="stylesheet" href="./css/nav/lap.css" media="(min-width: 900px)">
    <script src="./js/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/86ab7a4899.js" crossorigin="anonymous"></script>
    <script async="async" src="./js/loader.js"></script>

    <?php
    if(!$account){
        echo '
        <script async="async" src="./includes/login/login.js"></script>
        ';
    }?>
</head>
<body>
    <nav>
        <div id="nav_logo">
            <img src="./img/logo.png">
        </div>
        <div id="nav_bar">
            <img src="./img/icons/bars.svg">
        </div>
        <div id="nav_slide">
            <div id="nav_profil">
                <?php
                include "./includes/nav_profil.php";
                ?>
            </div>
            <div id="nav_link">
                <ul>
                    <li>
                        <a href="#lesson">Home</a>
                    </li>
                    <li>
                        <a href="#post">Posts</a>
                    </li>
                    <li>
                        <a href="#search">Rechercher</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="login"></div>
    <div id="sign_up"></div>

    <div id="container"></div>


    <script async>
        $(document).ready(function () {
            $("#nav_slide").hide();
            $("#nav_bar").click(function () {
                $("#nav_slide").slideToggle();
            });
        });
    </script>
</body>
</html>