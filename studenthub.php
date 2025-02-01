<?php
// PHP session handling for user verification
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect if user is not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenthub - TaysenHighConnect</title> 
    <link rel="stylesheet" href="./studenthub.css"> <!-- Link to your custom CSS -->
    <style>
        /* Container for the entire blog section */
        .blogs {
            padding: 50px 0;
            background-color: #f4f4f4;
        }

        .blogs-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 equal columns */
            gap: 30px;
            padding: 0 20px;
        }

        .box {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }

        .box h3 {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            margin: 0;
            font-size: 24px;
        }

        .img img {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 15px;
        }

        .content p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #45a049;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .blogs-container {
                grid-template-columns: 1fr; /* Stack the columns on small screens */
            }
        }
    </style>
</head>
<body>
    <!-- blogs section start here -->
    <section class="blogs" id="blogs">
        <div class="blogs-container">
            <div class="box">
                <h3>Announcement</h3>
                <div class="img">
                    <img src="./assets/attention.jpg" alt="Announcement">
                </div>
                <div class="content">
                    <p>An announcement is a public or formal notice that informs people about something important or of interest...</p>
                    <a href="./assets/MORE DETAILS/ANNOUNCEMENTS/announcement.html" class="btn">Learn More</a>
                </div>
            </div>

            <div class="box">
                <h3>Class Schedule</h3>
                <div class="img">
                    <img src="./assets/newsched.jpg" alt="Class Schedule">
                </div>
                <div class="content">
                    <p>A class schedule is like a daily map for your studies. It tells you when and where your classes are...</p>
                    <a href="schedule.html" class="btn">Learn More</a>
                </div>
            </div>

            <div class="box">
                <h3>School Calendar</h3>
                <div class="img">
                    <img src="./assets/onecalendar.jpg" alt="School Calendar">
                </div>
                <div class="content">
                    <p>A school calendar is like a roadmap for the school year. It shows when classes start and end, important events...</p>
                    <a href="./assets/MORE DETAILS/CALENDAR/KALINDAR.html" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- blogs section ends here -->
</body>
</html>
