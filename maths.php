<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <style>
        .big {
            font-family: 'Pacifico', cursive;
            font-size: 30px;
            padding: 10px 315px;
            color: white;
        }

        .big a {
            color: white;
            text-decoration: underline;
        }
    </style>

    <title>Educational Website</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo"><a href="./index.html"><img src="./folder/img9.jpg" alt="logo can't be loaded"></a></div>
        <ul class="nav-list">
            <li>
                <a href="./home.html">Home</a>
            </li>
            <li>
                <a href="physics.php">Physics</a>
            </li>
            <li>
                <a href="chem.php">Chemistry</a>
            </li>
            <li>
                <a href="maths.php">Maths</a>
            </li>
            <li>
                <a href="./chat app/index.php">Chat</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
            <li>
                <a href="#"> <?php echo "It's " . $_SESSION['username'] ?></a>
            </li>
        </ul>
    </nav>

    <section class="first-section">
        <div class="box-main">
            <div class="firsthalf">
                <p class="big"><a href="https://byjus.com/maths/algebra/" target="_blank">Algebra</a></p>
                <p class="big"><a href="https://byjus.com/maths/calculus/" target="_blank">Calculus</a></p>
                <p class="big"><a href="https://byjus.com/maths/trigonometry/" target="_blank">Trigonometry</a></p>
                <p class="big"><a href="https://byjus.com/maths/probability-and-statistics/" target="_blank">Probability and Statistics</a></p>
                <p class="big"><a href="https://byjus.com/maths/permutation-and-combination/" target=" _blank">Permutation and Combination</a></p>
            </div>
        </div>
    </section>
    <script src="./app.js"></script>
</body>

</html>