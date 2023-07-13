<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1.300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--hero section start-->

    <div class="hero">
        <nav>
            <h2 class="logo">Portfo<span>lio</span></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">Contact Me</a></li>
            </ul>
            <a href="CV Amiran Gabelaia - WD.pdf" target="_blank" class="btn">Download CV</a>
        </nav>

        <div class="content">
            <h4>Hello, my name is</h4>
            <h1>Amiran <span> <?php echo "Gabelaia";?></span></h1>
            <h3>I am a web Developer.</h3>
            <div class="newsletter">
                <form>
                    <a href="mailto:amirani.gabelaia@gmail.com" class="btn btn--contact">Hire me</a>
                </form>
            </div>
        </div>
    </div>
    <!--About section start-->
    <section class="about">
        <div class="main">
            <img src="Main image.png">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Developer <span>& Designer</span></h5>
                <P>I am a beginner web developer, but still I can provide clean code and pixel perfect design. I also make websites on WordPress platform. A responsive design makes your website accessible to all users, regardless of their device.</P>
                
                <a href="https://www.linkedin.com/in/amiran-gabelaia/" target="_blank" class="linkedin">Let's Talk</a>
            </div>
        </div>
    </section>

        <!--service section start-->

    <div class="service">
        <div class="title">
        <h2>My Services</h2>
        </div>

        <div class="box">
            <div class="card">
                <i class="fa-solid fa-bars"></i>
                <h5>WordPress</h5>
                <div class="pra">
                    <P> If you need user-Friendly, versatile, customizable and SEO-Friendly website, you should try WordPress </P>
                    <br>
                    <P style="text-align: center;">
                        <a class="button" href="http://amirangabelaia.infinityfreeapp.com/?i=2" target="_blank">Result</a>
                    </P>
                </div>
            </div>

                <div class="card">
                    <i class="fa-solid fa-user"></i>
                    <h5>Web Development</h5>
                    <div class="pra">
                        <P>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</P>
    
                        <P style="text-align: center;">
                            <a class="button" href="https://github.com/AmiranGabelaia" target="_blank">Github</a>
                        </P>
                    </div>
                </div>

                    
        </div>
    </div>

        <!--contact Me-->

    <div class="contact-me">
        <p>Here you can read my motivational letter</p>
        <a class="button-two" href="motivational letter.pdf" target="_blank" >Why you should Hire Me ? </a>    
    </div>

<!--Footer start-->

    <footer>
        <p>Amiran Gabelaia</p>
        <p>For more HTML, CSS, and Beautiful Designes - please click on the link below: </p>
        <div class="social">
            <a href="https://www.linkedin.com/in/amiran-gabelaia/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.facebook.com/amiko.gabelaia" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="mailto:amirani.gabelaia@gmail.com" target="_blank"><i class="fa-regular fa-envelope"></i></a>
        </div>
        <p class="end">CopyRight By Amiran Gabelaia</p>
    </footer>

</body>
</html>

