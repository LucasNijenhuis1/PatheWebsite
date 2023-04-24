<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathe</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/1630483488.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="LeftHeaderBox">
            <img class="logo" src="img/PatheLogoSmall.png" alt="">
            <ul class="NavBar">
                <li><a href="index.php">Home</a></li>
                <li><a href="films.html">Films</a></li>
            </ul>
        </div>
        
        <div class="RightHeaderBox">
            <a href="login.php">Mijn Pathe</a>
            <i class="fa-solid fa-user"></i>
        </div>
    </header>

    <main>
        <div class="LogIncontainer">
            <form name="inlog" action="inlog2.php" method="POST">
                <p>voer username in <input type="text" id="username" name="username"></p>
                <p>voer wachtwoord in <input type="password" id="password" name="password"></p>
                <p><input type="submit" id="verstuur" name="verstuur" value="verzend"></p>
            </form>

            <a href="login3.php">login a acc</a>

    </main>

    <footer>
    <div class="footer">
            <div class="row">
                <a href="https://github.com/LucasNijenhuis1"><i class="fa fa-github"></i></a>
                <a href="https://www.instagram.com/lucasnijenhuis2/"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <!-- /*<a href="#"><i class="fa fa-twitter"></i></a> -->
            </div>
        
        <div class="row">
            <ul>
                <li><a href="/index.html">Home</a></li>
                <li><a href="/myproj.html">My projects</a></li>
                <li><a href="/about.html">About me</a></li>
                <li><a href="/contact.html">Contact</a></li>
            </ul>
        </div>
        
            <div class="row">
                Copyright © Lucas Nijenhuis 2023
            </div>
        </div>
    </footer>
</body>
</html>