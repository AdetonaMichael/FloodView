<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <!-- SEO Meta Tags -->
        <meta name="description" content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
        <meta name="author" content="Your name" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Flood View</title>

        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" /> --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="css/swiper.css" rel="stylesheet" />
        {{-- <link href="css/magnific-popup.css" rel="stylesheet" /> --}}
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <!-- Navigation -->
        <nav class="navbar fixed-top">
            <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

                <!-- Image Logo -->
                <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="index.html">
                   <p class="font-bold text-2xl uppercase">Flood View</p>
                </a>

                <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        <li>
                            <a class="nav-link page-scroll active" href="#header">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="/reports">Reports</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#details">Details</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#download">Download</a>
                        </li>
                    </ul>
                    <span class="block lg:ml-3.5">
                        <a class="no-underline" href="#your-link">
                            <i class="fab fa-apple text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200 mr-1.5"></i>
                        </a>
                        <a class="no-underline" href="#your-link">
                            <i class="fab fa-android text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200"></i>
                        </a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        <!-- Header -->
        {{-- <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                    <h1 class="h1-large mb-5">Team management mobile application</h1>
                    <p class="p-large mb-8">Start getting things done together with your team based on Pavo's revolutionary team management features</p>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                    <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
                </div>
                <div class="xl:text-right">
                    <img class="inline" src="images/header-smartphone.png" alt="alternative" />
                </div>
            </div> <!-- end of container -->
        </header> <!-- end of header --> --}}
        <!-- end of header -->
        <header class="masthead">
            <div id="hero-caption" class="row text-center">

                    <h1 class="font-bold text-gray-300 mb-20">Get Flood Alert on your Mobile phone </h1>
                    <a href="#" class="px-10 py-5 font-bold text-upper rounded-full  bg-orange-600  text-white uppercase">Get Alert  <i class="fas fa-phone-flip pl-2 fa-2x"></i></a>

                    <div class="weather bg-white rounded-full relative top-10 md:mx-80 p-5">
                       <p>Weather Information Comes here</p>
                    </div>
            </div>

        </header>

        <!-- Introduction -->
        <div class="pt-4 pb-14 text-center">

        </div>
        <!-- end of introduction -->


        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container-fluid px-4 sm:px-8 xl:px-4">
            <div class="md:grid md:grid-cols-4  ">
                <!-- Card -->
                <div class="card">
                   <div class="card-image">
                       <img src="images/features-icon-1.svg" alt="alternative" />
                   </div>
                   <div class="card-body">
                       <h5 class="card-title">Notification </h5>
                       <p class="mb-4">Get Flood Analysis Notification and Updates</p>
                   </div>
               </div>
               <!-- end of card -->

               <!-- Card -->
               <div class="card">
                   <div class="card-image">
                       <img src="images/features-icon-2.svg" alt="alternative" />
                   </div>
                   <div class="card-body">
                       <h5 class="card-title">Statistics</h5>
                       <p class="mb-4">Visualize flood Analysis For your area of Intrest</p>
                   </div>
               </div>
               <!-- end of card -->

               <!-- Card -->
               <div class="card">
                   <div class="card-image">
                       <img src="images/features-icon-3.svg" alt="alternative" />
                   </div>
                   <div class="card-body">
                       <h5 class="card-title">Cummunity Report</h5>
                       <p class="mb-4">Optimized code and innovative technology insure no delays and ultra-fast responsiveness</p>
                   </div>
               </div>
               <!-- end of card -->

               <!-- Card -->
               <div class="card">
                   <div class="card-image">
                       <img src="images/features-icon-4.svg" alt="alternative" />
                   </div>
                   <div class="card-body">
                       <h5 class="card-title">Multiple Languages</h5>
                       <p class="mb-4">Choose from one of the 40 languages that come pre-installed and start selling smarter</p>
                   </div>
               </div>
                 </div>



            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of features -->

        <!--map section -->


            <div style="height:50%; width:100%; margin:auto; position:absolute;" id="map" class="">

            </div>

        <!-- Details 1 -->
        {{-- <div id="details" class="pt-12 pb-16 lg:pt-16">
            <div class="container ">
                        <div class="h-screen" id="map">

                        </div>

            </div> <!-- end of container -->
        </div> --}}
        <!-- end of details 1 -->


        <!-- Details 2 -->
        <div class="py-24">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-7">
                    <div class="mb-12 lg:mb-0 xl:mr-14">
                        <img class="inline" src="images/details-2.jpg" alt="alternative" />
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-5">
                    <div class="xl:mt-12">
                        <h2 class="mb-6">Instant results for the marketing department</h2>
                        <ul class="list mb-7 space-y-2">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Features that will help you and your marketers</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Smooth learning curve due to the knowledge base</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Ready out-of-the-box with minor setup settings</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
                        <a class="btn-outline-reg" href="article.html">Details</a>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 2 -->


        <!-- Details Lightbox -->
        <!-- Lightbox -->
        {{-- <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="lg:col-span-8">
                    <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                        <img class="inline rounded-lg" src="images/details-lightbox.jpg" alt="alternative" />
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-4">
                    <h3 class="mb-2">Goals Setting</h3>
                    <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                    <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                    <h4 class="mt-7 mb-2.5">User Feedback</h4>
                    <p class="mb-4">This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                    <ul class="list mb-6 space-y-2">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Splash screen panel</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Statistics graph report</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Events calendar layout</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Location details screen</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Onboarding steps interface</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                    <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic --> --}}
        <!-- end of lightbox -->
        <!-- end of details lightbox -->


        <!-- Details 3 -->
        <div class="pt-16 pb-12">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-5">
                    <div class="mb-16 lg:mb-0 xl:mt-16">
                        <h2 class="mb-6">Platform integration and life time free updates</h2>
                        <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and understand why current users are so excited when using Pavo
                            together with their teams.</p>
                        <p class="mb-4">We will promptly answer any questions and honor your requests based on the service level agreement</p>
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-7">
                    <div class="ml-14">
                        <img class="inline" src="images/details-3.jpg" alt="alternative" />
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 3 -->




        <!-- Testimonials -->
        {{-- <div class="slider-1 py-32 bg-gray">
            <div class="container px-4 sm:px-8">
                <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">What do users think about Pavo</h2>

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-1.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it properly into my business flow and it's great</p>
                                        <p class="testimonial-author">Jude Thorn - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-2.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">We were so focused on launching as many campaigns as possible that we've forgotten to target our loyal customers</p>
                                        <p class="testimonial-author">Roy Smith - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-3.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the reports it generates and the amazing high accuracy</p>
                                        <p class="testimonial-author">Marsha Singer - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-4.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">We've been waiting for a powerful piece of software that can help businesses manage their marketing projects</p>
                                        <p class="testimonial-author">Tim Shaw - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-5.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">Searching for a great prototyping and layout design app was difficult but thankfully I found app suite quickly</p>
                                        <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-6.jpg" alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">The app support team is amazing. They've helped me with some issues and I am so grateful to the entire team</p>
                                        <p class="testimonial-author">Ann Blake - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of container -->
        </div> <!-- end of slider-1 --> --}}
        <!-- end of testimonials -->


        <!-- Pricing -->
        {{-- <div id="pricing" class="cards-2">
            <div class="absolute bottom-0 h-40 w-full bg-white"></div>
            <div class="container px-4 pb-px sm:px-8">
                <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Pricing options for all budgets</h2>
                <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto"> Our pricing plans are setup in such a way that any user can start enjoying Pavo without worrying so much about costs. They are flexible and work for any type of industry </p>

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">STANDARD</div>
                        <div class="price"><span class="currency">$</span><span class="value">29</span></div>
                        <div class="frequency">monthly</div>
                        <p>This basic package covers the marketing needs of small startups</p>
                        <ul class="list mb-7 space-y-2 text-left">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>List building and relations</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Seamless platform integration</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Great performance on devices</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">ADVANCED</div>
                        <div class="price"><span class="currency">$</span><span class="value">39</span></div>
                        <div class="frequency">monthly</div>
                        <p>This is a more advanced package suited for medium companies</p>
                        <ul class="list mb-7 space-y-2 text-left">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>List building and relations</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Seamless platform integration</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Great performance on devices</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">COMPLETE</div>
                        <div class="price"><span class="currency">$</span><span class="value">49</span></div>
                        <div class="frequency">monthly</div>
                        <p>This is a comprehensive package designed for big organizations</p>
                        <ul class="list mb-7 text-left space-y-2">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>List building and relations</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Seamless platform integration</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Great performance on devices</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

            </div> <!-- end of container -->
        </div> <!-- end of cards-2 --> --}}
        <!-- end of pricing -->


        <!-- Conclusion -->
        {{-- <div id="download" class="basic-5">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
                <div class="mb-16 lg:mb-0">
                    <img src="images/conclusion-smartphone.png" alt="alternative" />
                </div>
                <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                    <p class="mb-9 text-gray-800 text-3xl leading-10">Team management mobile applications don’t get much better than Pavo. Download it today</p>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                    <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
                </div>
            </div> <!-- end of container -->
        </div> <!-- end of basic-5 --> --}}
        <!-- end of conclusion -->


        {{-- <!-- Footer -->
        <div class="footer">
            <div class="container px-4 sm:px-8">
                <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you can reach the team at <a class="text-indigo-600 hover:text-gray-500" href="mailto:email@domain.com">email@domain.com</a></h4>
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of social-container -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer --> --}}

              <!-- Statistics -->
              <div class="counter">
                <div class="container px-4 sm:px-8">

                    <!-- Counter -->
                    <div id="counter" class="grid grid-cols-4 gap-2">
                        <div class="">
                            <div class="counter-value number-count text-gray-500" data-count="231">1</div>
                            <p class="counter-info text-gray-700">Happy Users</p>
                        </div>
                        <div class="">
                            <div class="counter-value number-count text-gray-500" data-count="385">1</div>
                            <p class="counter-info text-gray-700">Issues Solved</p>
                        </div>
                        <div class="">
                            <div class="counter-value number-count text-gray-500" data-count="159">1</div>
                            <p class="counter-info text-gray-700">Good Reviews</p>
                        </div>
                        <div class="">
                            <div class="counter-value number-count text-gray-500" data-count="127">1</div>
                            <p class="counter-info text-gray-700">Case Studies</p>
                        </div>
                        <div class="">
                            <div class="counter-value number-count text-gray-500" data-count="211">1</div>
                            <p class="counter-info text-gray-700">Orders Received</p>
                        </div>
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of container -->
            </div> <!-- end of counter -->
            <!-- end of statistics -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
                <ul class="mb-4 list-unstyled p-small">
                    <li class="mb-2"><a href="article.html">Article Details</a></li>
                    <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li>
                    <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li>
                </ul>
                <p class="pb-2 p-small statement text-white">Copyright © <a href="#your-link" class="no-underline">Flood View</a></p>

            </div>

        <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->


        <!-- Scripts -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <script src="{{ asset('js/leaflet_code.js') }}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script src="{{ asset('js/forcast.js') }}"></script>
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        {{-- <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes --> --}}
        <script src="js/scripts.js"></script> <!-- Custom scripts -->

    </body>
</html>