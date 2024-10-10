@extends('frontend.layouts.app')
@section('meta_title','Welcome To | '.env('APP_NAME'))
@section('meta_description','Welcome To | '.env('APP_NAME'))


@section('content')
    @include('frontend.includes.slidebar')

    @include('components.competition-modal')

        <!-- Google Web Fonts -->




    </head>



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




        <style>
            /* Container and Layout */
            /* .container-fluids {
                max-width:100%; /* Increase max width for more space */
                margin: 0 auto;
                padding: 2rem;
                box-sizing: border-box;
            } */

             .content-section {
                margin: 0 auto;
                padding: 20px; /* Add padding to the content section */
                text-align: center; /* Center the content */
            */
             }
            .language-selector {
                text-align: center;
                margin-bottom: 2rem;
            }

            .btn-lang {
                background-color: #003366;
                color: white;
                border: none;
                padding: 15px 30px; /* Increase button padding for larger size */
                cursor: pointer;
                margin: 0 10px;
                border-radius: 8px;
                font-size: 18px; /* Increase font size */
                transition: background-color 0.3s ease, transform 0.3s ease;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add subtle shadow */
            }

            .btn-lang:hover {
                background-color: #001a33;
                transform: scale(1.05); /* Slightly enlarge the button on hover */
            }

            /* Single Card for Both Age Groups */
            .card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 12px; /* Increase border radius */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Increase shadow for a more pronounced effect */
    padding: 40px; /* Increase padding for larger card */
    box-sizing: border-box;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 20px auto; /* Center the card horizontally with auto margins */
    max-width: 1000px; /* Set the max-width to control the card width */
    width: 100%; /* Allow the card to take up full width up to max-width */
    text-align: center; /* Center text inside the card */
}

.card:hover {
    transform: translateY(-10px); /* Lift the card on hover */
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15); /* More pronounced shadow on hover */
}

.card h2 {
    color: #d90e0e;
    font-weight: 700;
    margin-bottom: 1.5rem;
    font-size: 2.25rem; /* Increase font size */
}

.card h3 {
    color: #007bff;
    font-weight: 400;
    margin-bottom: 1.5rem;
    font-size: 2.05rem;


}

.card ul {
    list-style-type: none; /* Remove default list markers */
    padding: 0;
    font-size: 1.125rem;
    line-height: 1.6;
    color: #333; /* Adjust text color for contrast */
    margin: 0; /* Remove default margin */
}

.card ul li {
    position: relative;
    padding-left: 2rem; /* Space for the custom marker */
    margin-bottom: 0.5rem; /* Space between list items */
    text-align: left; /* Ensure text alignment is left */
}

.card ul li::before {
    content: '\2022'; /* Unicode for a bullet (•), change to your desired symbol */
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%); /* Center the symbol vertically */
    font-size: 1.5rem; /* Adjust size as needed */
    color: #007bff; /* Color of the symbol, adjust as needed */
}
.card h4 {
    font-size: 1.125rem; /* Adjust font size */
    margin-bottom: 0.5rem; /* Space below the heading */
    color: #333; /* Adjust text color */
    text-align: center; /* Center align heading */
}

.card h4 strong {
    font-weight: 700; /* Make bold text bold */
}

            /* Highlight Section */
            .highlight-bg {
    background-color: #f9f9f9;
    border-radius: 12px;
    padding: 40px; /* Increase padding */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Increase shadow */
    text-align: center;
    max-width: 1000px; /* Set the max-width to control the highlight section width */
    width: 100%; /* Allow the highlight section to take up full width up to max-width */
    margin: 20px auto; /* Center the highlight section horizontally with auto margins */
    padding-left: 50px; /* Ensure content is centered with respect to margins */
    padding-right: 50px; /* Ensure content is centered with respect to margins */
    box-sizing: border-box; /* Include padding and border in element's total width and height */
}


            .highlight-bg h4 {
                font-size: 2.75rem; /* Increase font size */
                color: #007bff;
                font-weight: 700;
            }

            .highlight-bg ul {

                padding: 0;
                font-size: 1.125rem; /* Slightly larger font size for list items */
                line-height: 1.6;
            }

            .highlight-bg li {
                margin-bottom: 0.5rem; /* Add spacing between list items */
            }
            .section-title {
    position: relative;
}


.animated-line {
    position: relative;
    height: 3px;
    background-color: #2e9b44;
    margin: 0 auto; /* Centers the line horizontally */
    width: 250px; /* Line width */
    margin-top: -15px; /* Optional: Adds a small gap between h2 and line */
}

.moving-point {
    position: absolute;
    top: -5px; /* Adjust as needed to center the point vertically */
    left: 0;
    width: 10px;
    height: 10px;
    background-color: #103791;
    border-radius: 50%;
    animation: movePoint 2s linear infinite;
}

@keyframes movePoint {
    0% { left: 0; }
    50% { left: calc(100% - 10px); } /* Point moves to the end of the line */
    100% { left: 0; }
}



            /* Responsive Design */
            @media (max-width: 768px) {
                .container-fluid {
                    padding: 1rem;
                }

                .btn-lang {
                    display: block;
                    width: 100%;
                    margin: 10px 0;
                }

                .content-section {
                    margin: 0 15px; /* Adjusted margins for smaller screens */
                }

                 .card {
        padding: 20px; /* Reduced padding for mobile */
        margin: 10px auto; /* Ensure equal margins on both left and right */
        max-width: 100%; /* Full-width for mobile */
        box-sizing: border-box; /* Ensures padding is included in the width */
        font-size: 1rem; /* Reduce font size for better readability */
    }

                .highlight-bg {
                    padding: 20px;
                    margin: 15px; /* Adjusted margin for mobile view */
                }
            }

           /* Mobile First Styling - Adjusting for smaller screens */
@media (max-width: 768px) {

    /* Container and Layout Adjustments */
    .content-section {
        margin: 0 10px; /* Adjusted margins for smaller screens */
        padding: 15px; /* Reduced padding for mobile view */
    }

    .btn-lang {
        display: block;
        width: 100%; /* Full-width buttons for easier tapping on mobile */
        margin: 10px 0; /* Spacing between buttons */
        padding: 10px 20px; /* Reduced padding for better mobile fit */
        font-size: 16px; /* Adjusted font size for mobile screens */
    }

    /* Card Section Adjustments */
     .card {
        padding: 15px; /* Reduce padding further for smaller screens */
        margin: 10px auto; /* Keep equal margins on both sides */
        max-width: 100%; /* Ensure full width on very small screens */
    }
    .card h2, .card h3 {
        font-size: 1.75rem; /* Decrease header size for mobile */
    }

    .card ul li::before {
        font-size: 1.2rem; /* Slightly reduce bullet size */
    }

    /* Highlight Section Adjustments */
    .highlight-bg {
        padding: 20px;
        margin: 15px; /* Adjusted margin for mobile view */
        max-width: 100%; /* Full-width for mobile */
    }

    .highlight-bg h4 {
        font-size: 2rem; /* Adjusted font size */
    }

    /* Section Title Adjustments */
    .animated-line {
        width: 150px; /* Reduced line width for mobile */
    }

    /* Moving point animation remains the same for mobile */
}

/* Smaller Mobile Devices */
@media (max-width: 480px) {
    .btn-lang {
        padding: 8px 16px; /* Smaller padding for smaller screens */
        font-size: 16px; /* Adjust button text size */
    }

    .card h2, .card h3 {
        font-size: 1.5rem; /* Further reduce header size for very small screens */
    }

    .card ul {
        font-size: 1rem; /* Further reduce list font size for better fit */
    }

    .highlight-bg h4 {
        font-size: 1.5rem; /* Decrease header size for smaller mobile */
    }

        .highlight-bg {
        padding: 15px; /* Reduce padding further for smaller screens */
        margin: 10px auto; /* Ensure equal margins on both sides */
        max-width: 100%; /* Full width on small devices */
    }




        </style>

        <script>
    document.addEventListener('DOMContentLoaded', function() {
        var typed = new Typed('#typed-words', {
            strings: ["Diwali Competition 2024"], // Add the words you want to display
            typeSpeed: 80,
            backSpeed: 60,
            loop: true // Makes it repeat
        });
    });
</script>


        <div class="container-fluids py-5 about" style="background-image: url('img/2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <!-- Language Selector -->

            <h5 class="custom-heading">Creators India YouTube Video
    <span id="typed-words" class="typed-words"></span>
</h5>

            {{-- <div class="language-selector">
                <button class="btn-lang" onclick="showContent('english')">English</button>
                <button class="btn-lang" onclick="showContent('hindi')">Hindi</button>
            </div> --}}

            <!-- Content Section -->
            <div class="content-section" id="content">

                <!-- Single Container for Both Age Groups -->
                <div class="card">

                <div class="language-selector">
                    <button class="btn-lang" onclick="showContent('english')">English</button>
                    <button class="btn-lang" onclick="showContent('hindi')">Hindi</button>
                </div>


                    <h2 >Age Group 1: Children (5-14 years old)</h2>
                    <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>


                    <h3 class="text-dark mb-3">Theme: "Celebrate Traditional Games"</h3>

                    <h4><strong>Video Format:</strong> YouTube Shorts (up to 30 seconds)</h4>
                    <ul>

                        <li><strong>Submission Topics:</strong>
                            <ul>
                                <li>Plantation Projects: Show how you plant a seed or take care of a small garden.</li>
    <li>Paper Creativity: Create something amazing using paper (origami, crafts, etc.).</li>
    <li>Fun Science Experiments: Perform safe, simple science experiments at home.</li>
    <li>Dancing to Fun Songs: Share your creative dance moves, like Mousepool dancing to "Bye Bye"!</li>
    <li>Pet Tricks: Show off any fun tricks you’ve taught your pet.</li>
    <li>Fun with Clay: Making objects with clay.</li>
    <li>Magic Videos: Show tricks.</li>
    <li>Comedy Videos: Mimicry etc.</li>
    <li>Playing Musical Instruments: Play different musical instruments like Flute, Harmonium, Guitar etc.</li>
                            </ul>
                        </li>
                    </ul>

                    <hr>


                    <h2>Age Group 2: Teens & Adults (15 and above)</h2>
                    <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>

                    <h3 class="text-dark mb-3">Theme: "Celebrate Traditional Games"</h3>
                    <h4><strong>Video Format:</strong> Videos of any length up to 3 minutes.</h4>
                    <ul>

                        <li><strong>Submission Topics:</strong>
                            <ul>
                                <li>Kabaddi: Show a quick match of this fast-paced, traditional game.</li>
    <li>Kho-Kho: Share a thrilling moment from a game of Kho-Kho.</li>
    <li>Pehal Dooj: focused on crossing a marked line by maintaining perfect body balance..</li>
    <li>Langdi Tang: Display your skills in this one-legged hopping game.</li>
    <li>Janjeer: Introduce the chain tag game.</li>
    <li>Satolia (Seven Stones): Show how you play this classic team game.</li>
    <li>Marbles (Kanche): Show skills to play with marbles.</li>
    <li>Carrom: Skills with striker to put coins (Goti) in holes.</li>
    <li>Gilli Danda: How to play this traditional game.</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Rewards Section -->
                <div class="highlight-bg">
                    <h4 class="text-primary mb-4 text-center" style="font-size: 2rem; color: #007bff;">
                        Proposed Prizes / प्रस्तावित पुरस्कार:
                    </h4>
                    <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>
                    <ul>
                        <li>For Children: Certificates, art supplies, or educational kits.</li>
                        <li>For Teens and Adults: Sports gear, tech gadgets, or cultural event tickets.</li>
                        <li>By combining creativity for the younger group and cultural preservation for the older group, the competition can attract a broad audience while keeping it fun and engaging!</li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            function showContent(language) {
                var content = document.getElementById('content');

                if (language === 'english') {
                    content.innerHTML = `
                        <div class="card">

                            <div class="language-selector">
                    <button class="btn-lang" onclick="showContent('english')">English</button>
                    <button class="btn-lang" onclick="showContent('hindi')">Hindi</button>
                </div>
                            <h2>Age Group 1: Children (5-14 years old)</h2>
                               <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>

                            <h3 class="text-dark mb-3">Theme: "Express Your Creativity"</h3>
                               <h4><strong>Video Format:</strong> YouTube Shorts (up to 30 seconds)</h4>
                            <ul>

                                <li><strong>Submission Topics:</strong>
                                    <ul>
                                  <li>Plantation Projects: Show how you plant a seed or take care of a small garden.</li>
    <li>Paper Creativity: Create something amazing using paper (origami, crafts, etc.).</li>
    <li>Fun Science Experiments: Perform safe, simple science experiments at home.</li>
    <li>Dancing to Fun Songs: Share your creative dance moves, like Mousepool dancing to "Bye Bye"!</li>
    <li>Pet Tricks: Show off any fun tricks you’ve taught your pet.</li>
    <li>Fun with Clay: Making objects with clay.</li>
    <li>Magic Videos: Show tricks.</li>
    <li>Comedy Videos: Mimicry etc.</li>
    <li>Playing Musical Instruments: Play different musical instruments like Flute, Harmonium, Guitar etc.</li>
                                    </ul>
                                </li>
                            </ul>

                            <hr>

                            <h2>Age Group 2: Teens & Adults (15 and above)</h2>
                               <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>

                            <h3 class="text-dark mb-3">Theme: "Celebrate Traditional Games"</h3>
                               <h4><strong>Video Format:</strong> Videos of any length up to 3 minutes.</h4>
                            <ul>

                                <li><strong>Submission Topics:</strong>
                                    <ul>
                                        <li>Kabaddi: Show a quick match of this fast-paced, traditional game.</li>
    <li>Kho-Kho: Share a thrilling moment from a game of Kho-Kho.</li>
    <li>Pehal Dooj: focused on crossing a marked line by maintaining perfect body balance.</li>
    <li>Langdi Tang: Display your skills in this one-legged hopping game.</li>
                                        <li>Janjeer: Introduce the chain tag game.</li>
    <li>Satolia (Seven Stones): Show how you play this classic team game.</li>
    <li>Marbles (Kanche): Show skills to play with marbles.</li>
    <li>Carrom: Skills with striker to put coins (Goti) in holes.</li>
    <li>Gilli Danda: How to play this traditional game.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="highlight-bg">
                         <h4 class="text-primary mb-4 text-center" style="font-size: 2rem; color: #007bff;">
            Proposed Prizes / प्रस्तावित पुरस्कार:
        </h4> <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>
                            <ul>
                                <li>For Children: Certificates, art supplies, or educational kits.</li>
                                <li>For Teens and Adults: Sports gear, tech gadgets, or cultural event tickets.</li>
                                 <li>By combining creativity for the younger group and cultural preservation for the older group, the competition can attract a broad audience while keeping it fun and engaging!</li>
                            </ul>
                        </div>
                    `;
                } else {
                    content.innerHTML = `
                        <div class="card">
                            <div class="language-selector">
                    <button class="btn-lang" onclick="showContent('english')">English</button>
                    <button class="btn-lang" onclick="showContent('hindi')">Hindi</button>
                </div>
                            <h2>आयु वर्ग 1: बच्चे (5-14 वर्ष)</h2>
                               <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>

                            <h3>विषय: "अपनी रचनात्मकता दिखाएं"</h3>
                            <h4>वीडियो फॉर्मेट: YouTube Shorts (30 सेकंड तक)</h4>
                            <ul>

                                <li>जमा करने के विषय:
                                    <ul>
                                        <li>पौधारोपण परियोजनाएं: दिखाएं कि आप कैसे बीज लगाते हैं या एक छोटे बगीचे की देखभाल करते हैं।</li>
    <li>कागज की रचनात्मकता: कागज का उपयोग करके कुछ अद्भुत बनाएं (ओरिगेमी, क्राफ्ट आदि)।</li>
    <li>मज़ेदार विज्ञान प्रयोग: घर पर सुरक्षित, सरल विज्ञान प्रयोग करें।</li>
    <li>मज़ेदार गानों पर डांस: अपने रचनात्मक डांस मूव्स दिखाएं, जैसे कि माउसपूल "बाय बाय" गाने पर डांस कर रहा हो!</li>
    <li>पालतू जानवरों के करतब: अपने पालतू जानवर को सिखाए गए मज़ेदार करतब दिखाएं।</li>
    <li>Clay से अलग-अलग चीजें बनाना: Clay से मजेदार वस्तुएं बनाना।</li>
    <li>जादू दिखाना: जादू की tricks दिखाना।</li>
    <li>Comedy वीडियो: Mimicry आदि के वीडियो।</li>
    <li>संगीत वाध्ययंत्र बजाना: बाँसुरी, हारमोनियम, गिटार आदि वाध्ययंत्र बजाना।</li>
                                    </ul>
                                </li>
                            </ul>

                            <hr>

                            <h2>आयु वर्ग 2: किशोर और वयस्क (15 और उससे ऊपर)</h2>
                               <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>

                            <h3>विषय: "पारंपरिक खेलों का जश्न"</h3>
                            <h4>वीडियो फॉर्मेट: 3 मिनट तक के वीडियो</h4>
                            <ul>

                                <li>जमा करने के विषय:
                                    <ul>
                                    <li>कबड्डी: इस तेज़-तर्रार, पारंपरिक खेल का एक त्वरित मैच दिखाएं।</li>
    <li>खो-खो: खो-खो खेल का एक रोमांचक पल साझा करें।</li>
    <li>पहल दूज: एक पारंपरिक कुश्ती मैच को हाइलाइट करें।</li>
    <li>लंगड़ी टांग: इस एक पैर पर कूदने वाले खेल में अपनी कुशलता दिखाएं।</li>
    <li>जंजीर: चेन टैग खेल को प्रस्तुत करें।</li>
    <li>सातोलिया (सात पत्थर): इस क्लासिक टीम खेल को कैसे खेलते हैं, यह दिखाएं।</li>
    <li>कंचे: कंचों से खेलने का कौशल दिखाना।</li>
    <li>कैरम: स्ट्राइकर के साथ छेद में गोटी डालने का कौशल।</li>
    <li>गिल्ली डंडा: गिल्ली डंडा कैसे खेले।</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="highlight-bg">
                           <h4 class="text-primary mb-4 text-center" style="font-size: 2rem; color: #007bff;">
            Proposed Prizes / प्रस्तावित पुरस्कार:
        </h4>
         <div class="animated-line">
                        <span class="moving-point"></span>
                    </div>
                            <ul>
                                <li>बच्चों के लिए: प्रमाण पत्र, कला सामग्री, या शैक्षिक किट।</li>
                                <li>किशोर और वयस्कों के लिए: खेल उपकरण, तकनीकी गैजेट्स, या सांस्कृतिक कार्यक्रमों के टिकट।</li>
                               <li> छोटे बच्चों के लिए रचनात्मकता और बड़े आयु वर्ग के लिए सांस्कृतिक धरोहर को मिलाकर, प्रतियोगिता को मनोरंजक और आकर्षक बनाया जा सकता है!</li>
                            </ul>
                        </div>
                    `;
                }
            }
        </script>


    </div>
</div>
</div>








        <!-- About End -->


        <!-- Service Start -->
        {{-- <div class="container-fluid service py-5" >
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
                                {{-- </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-upload fa-6x text-primary"></i></div>
                                    <a href="" class="h4">Upload Your Videos</a>
                                    <p class="my-3">Share your best gaming moments by uploading videos. Let others see your talent and get feedback.</p>
                                    {{-- <a href="" class="btn btn-primary text-white px-4 py-2 my-2 btn-border-radius">Upload Now</a> --}}
                                {{-- </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4"><i class="fas fa-comments fa-6x text-primary"></i></div>
                                    <a href="}" class="h4">Join the Community</a>
                                    <p class="my-3">Connect with other gamers, exchange tips, and get support from our vibrant community. Engage and grow together.</p>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
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
        </div> --}}

        <!-- Service End -->


        <!-- Programs Start -->

        <style>
            .program-img img {
                height: 250px !important; /* Force the height */
                object-fit: cover !important; /* Ensure proper scaling */
                width: 100% !important; /* Ensure full width */
            }
        </style>


<div class="container-fluid program py-5" style="margin-top: 0px !important; background-color:#fff1f1 !important;">
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
                                    <img src="img/plantation.jpg" class="img-fluid w-100" alt="Image">
                                </div>

                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">Plantation</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/musical-instrument.jpg" class="img-fluid w-100" alt="Image">
                                </div>

                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">Playing  Instruments</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/funny.jpg" class="img-fluid w-100" alt="Image">
                                </div>

                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">Science Experiments</a>

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
                                    <a href="#" class="h4">Paper Creativity</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/kabdi5.jpg" class="img-fluid w-100" alt="Image">
                                </div>

                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">Kabaddi</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="program-item rounded">
                            <div class="program-img position-relative">
                                <div class="overflow-hidden img-border-radius">
                                    <img src="img/marbles.jpg" class="img-fluid w-100" alt="Image">
                                </div>

                            </div>
                            <div class="program-text bg-white px-4 pb-3">
                                <div class="program-text-inner">
                                    <a href="#" class="h4">Marbles (Kancha)</a>

                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="d-inline-block text-center wow fadeIn" data-wow-delay="0.1s">
                        <a href="programme" class="btn btn-primary px-5 py-3 text-white btn-border-radius" style="background-color: #003366; border-color: #003366;">View All Programs</a>

                    </div>
                </div>
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


<style>

    /* Style for section containers */


    /* Style for section titles */

    /* Style for highlight background areas */


    /* Style for list items with icons */

    /* General text color classes */





    /* Style for custom heading */
    .custom-heading {
    font-size: 2.1rem; /* Adjust as needed */
    font-weight: 700; /* Bold text */
    text-align: center; /* Center alignment */
    color: navy; /* Text color */
    margin-top: 0px !important; /* Top margin with !important */
    margin-bottom: 1rem; /* Bottom margin */
    padding: 0.5rem 1rem; /* Padding for internal spacing */
    border-radius: 12px; /* Stylish corners */
    display: block; /* Use block display to ensure proper centering */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Shadow around heading */
    background-color: white; /* Background color for visibility */
}



@media (max-width: 768px) {
    .custom-heading {
        font-size: 1.8rem; /* Smaller font size for tablets */
        padding: 0.4rem 0.8rem; /* Reduced padding for smaller screens */
        margin-bottom: 0.8rem; /* Adjust margin for better spacing */
    }
}

@media (max-width: 480px) {
    .custom-heading {
        font-size: 1.5rem; /* Even smaller font size for mobile */
        padding: 0.3rem 0.6rem; /* Smaller padding */
        margin-bottom: 0.6rem; /* Adjust bottom margin */
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2); /* Slightly smaller shadow on mobile */
    }
}


</style>




@endsection
@section('style')

@endsection
@section('script')

@endsection
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
