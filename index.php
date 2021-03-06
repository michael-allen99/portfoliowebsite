<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:700|Oswald:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="assets/icons/favicon.png" rel="icon" type="image/x-icon" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Mike Allen Web Development</title>
</head>
<body>

<section class="header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <li style="list-style-type: none;"class="nav-item">
            <div class="container">
                <div class="text-center center-block" >
                    <a href="#contact" id="scroll"><i class="fa fa-envelope-square fa-3x social"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/mike-allen-a4801a140/"><i class="fa fa-linkedin-square fa-3x social"></i></a>
                    <a target="_blank" href="https://github.com/michael-allen99"><i class="fa fa-github-square fa-3x social"></i></a>
                    <a target="_blank" href="https://www.behance.net/michaelallen99"><i class="fa fa-behance-square fa-3x social"></i></a>
                </div>
            </div>
        </li>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#top" id="scroll2" style="color: #3A4454; font-weight: bold;">Mike Allen</a>
            </li>
        </ul>

    </nav>
    <div class="introduction" id="top">
        <div data-aos="fade-right"
             data-aos-delay="50"
             data-aos-duration="600"
             data-aos-easing="ease-in-out">
            <h1 class="col-10 offset-1 col-md-10 offset-md-2">Hi, I'm Mike...</h1>
            <h2 class="col-10 offset-1 col-md-10 offset-md-2">...and I'm a website developer and designer in the south of England</h2>
        </div>
        <div data-aos="fade-right"
        data-aos-delay="50"
        data-aos-duration="600"
        data-aos-easing="ease-in-out">
            <img src="assets/images/face.png" alt="Headshot of Mike Allen in black and white" class="avatar col-lg-8 col-md-8 col-sm-8 col-6 offset-sm-2 offset-3 offset-lg-2 offset-md-2">
        </div>
    </div>

    <?php
    if(isset($_GET['mailsent'])) {
        echo "<p style='margin-top: 20px; margin-bottom: -30px; text-align: center; color: #ff853b'>Thank you for your email. I'll be in touch shortly</p>";
    }
    ?>
    <div class="contact-button">
        <a href="#contact" id="scroll3"><button class="header-btn btn-primary col-8 offset-2 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-2 offset-lg-5">Fancy a chat?</button></a>
    </div>
</section>

<div class="container col-12 offset-0 col-lg-10 offset-lg-1">
    <section class="whatido col-12 offset-0 col-md-10 offset-md-1" data-aos="fade-in"
             data-aos-delay="50"
             data-aos-duration="600"
             data-aos-easing="ease-in-out">
        <div class="sectionheader" id="do">
            <h4>What I do</h4>
        </div>
        <div class="sectioncontent">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="development-tab" data-toggle="tab" href="#development" role="tab" aria-controls="development" aria-selected="true">Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">Design</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="development" role="tabpanel" aria-labelledby="development-tab">
                    <div class="tabsection2">
                        <h5>HTML & CSS</h5>

                        <p>I am proficient within HTML5 and CSS3 with experience developing with Bootstrap and Sass.</p>
                    </div>
                    <div class="tabsection2">
                        <h5>JavaScript</h5>
                        <p>I have some experience developing features using vanilla JavaScript
                            whilst currently looking into JavaScript libraries such as jQuery and
                            Vue.js</p>
                    </div>
                    <div class="tabsection2">
                        <h5>PHP & SQL</h5>
                        <p>While I love developing for front-end, I have recently gained a huge
                            interest in taking on back-end environments using PHP and SQL to
                            create a more dynamic experience within a website.</p>
                    </div>
                    <div class="tabsection2">
                        <h5>GitHub</h5>
                        <div>
                            <p>I’m always taking on new challenges and learning new ways to
                                become a better developer. Checkout my GitHub page to see what
                                projects I’m working on at the moment.</p>
                            <div class="contact-button">
                                <a target="_blank" href="https://github.com/michael-allen99"><button class="tab-btn btn-primary-tab col-8 offset-0 col-lg-4 col-md-3">Take me there</button></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="tabsection2">
                        <h5>Website UI and UX</h5>
                        <p>I have experience creating user interfaces and experiences for
                            websites and applications using applications such as Sketch, Adobe XD and Figma. Interactive prototyping is a great tool for
                            testing out the UX within a website, and by using these tools mixed with inVision and Marvel App I can achieve this.</p>
                    </div>
                    <div class="tabsection2">
                        <h5>Logos and Graphics</h5>
                        <p>Using Adobe Illustrator I have previously created logos and graphics to be used within user interfaces I create as well as for clients.</p>
                    </div>
                    <div class="tabsection2">
                        <h5>Behance</h5>
                        <div>
                            <p>I’m keen to develop my design skills further, and all my work gets
                                posted onto my Behance page. Feel free to take a look and leave
                                me some feedback.</p>
                            <div class="contact-button">
                                <a target="_blank" href="https://www.behance.net/michaelallen99"><button class="tab-btn btn-primary-tab col-8 offset-0 col-lg-4 col-md-3">Take me there</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="whatido col-12 offset-0 col-md-10 offset-md-1" data-aos="fade-in"
             data-aos-delay="50"
             data-aos-duration="600"
             data-aos-easing="ease-in-out">
        <div class="sectionheader" id="done">
            <h4>What I've done</h4>
        </div>
        <div class="sectioncontent">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="development2-tab" data-toggle="tab" href="#development2" role="tab" aria-controls="development" aria-selected="true">Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="design2-tab" data-toggle="tab" href="#design2" role="tab" aria-controls="design" aria-selected="false">Design</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent2">
                <div class="tab-pane fade show active" id="development2" role="tabpanel" aria-labelledby="development-tab">
                    <div class="tabsection">
                            <img class="tabimage col-12" src="assets/images/nightoutproject.png" alt="Image of a Mac with FreeFlix design">
                        <div class="minusmargin">
                            <h5>Night Out Website</h5>
                            <p>Night Out is a project created within my second year of
                                study at university. Created using HTML, CSS, PHP and JavaScript
                                it allows users to search, review and post venues for a night out in
                                Southampton. For this assessment, I received a grade of 68% (2:1)</p>
                            <div class="contact-button">
                                <a target="_blank" href="https://github.com/michael-allen99/NightOutProject-University"><button class="tab-btn btn-primary-tab col-8 offset-0 col-lg-4 col-md-3">Source Code</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="tabsection">
                        <img class="tabimage col-12" src="assets/images/portfolioProject.png" alt="Image of a Mac with FreeFlix design">
                        <div class="minusmargin">
                            <h5>Portfolio Project</h5>
                            <p>For another assignment within my second year of study at university we
                                were tasked with creating a website using HTML, CSS and
                                JavaScript with a focus of taking on a clear workflow with coding
                                styles and using GitHub. For this assessment, I received a grade of
                                74% (1st)</p>
                            <div class="contact-button">
                                <a target="_blank" href="https://github.com/michael-allen99/PortfolioProject-University"><button class="tab-btn btn-primary-tab col-8 offset-0 col-lg-4 col-md-3">Source Code</button></a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="design2" role="tabpanel" aria-labelledby="design-tab">
                    <div class="tabsection">
                        <img class="tabimage col-12" src="assets/images/FreeFlixProject.png" alt="Image of a Mac with FreeFlix design">
                        <div class="minusmargin">
                            <h5>FreeFlix Interactive Design</h5>
                            <p>Within my second year of study at university, an assessment
                                brief led me to design a new film streaming service for both
                                SmartTV and Mobile devices. These designs were interactive and
                                the process from start to finish can be read on Medium.</p>
                            <div class="contact-button">
                                <a target="_blank" href="https://medium.com/@3allem72/interactive-smart-tv-and-mobile-prototype-for-a-new-film-streaming-service-freeflix-674e2d2ba231"><button class="tab-btn btn-primary-tab col-8 offset-0 col-lg-4 col-md-3">Medium Post</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="tabsection">
                        <img class="tabimage col-12" src="assets/images/qotsProject.png" alt="Image of a Mac with FreeFlix design">
                        <div class="minusmargin">
                            <h5>Queens of the South Logo</h5>
                            <p>A client came to me needing a logo for their new online magazine
                                they were launching for their third year project “Queens of the South”, which featured drag queens and gender identity in and around the south of England. Check out the logo in full quality on
                                my Behance page.</p>
                            <div class="contact-button">
                                <a target="_blank" href="https://www.behance.net/gallery/62845527/Queens-of-the-South-Logo"><button class="tab-btn btn-primary-tab col-8 offset-0 col-lg-4 col-md-3">Behance</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="tabsection">
                        <img class="tabimage col-12" src="assets/images/logochallengeProject.png" alt="Image of a Mac with FreeFlix design">
                        <div class="minusmargin">
                            <h5>Daily Logo Challenge</h5>
                            <p>Throughout 2018 I decided to undertake the daily logo challenge. Although I never completed all 50 logo briefs, I did get a large portion
                                completed and this process allowed me to learn lots of new techniques within Adobe Illustrator. There's a clear improvement of my logo design work
                                shown within my Behance profile as the days progressed.</p>
                            <div class="contact-button">
                                <a target="_blank" href="https://www.behance.net/michaelallen99"><button class="tab-btn btn-primary-tab col-8 offset-0 col-lg-4 col-md-3">Behance</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="whatido col-12 offset-0 col-md-10 offset-md-1"  data-aos="fade-in"
         data-aos-delay="50"
         data-aos-duration="600"
         data-aos-easing="ease-in-out">
        <div class="sectionheader" id="why">
            <h4>Why I do it</h4>
        </div>
        <div class="sectioncontent">
            <p>When I was 13 years old, I was obsessed with games and websites
                and how to make them. I’d watch countless videos about how to create your own games, most of which left me completely bewildered and feeling hopeless. Come age 15, I started a GCSE in Computer Science, before going on to study Computer Science and Web Design at A-Level. My love for code continued to grow, and I took a keen interest within coding websites over gaming. That brings me to now, entering my third year at Solent University studying a BSc in Web Design and Development. What’s next?
            </p>
        </div>
    </div>

</div>

<section class="contact">
    <div id="contact" class="whatido col-12 offset-0 col-md-8 offset-md-2" data-aos="fade-right"
         data-aos-delay="50"
         data-aos-duration="600"
         data-aos-easing="ease-in-out">
        <div class="sectionheader2">
            <h4 class="contactheader">Let's talk</h4>
        </div>
        <div class="sectioncontent2">
            <h5 class="contactheader">I’m always on the look-out for new work experience and projects. If you’d like to work with me, let’s talk.</h5>
        </div>
        <div class="contactform">
            <div>
                <form action="contactform.php" method="post" class="col-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputname" name="inputname" placeholder="Your name" style="border: 2px solid #B5E78E; border-radius: 10px;">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="Your email" style="border: 2px solid #B5E78E; border-radius: 10px; margin-bottom: 15px;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputsubject" name="inputsubject" placeholder="Subject" style="border: 2px solid #B5E78E; border-radius: 10px; margin-bottom: 15px;">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" rows="10" class="col-12" placeholder="I'm all ears!"></textarea>
                    </div>
                    <button type="submit" class="btn btn-contact col-12">Send E-Mail</button>
                </form>
            </div>
            <div>
                <img src="assets/images/face.png" alt="Headshot of Mike Allen in black and white" class="desktop-only avatar col-lg-12 col-md-12 offset-lg-0 offset-md-0">
            </div>
        </div>

    </div>
</section>

<div class="footer-container">
    <div class="col-10 offset-1 mt-md-0 mt-3">

        <!-- Content -->
        <h3 class="text-uppercase font-weight-bold text-center">Contact:</h3>
        <h5 class="text-center">hello@ohitsmike.com <br> 07951969615<br><p class="text-center voicemail">Please leave a voicemail</p></h5>

    </div>
    <div class="text-center center-block">
        <a target="_blank" href="https://www.linkedin.com/in/mike-allen-a4801a140/"><i class="fa fa-linkedin-square fa-3x social"></i></a>
        <a target="_blank" href="https://github.com/michael-allen99"><i class="fa fa-github-square fa-3x social"></i></a>
        <a target="_blank" href="https://www.behance.net/michaelallen99"><i class="fa fa-behance-square fa-3x social"></i></a>
        <a href="mailto:hello@ohitsmike.com"><i class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
    <p class="copyright text-center">&copy 2019 Copyright: Mike Allen </p>
</div>
<!--Bootstrap Dependencies-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Smooth Scrolling-->
<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("#scroll").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 1000, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("#scroll2").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 1000, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("#scroll3").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 1000, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>