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
    <title>Strands - TaysenHighConnect</title>
    <link rel="stylesheet" href="./history.css"> <!-- Link to your custom CSS -->
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and Layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        /* Title */
        .heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .heading h2 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }

        /* Grid layout for strands */
        .product-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns */
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }

        /* Box styling for each strand */
        .box {
            background-color: #fff;
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .box h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #333;
        }

        .box p {
            font-size: 14px;
            margin-bottom: 10px;
            color: #666;
        }

        .box img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .orderNow button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .orderNow button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-row {
                grid-template-columns: 1fr 1fr; /* 2 columns on small screens */
            }

            .box {
                width: 100%; /* Full width for boxes on smaller screens */
            }
        }
    </style>
</head>
<body>
    <section class="product" id="product">
        <div class="heading">
            <h2>Our Track & Strand</h2>
        </div>
        <div class="product-row">
            <!-- First Row -->
            <div class="box">
                <div class="img">
                    <img src="./assets/MORE DETAILS/STRANDS/STEM/Stemm LOGO.jpg" alt="STEM">
                </div>
                <div class="product-content">
                    <h3>STEM</h3>
                    <p>SHS students who are inclined toward, or have the aptitude for, Math, Science and Engineering studies can enroll in the Science, Technology, Engineering and Mathematics (STEM) Strand.</p>
                    <div class="orderNow">
                        <a href="./assets/MORE DETAILS/STRANDS/STEM/Read stem.html"><button>Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./assets/MORE DETAILS/STRANDS/HUMMS/humss.jpg" alt="HUMSS">
                </div>
                <div class="product-content">
                    <h3>HUMSS</h3>
                    <p>Humanities and Social Sciences (HUMSS) Strand for learners who want to pursue these fields of study at the university level.</p>
                    <div class="orderNow">
                        <a href="./assets/MORE DETAILS/STRANDS/HUMMS/Read humss.html"><button>Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./assets/MORE DETAILS/STRANDS/ABM/ABMM NEW LOGO.jpg" alt="ABM">
                </div>
                <div class="product-content">
                    <h3>ABM</h3>
                    <p>The ABM Strand is for those who plan to take up business-related courses in higher education or engage in business, entrepreneurship, and other business-related careers.</p>
                    <div class="orderNow">
                        <a href="./assets/MORE DETAILS/STRANDS/ABM/Read abm.html"><button>Read More</button></a>
                    </div>
                </div>
            </div>

            <!-- Second Row -->
            <div class="box">
                <div class="img">
                    <img src="./assets/MORE DETAILS/STRANDS/H.E/h.e logo.jpg" alt="H.E">
                </div>
                <div class="product-content">
                    <h3>H.E</h3>
                    <p>The H.E. strand refers to the Home Economics strand in the K to 12 curriculum in the Philippines. It focuses on practical skills related to home management, food preparation, caregiving, and more.</p>
                    <div class="orderNow">
                        <a href="./assets/MORE DETAILS/STRANDS/H.E/Read tvl.html"><button>Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./assets/MORE DETAILS/STRANDS/SMAW/smaw logoo.jpg" alt="SMAW">
                </div>
                <div class="product-content">
                    <h3>SMAW</h3>
                    <p>Shielded Metal Arc Welding is one of the specialized subjects under the technical-vocational livelihood (TVL) career track. Learn essential welding skills and international standards.</p>
                    <div class="orderNow">
                        <a href="./assets/MORE DETAILS/STRANDS/SMAW/Read smaw.html"><button>Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./assets/MORE DETAILS/STRANDS/AUTO/auto logo.jpg" alt="AUTOMOTIVE">
                </div>
                <div class="product-content">
                    <h3>AUTOMOTIVE</h3>
                    <p>The Automotive Strand focuses on preparing students for careers in the automotive industry. Learn about automotive technology, maintenance, and repair.</p>
                    <div class="orderNow">
                        <a href="./assets/MORE DETAILS/STRANDS/AUTO/Read auto.html"><button>Read More</button></a>
                    </div>
                </div>
            </div>

            <!-- Third Row -->
            <!-- Add additional strand boxes if necessary -->
        </div>
    </section>
</body>
</html>


<section class="clubs" id="clubs">
    <h2>CLUBS</h2> <!-- Title added here -->

    <div class="grid-container">
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/LUMINAIRE/lum.jpg" alt="">
            </div>
            <div class="content">
                <h3>LUMINAIRE</h3>
                <p>Luminaire, a standout Senior High School Journalist at Taysan, is a creative force in the 
                    collaborative media crew. With a keen eye for detail, they capture the essence of school 
                    life through compelling articles and visuals, fostering a sense of community and pride.
                     Luminaire's dedication to journalistic excellence and creative expression makes them an
                      invaluable contributor to Taysan Senior High School's vibrant media landscape.</p>
                      <a href="./assets/ORGANIZATIONS/LUMINAIRE/LuminaireLEARN.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/WINS/wins.jpg" alt="">
            </div>
            <div class="content">
                <h3>WINS CLUB</h3>
                <p>WINS stands for Wash in School and it focuses on promoting 
                    Water Sanitation, and Hygiene practices at Taysan Senior High School. 
                    It encourages students to adopt healthy hygiene habits and maintain 
                    a clean environment by providing education on proper handwashing, 
                    sanitation, and cleanliness. WINS organizes activities and campaigns
                     to spread awareness, making the school a healthier place for learning and growth.</p>
                      <a href="./assets/ORGANIZATIONS/WINS/WinsLearn.html" class="btn">Learn More</a>
            </div>
        </div> 
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/SCULARTO/scularto.jpg" alt="">
            </div>
            <div class="content">
                <h3>SCulArtO</h3>
                <p>SCULARTO stands for "Sports, Culture, and Arts Organization", 
                    and it’s the main group for all things creative at Taysan Senior High School. 
                    It brings together students who are talented in sports, dancing, singing, and art. 
                    CULARTO shows off the skills of TaysenHi students, whether through performances, 
                    contests, or school events. It’s a organization where students can share their talents, 
                    celebrate culture, and have fun while learning and growing.</p>
                      <a href="./assets/ORGANIZATIONS/SCULARTO/SculartoLearn.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/SAMFIL/Samfil.jpg" alt="">
            </div>
            <div class="content">
                <h3>SamFil</h3>
                <p>Samahan ng mga Mag-aaral sa Filipino o mas kilala sa tawag na SAMFIL
                     ay samahan ng mga estudyanteng may layuning isulong ang paggamit at 
                     pagpapahalaga sa wikang Filipino pati na rin ang mas malalim na 
                     pag-unawa sa kulturang Pilipino. Sa mga gawai't proyektong inilulunsad 
                     ng samahan ay lubos na naipapakita ng mga estudyante ang kanilang galing, 
                     talento at talino sa larangan ng filipino.</p>
                      <a href="./assets/ORGANIZATIONS/SAMFIL/SamfilLearn.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/YAG/Yag.jpg" alt="">
            </div>
            <div class="content">
                <h3>YAG</h3>
                <p>YAG ( Youth Advocacy Program) , is a impactful and active organization
                     at Taysan Senior Highschool that's dedicated to empower students 
                     to speak and stand up for what's right. It's a platform where the
                     voices of every students of TSHS are amplified, and where the students
                     can learn to speak up or advocate the issues that matter to them whether 
                     it's social justice, mental health awareness, importance of every life 
                     or  promoting the positive changes within the school. YAG helps students 
                     find their voice, learn how to speak up, and make a changes in their community. 
                     It's a group where students can grow physically and mentally and make the world 
                     a better place.</p>
                      <a href="./assets/ORGANIZATIONS/YAG/YagLearn.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/ARH/arh.jpg" alt="">
            </div>
            <div class="content">
                <h3>ARH</h3>
                <p>ARH stands for “Adolescent Reproductive Health", 
                    This club is for all about physical, emotional, social, and mental 
                    well-being of young people related to their sexuality and 
                    reproductive system. ARH pursue the awareness of Taysan Senior Highschool Students 
                    towards their own personality especially their sexuality.</p>
                      <a href="./assets/ORGANIZATIONS/ARH/ArhLearn.html" class="btn">Learn More</a>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/YES-O/Yes-O.jpg" alt="">
            </div>
            <div class="content">
                <h3>YES-O</h3>
                <p>YES-O, short for "Youth for Environment in School Organization", 
                    is Taysan Senior High School’s green guardians. Made up of students 
                    who care deeply about nature, YES-O leads the way in protecting 
                    our environment. Whether they are planting trees, organizing clean-ups, 
                    or spreading eco-awareness, YES-O members bring the spirit of sustainability 
                    to TaysenHi. They are on a mission to make the school a greener, 
                    cleaner place while inspiring others to join the movement for a 
                    healthier planet.</p>
                      <a href="./assets/ORGANIZATIONS/YES-O/Yes-OLearn.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/ENGLISH/engclub.jpg" alt="">
            </div>
            <div class="content">
                <h3>ENGLISH CLUB</h3>
                <p>The English Club at Taysan Senior High School 
                    is the go-to organization for students who have a 
                    passion for the English language and literature. 
                    It brings together learners who love reading, writing, 
                    public speaking, and storytelling. The club organizes 
                    activities like spelling bee, quiz bee, reading activities, 
                    and creative writing workshops, giving members a platform to 
                    express themselves and develop their communication skills. 
                    Through fun and engaging events, the English Club helps students 
                    enhance their confidence, teamwork, and appreciation for English, 
                    making it a welcoming space for learning and growth.</p>
                      <a href="./assets/ORGANIZATIONS/ENGLISH/EngLearn.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/MATH/MathClub.jpg" alt="">
            </div>
            <div class="content">
                <h3>AIMS</h3>
                <p>AIMS (Association of Innovative Mathematicians in School), 
                    a club dedicated to fostering a love for mathematics at 
                    Taysan Senior High School. This organization unites students 
                    who are passionate about math, problem-solving, and innovation.</p>
                      <a href="./assets/ORGANIZATIONS/MATH/MathLearn.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/BKD/BKD.jpg" alt="">
            </div>
            <div class="content">
                <h3>BKD</h3>
                <p>"Barkada Kontra Droga," ito ay isang programang naglalayong labanan 
                    ang paglaganap ng ilegal na droga sa mga paaralan at komunidad.  
                    Ang pangunahing layunin nito ay turuan ang mga mag-aaral tungkol sa mga 
                    panganib ng paggamit ng droga at hikayatin silang tumanggi sa mga alok na ito.</p>
                      <a href="./assets/ORGANIZATIONS/BKD/BkdLearn.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/SSLG/sslg logo.jpg" alt="">
            </div>
            <div class="content">
                <h3>SSLG</h3>
                <p>SSLG at TSHS is not your typical student government – they go beyond school boundaries. 
                    These student leaders are dedicated to fostering a positive school culture and ensuring 
                    the well-being of students in and out of the classroom. From organizing events to advocating
                     for student concerns, SSLG actively contributes to a supportive and inclusive environment. 
                     Their commitment extends beyond the school, aiming to create a holistic and empowering
                      experience for every TSHS student.</p>
                      <a href="./assets/ORGANIZATIONS/SSLG/SSLG.html" class="btn">Learn More</a>
            </div>
        </div>
        <div class="grid-item">
            <div class="img">
                <img src="./assets/ORGANIZATIONS/TCMC/crew.jpg" alt="">
            </div>
            <div class="content">
                <h3>TCMC</h3>
                <p>TCMC (Taysan Senior High School Collaborative Media Crew) is a student-driven team passionately 
                    documenting all aspects of life within and outside our school. From academic achievements to
                     cultural events, we capture the essence of Taysan Senior High School, creating a visual
                      narrative that preserves memories and celebrates the diverse talents of our student community.</p>
                      <a href="./assets/ORGANIZATIONS/TCMC/TCMC.html" class="btn">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- clubs section ends here -->
