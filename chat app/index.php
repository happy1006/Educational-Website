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
    <!-- <link rel="stylesheet" href="css/style1.css"> -->
    <style>
        /* .big {
            font-family: 'Pacifico', cursive;
            font-size: 30px;
            padding: 10px 315px;
            color: white;
        }

        .big a {
            color: white;
            text-decoration: underline;
        } */
    </style>

    <title>Educational Website</title>

    <script defer src="http://localhost:8000/socket.io/socket.io.js"></script>
    <script defer src="js/client.js"></script>

</head>

<body>
    <nav class="navbar">
        <div class="logo"><a href="./index.html"><img src="../folder/img9.jpg" alt="logo can't be loaded"></a></div>
        <ul class="nav-list">
            <li>
                <a href="../home.html">Home</a>
            </li>
            <li>
                <a href="../physics.php">Physics</a>
            </li>
            <li>
                <a href="../chem.php">Chemistry</a>
            </li>
            <li>
                <a href="../maths.php">Maths</a>
            </li>
            <li>
                <a href="../chat app/index.php">Chat</a>
            </li>
            <li>
                <a href="../logout.php">Logout</a>
            </li>
            <li>
                <a href="#"> <?php echo "It's " . $_SESSION['username'] ?></a>
            </li>
        </ul>
    </nav>
    
    <div class="container"></div>
    <div class="send">
        <form action="#" id="send-container">
            <input type="text" name="messageInp" id="messageInp" placeholder="Enter your message">
            <button class="btn" type="submit">Send</button>
        </form>
    </div>

    <!-- <section class="first-section">
        <div class="box-main">
            <img class="logo1" src="chat.png" alt="">
            <div class="container"></div>
            <div class="send">
                <form action="#" id="send-container">
                    <input type="text" name="messageInp" id="messageInp">
                    <button class="btn" type="submit">Send</button>
                </form>
            </div>
        </div>
    </section> -->



    <script src="./app.js"></script>
</body>

</html>