@extends('frontend.layouts.app')
@section('meta_title','Welcome To | '.env('APP_NAME'))
@section('meta_description','Welcome To | '.env('APP_NAME'))


@section('content')
    @include('frontend.includes.slidebar')



        <!-- Google Web Fonts -->




    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->

        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->

        <!-- Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5 about bg-light">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="video border">
                            <!-- Replace the button with an image -->
                            <img src="img/SPr.jpg" class="img-fluid" alt="Image" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal">
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">About Our Platform</h4>
                        <h1 class="text-dark mb-4 display-5">Showcase Your Skills and Win Exciting Rewards</h1>
                        <p class="text-dark mb-4">
                            Welcome to Creators India, the ultimate destination for gamers to showcase their skills and earn rewards! Our platform provides an exciting opportunity for players of all levels to participate in a variety of gaming events. Register now to upload videos demonstrating your gaming prowess and stand a chance to win amazing prizes.
                        </p>
                        <p class="text-dark mb-4">
                            Whether you're a casual player or a competitive gamer, our platform offers various events tailored to different gaming styles. Share your best moments, receive feedback from a community of gamers, and climb the leaderboard to earn your place among the top players.
                        </p>
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Participate in Engaging Gaming Events</h6>
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Upload and Showcase Your Gaming Videos</h6>
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Win Exciting Rewards and Prizes</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Connect with a Community of Gamers</h6>
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Receive Feedback and Improve</h6>
                                <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Climb the Leaderboards</h6>
                            </div>
                        </div>
                        {{-- <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">Join the Action</a> --}}
                    </div>
                </div>
            </div>
        </div>



        <!-- About End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5" >
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">What We Offer</h4>
                    <h5 style="font-size: 2.1rem; line-height: 1.3; font-weight: 500; margin-bottom: 3rem;">
                        Get Involved and Earn Rewards with Our Platform
                    </h5>

                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-trophy fa-6x text-primary"></i></div>
                                    <a href="}" class="h4">Participate in Competitions</a>
                                    <p class="my-3">Join various gaming competitions and showcase your skills to win exciting rewards and recognition.</p>
                                    {{-- <a href="" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Explore Competitions</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-upload fa-6x text-primary"></i></div>
                                    <a href="" class="h4">Upload Your Videos</a>
                                    <p class="my-3">Share your best gaming moments by uploading videos. Let others see your talent and get feedback.</p>
                                    {{-- <a href="" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Upload Now</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-comments fa-6x text-primary"></i></div>
                                    <a href="}" class="h4">Join the Community</a>
                                    <p class="my-3">Connect with other gamers, exchange tips, and get support from our vibrant community. Engage and grow together.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-award fa-6x text-primary"></i></div>
                                    <a href="" class="h4">Earn Rewards</a>
                                    <p class="my-3">Compete and achieve milestones to earn rewards. The more you participate, the more you earn!</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Service End -->


        <!-- Programs Start -->
        <div class="container-fluid program  py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Programs</h4>
                    <h5 style="font-size: 2.1rem; line-height: 1.3; font-weight: 500; margin-bottom: 3rem;">
                        We Offer Fun and Interactive Activities
                    </h5>

                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/program-1.jpg" class="img-fluid w-100" alt="Image">
                                </div>

                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">English For Today</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/program-2.jpg" class="img-fluid w-100" alt="Image">
                                </div>

                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">Graphics Arts</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/program-3.jpg" class="img-fluid w-100" alt="Image">
                                </div>

                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">General Science</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="d-inline-block text-center wow fadeIn" data-wow-delay="0.1s">
                        <a href="#" class="btn btn-primary px-5 py-3 text-white btn-border-radius" style="background-color: #003366; border-color: #003366;">View All Programs</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Program End -->


        <!-- Events Start -->
        {{-- <div class="container-fluid events py-5 bg-light">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Events</h4>
                    <h1 class="mb-5 display-3">Our Upcoming Events</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="events-item bg-primary rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden rounded-circle position-relative">
                                    <img src="img/event-1.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                    <div class="event-overlay">
                                        <a href="img/event-1.jpg" data-lightbox="event-1"><i class="fas fa-search-plus text-white fa-2x"></i></a>
                                    </div>
                                </div>
                                <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                                <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                    <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am - 12:00pm</small>
                                    <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New York</small>
                                </div>
                            </div>
                            <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                                <a href="#" class="h4">Music & drawing workshop</a>
                                <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="events-item bg-primary rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden rounded-circle position-relative">
                                    <img src="img/event-2.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                    <div class="event-overlay">
                                        <a href="img/event-3.jpg" data-lightbox="event-1"><i class="fas fa-search-plus text-white fa-2x"></i></a>
                                    </div>
                                </div>
                                <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                                <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                    <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am - 12:00pm</small>
                                    <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New York</small>
                                </div>
                            </div>
                            <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                                <a href="#" class="h4">Why need study</a>
                                <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="events-item bg-primary rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden rounded-circle position-relative">
                                    <img src="img/event-3.jpg" class="img-fluid w-100 rounded-circle" alt="Image">
                                    <div class="event-overlay">
                                        <a href="img/event-3.jpg" data-lightbox="event-1"><i class="fas fa-search-plus text-white fa-2x"></i></a>
                                    </div>
                                </div>
                                <div class="px-4 py-2 bg-secondary text-white text-center events-rate">29 Nov</div>
                                <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                                    <small class="text-white"><i class="fas fa-calendar me-1 text-primary"></i> 10:00am - 12:00pm</small>
                                    <small class="text-white"><i class="fas fa-map-marker-alt me-1 text-primary"></i> New York</small>
                                </div>
                            </div>
                            <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                                <a href="#" class="h4">Child health consciousness</a>
                                <p class="mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Events End-->


        <!-- Blog Start-->
        {{-- <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Latest News & Blog</h4>
                    <h1 class="mb-5 display-3">Read Our Latest News & Blog</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="blog-item rounded-bottom">
                            <div class="blog-img overflow-hidden position-relative img-border-radius">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                                <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                                <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                            </div>
                            <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                                <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                    <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="Image" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-primary">Mary Mordern</h6>
                                    <p class="text-muted">Baby Care</p>
                                </div>
                            </div>
                            <div class="px-4 pb-4 bg-light rounded-bottom">
                                <div class="blog-text-inner">
                                    <a href="#" class="h4">How to pay attention to your child?</a>
                                    <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="blog-item rounded-bottom">
                            <div class="blog-img overflow-hidden position-relative img-border-radius">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                                <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                                <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                            </div>
                            <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                                <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                    <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-primary">Mary Mordern</h6>
                                    <p class="text-muted">Baby Care</p>
                                </div>
                            </div>
                            <div class="px-4 pb-4 bg-light rounded-bottom">
                                <div class="blog-text-inner">
                                    <a href="#" class="h4">Play outdoor sports with your child</a>
                                    <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="blog-item rounded-bottom">
                            <div class="blog-img overflow-hidden position-relative img-border-radius">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                                <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                                <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                            </div>
                            <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                                <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                    <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                                </div>
                                <div class="ms-3">
                                    <h6 class="text-primary">Mary Mordern</h6>
                                    <p class="text-muted">Baby Care</p>
                                </div>
                            </div>
                            <div class="px-4 pb-4 bg-light rounded-bottom">
                                <div class="blog-text-inner">
                                    <a href="#" class="h4">How to make time for your kids?</a>
                                    <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Blog End-->


        <!-- Team Start-->
        {{-- <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Team</h4>
                    <h1 class="mb-5 display-3">Meet With Our Expert Teacher</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="img/team-1.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">Linda Carlson</h4>
                                <p class="text-muted mb-2">English Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">Linda Carlson</h4>
                                <p class="text-muted mb-2">English Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">Linda Carlson</h4>
                                <p class="text-muted mb-2">English Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="team-item border border-primary img-border-radius overflow-hidden">
                            <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-primary">Linda Carlson</h4>
                                <p class="text-muted mb-2">English Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Team End-->


        <!-- Testimonial Start -->
        {{-- <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Testimonials</h4>
                    <h5 style="font-size: 2.1rem; line-height: 1.3; font-weight: 500; margin-bottom: 3rem;">
                        Say About Us
                    </h5>

                </div>
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                    <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                        <div class="p-4 position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                            <div class="d-flex align-items-center">
                                <div class="border border-primary bg-white rounded-circle">
                                    <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                                </div>
                                <div class="ms-4">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-primary mt-4 pt-3">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                        <div class="p-4 position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                            <div class="d-flex align-items-center">
                                <div class="border border-primary bg-white rounded-circle">
                                    <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                                </div>
                                <div class="ms-4">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-primary mt-4 pt-3">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                        <div class="p-4 position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                            <div class="d-flex align-items-center">
                                <div class="border border-primary bg-white rounded-circle">
                                    <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                                </div>
                                <div class="ms-4">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-primary mt-4 pt-3">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonial End -->


        <!-- Footer Start -->


    <!-- JavaScript Libraries -->

    </body>

</html>

@endsection
@section('style')

@endsection
@section('script')

@endsection
