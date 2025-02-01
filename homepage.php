<?php
// PHP code at the top for session or other logic
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Now you can write the HTML part
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaysenHighConnect</title>
    <link rel="stylesheet" href="./homepage.css">
    
    
</head>
<body>
    <div class="main">
        
        <div class="navbar">
            <div class="icon">
                <img src="./assets/logo.jpg" alt="TaySenHi Logo" class="logo-image">
                <h2 class="logo">TaySenHi</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="./history.php">HISTORY</a></li> 
                    <li><a href="./studenthub.php">STUDENT HUB</a></li> 
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" placeholder="Search topics  ">
                <button class="btn">Search</button>
            </div>
        </div> 

        
        <div class="content">
            <h1>TAYSAN <br><span>SENIOR HIGH SCHOOL</span></h1>
            <p class="par">
                Taysan Senior High School fosters an atmosphere of learning and growth.
            <br>
            Join us as we create a brighter future through knowledge and innovation.
            </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
