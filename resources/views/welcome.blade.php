<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume</title>
        <link rel="icon" type="image/x-icon" src="{{ asset('img/fav.ic') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Ralph Lorence D. Arriola</span>
                <span class="d-none d-lg-block">
    <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/profile.png') }}" alt="..." />
</span>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{$info->name}}
                        <span class="text-primary">Arriola</span>
                    </h1>
                    <div class="subheading mb-5">
                        {{$info->address}}
                        <a href="mailto:rappyarriola@gmail.com">rappyarriola@gmail.com</a>
                    </div>
                    <p class="lead mb-5">{{$info->about}}</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://github.com/Rappy101"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.instagram.com/_rxppy/"><i class="fab fa-instagram"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/Boohysteria"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Beginner Web Developer</h3>
                            <div class="subheading mb-3">{{$info->experience}}</div>
                            <p>A robust POS system for Mistic Gadgets Accessories that caters Trending Gadgets and More.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Last Year - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Simple Python Automation Using Pyautogui</h3>
                            <div class="subheading mb-3">Pokemon Deluge Auto Clicker And Image Recognition</div>
                            <p>Simple Image finder And Image Clicker Using Pyautogui.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Last Year - Present</span></div>
                    </div>
 
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">STI College of Baliuag</h3>
                            <div class="subheading mb-3">Senior High</div>
                            <div>Information Technology</div>
            
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2018 - April 2020</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Baliuag Polytechnic College</h3>
                            <div class="subheading mb-3">College</div>
                            <p>Bachelor of Science in Information Technology</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"> Present</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-java"></i></li>
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>

                    </ul>
    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a Programmer, I enjoy most of my time Playing Games. I also Love to ride my bike everytime I have time</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
