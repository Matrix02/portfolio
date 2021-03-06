<?php 
    if(isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $service = $_POST['services'];
        $message = $_POST['subject'];
        mail("mustafa.louarat@gmail.com", "From: $email", "$name wants to talk about $service and said: $message");
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mostafa LOUARAT</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="menu-toggler">
            <div class="bar half start"></div>
            <div class="bar"></div>
            <div class="bar half end"></div>
        </div>
        <nav class="top-nav">
            <ul class="nav-list">
                <li>
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="#about" class="nav-link">About</a>
                </li>
                <!-- <li>
                    <a href="#services" class="nav-link">Services</a>
                </li> -->
                <li>
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                </li>
                <li>
                    <a href="#experience" class="nav-link">Education</a>
                </li>
                <li>
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="landing-text">
            <h1>Mostafa Louarat</h1>
            <h6>UI | UX desinger and web developer</h6>
        </div>
    </header>
    <section class="about" id="about">
        <div class="container">
            <div class="profile-img" data-aos="fade-right" data-aos-delay="200">
                <img src="images/profile.jpeg" alt="">
            </div>
            <div class="about-details" data-aos="fade-left" data-aos-delay="400">
                <div class="about-heading">
                    <h1>About</h1>
                    <h6>Myself</h6>
                </div>
                <p> 
                    Hello there everyone, I'm Mostafa LOUARAT, a Moroccan front-end developer, passionate about anything Tech-related
                    below you'll find some of my works that will be updated frequently.<br>
                    
                </p>
                <div class="social-media">
                        <ul class="nav-list">
                            <li>
                                <a href="https://www.facebook.com/Mostafa.Louarat" class="icon-link">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/LouaratMostafa" class="icon-link">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/mostafa-louarat-210509151/" class="icon-link">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </section>

    <!-- <section class="services" id="services">
        <div class="container">
            <div class="section-heading">
                <h1>Services</h1>
                <h6>what I can do for you</h6>
            </div>
        <div class="my-skills">
            <div class="skill">
                <div class="icon-container">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h1>web design</h1>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, incidunt corporis a velit sapiente sequi esse. Ameossimus numquam ea fugit aspernatur
                </p>

                <div class="skill">
                    <div class="icon-container">
                        <i class="fas fa-code"></i>
                    </div>
                    <h1>web design</h1>
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, incidunt corporis a velit sapiente sequi esse. Ametssimus numquam ea fugit aspernatur
                    </p>

                    <div class="skill">
                            <div class="icon-container">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h1>product Strategy</h1>
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, incidunt corporis a velit sapiente sequi esse. 
                            </p>


            </div>
        </div>
        </div>
    </section> -->

    <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-heading">
                    <h1>Portfolio</h1>
                    <h6>View some of my recent work</h6>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="200">
                        <img src="images/portitem1.jpeg" alt="">
                    </div>
                        <div class="portfolio-description" data-aos="fade-left" data-aos-delay="400">
                            <h6>Simulation Game</h6>
                            <h1>InsurFAQ</h1>
                            <p> <strong>InsurFAQ</strong>  is a simulation game that traines newbie isurance agents to refine and sharpen their skills, it was made with Renpy game engine using python this project may be a bit far away from web development. However, the fun and learning that was aquired while building it was all worth it, the moral of that: I am opeen to projects outside of my expertise :) </p>
                            <a href="" class="cta">view details</a>
                        </div>
                </div>
                <div class="portfolio-item">
                        <div class="portfolio-description" data-aos="fade-right" data-aos-delay="200">
                                <h6>Web Development & Web Design</h6>
                                <h1>Front-end development</h1>
                                <p>
                                    <strong>Randonnéé</strong> I combined my skills in photoshop designing with my coding skills to build it up.
                                </p>
                                <a href="" class="cta">view details</a>
                            </div>
                        <div class="portfolio-img" data-aos="fade-left" data-aos-delay="400">
                            <img src="images/portitem2.jpeg" alt=""> 
                        </div>
                            
                    </div>
                    <div class="portfolio-item">
                            <div class="portfolio-img has-margin-right" data-aos="fade-down" data-aos-delay="333">
                                <img src="images/portitem3.jpeg" alt="">
                            </div>
                                <div class="portfolio-description has-margin-right" data-aos="fade-up" data-aos-delay="444">
                                    <h6>Web Developmen</h6>
                                    <h1>Front-end development</h1>
                                    <p>
                                        A resturant website recently built using frontend technologies (Html, Css3 and Javascript). 
                                    </p>
                                    <a href="" class="cta">view details</a>
                                </div>
                        </div>
            </div>
    </section>

    <section class="experience" id="experience">
            <div class="container">
                <div class="section-heading">
                    <h1>Education</h1>
                    <h6>Past and Current educatuin</h6>
                </div>
                <div class="timeline" data-aos="fade-down" data-aos-delay="300">
                    <ul>
                        <li class="date" data-date="2018 - 2020" data-aos="fade-right" data-aos-delay="300">
                            <h1>Youcode - web development</h1>
                            <!-- <p>Two Acadimic years in web development industry
                            </p> -->
                        </li>

                        <li class="date" data-date="2014 - 2017" data-aos="zoom-in" data-aos-delay="500">
                                <h1>BA in English litreature</h1>
                                <!-- <p>
                                    Three years studying Englis
                                </p> -->
                            </li>

                            <!-- <li class="date" data-date="1995 - present" data-aos="zoom-out" data-aos-delay="700">
                                    <h1>youtube</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit itaque iste, exercitationem
                                     a inventore omnis explicabo consectetur ex optio reprehenderit, officiis architecto laborum?.
                                    </p>
                                </li> -->
                    </ul>
                </div>
            </div>
    </section>

    <section class="contact" id="contact">
            <div class="container">
                <div class="section-heading">
                    <h1>Contact</h1>
                    <h6>let's work together</h6>
                </div>
                <form method="post" data-aos="fade-up" data-aos-delay="300">
                    <label for="name">name:</label>
                    <input type="text" id="name" name="name" placeholder="enter your name..." required>
                    <label for="name">Email:</label>
                    <input type="email" id="email" name="email" placeholder="enter your email..." required>
                    <label for="service">Services:</label>
                    <select name="services" id="service">
                        <option value="Web Design">Web Design</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Web Design/Development">Web Design/Development</option>
                    </select>
                    <label for="subject">Subject:</label>
                    <textarea name="subject" id="subject" cols="10" rows="10"></textarea>
                    <input type="submit" value="submit" name="send">

                </form>
            </div>
    </section>

    <footer class="copyright">
        <div class="up" id="up">
            <i class="fas fa-chevron-up"></i>
        </div>
        <p>&copy; 2019 Mostafa LOUARAT</p>
    </footer>




    <script>
        
    window.onload = () => {
       let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
       bannerNode.parentNode.removeChild(bannerNode);
}

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="main.js"></script>
</body>
</html>