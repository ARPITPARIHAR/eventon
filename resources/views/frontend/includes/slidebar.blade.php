<div class="container-fluid service py-5" style=" background: linear-gradient(to bottom, white, #ecfffc, #fff7a0);;margin: 0 !important;">
    <div class="row g-0 align-items-start flex-column flex-lg-row" style="height: auto;">
        <!-- Image column -->
        <div class="col-lg-6 col-12 wow fadeIn" data-wow-delay="0.1s" style="padding: 0;">
            <div class="image border" style="padding: 0;">
                <img src="{{ asset('img/slide.jpeg') }}" class="img-fluid" alt="Creators India" style="width: 100%; height: 100%; object-fit: cover; margin: 0;">
            </div>
        </div>
        <!-- Content column -->
        <div class="col-lg-6 col-12 wow fadeIn d-flex align-items-center justify-content-center" data-wow-delay="0.3s" style="padding: 0;">
            <div class="text-content" style="text-align: center;">
                <h1 class="text-dark mb-4 display-5 no-margin-top">Creators India YouTube Video Diwali Competition 2024</h1>
                <div class="button-container" style="margin-top: 20px;">
                    <a href="{{ route('form') }}" class="btn btn-prima">Participate</a>

                    <a href="/dashboard" class="btn btn-prima">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styling for buttons */
    .btn-prima {
        background-color: red;
        border-color: #003366;
        color: #ffffff !important;
        text-decoration: none !important;
        padding: 15px 0;
        width: 250px;
        border-radius: 20px;
        margin: 10px 0 !important;
        font-size: 18px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        border: 2px solid white !important;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-prima:hover {
        background-color: black !important;
        border-color: #000000;
        color: #ffffff;
    }

    .no-margin-top {
        margin-top: 0 !important;
    }

    /* Media queries for responsive design */
    @media (max-width: 768px) {
        .service .row {
            flex-direction: column; /* Stack columns vertically on smaller screens */
            height: auto; /* Let content flow naturally */
        }

        .service .image {
            height: 50vh; /* Reduce image height on smaller screens */
        }

        h1 {
            font-size: 24px;
        }

        .btn-prima {
            width: 100%;
            max-width: 300px;
        }

        .button-container {
            align-items: center;
        }
    }

    @media (max-width: 480px) {
        .service .image {
            height: 50vh; /* Further reduce image height on smaller screens */
        }

        h1 {
            font-size: 20px;
        }

        .btn-prima {
            padding: 10px 0;
            width: 100%;
        }

    }
</style>
<div class="modal fade" id="participateModal" tabindex="-1" aria-labelledby="participateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="participation-form-container">
                <div class="close-icon-container" id="closeIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 16">
                        <path fill="none" stroke="#ffffff" stroke-width="2" d="M1.646 1.646L8 7.293l5.646-5.647M1.646 14.354L8 8.707l5.646 5.647"/>
                    </svg>
                </div>

                <h2 class="participation-form-heading">Participate & Win Amazing Rewards!</h2>
                <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data" id="participationForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number:</label>
                        <input type="tel" class="form-control" name="number" id="contact" placeholder="Enter your contact number" required>
                    </div>
                    <div class="form-group">
                        <label for="age_group">Age Group:</label>
                        <select class="form-control" name="age" id="age_group" required>
                            <option value="">Select Age Group</option>
                            <option value="5-15Age">5 to 15 years</option>
                            <option value="15+ Above">15 years and above</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="game_category">Video Category:</label>
                        <select class="form-control" name="game_category" id="game_category" required>
                            <option value="">Select Game Category</option>
                            @foreach (\App\Models\Category::all() as $category)
                                <option value="{{ $category->category }}">{{ $category->category }}</option>
                            @endforeach
                            <option value="custom">Choose Your Own</option>
                        </select>
                    </div>
                    <div class="form-group" id="custom_category_group" style="display:none;">
                        <label for="custom_category">Enter Your Own Category:</label>
                        <input type="text" class="form-control" name="custom_game_category" id="custom_category" placeholder="Enter your category">
                    </div>
                    <div class="form-group">
                        <label for="video">Your Gaming Video:</label>
                        <input type="file" class="form-control" name="logo" id="video" placeholder="Gaming Video" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Additional Information:</label>
                        <textarea class="form-control" name="message" id="message" rows="4" placeholder="Any additional information or comments" required></textarea>
                    </div>
                    <div class="button-wrapper">
                        <button type="submit" class="participation-form-button">Submit & Participate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
<div id="flashMessage" class="flash-message">
    <img src="/img/successful.png" alt="Success">
    <h2><strong>Thank You!!!</strong></h2>
    <p>{{ session('success') }}</p>
    <button onclick="closeFlashMessage()">Close</button>
</div>
@endif

<script>
    document.getElementById('game_category').addEventListener('change', function () {
        var customCategoryGroup = document.getElementById('custom_category_group');
        if (this.value === 'custom') {
            customCategoryGroup.style.display = 'block';
            document.getElementById('custom_category').setAttribute('required', 'required');
        } else {
            customCategoryGroup.style.display = 'none';
            document.getElementById('custom_category').removeAttribute('required');
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const flashMessage = document.getElementById('flashMessage');
        if (flashMessage) {
            flashMessage.style.display = 'block';
            setTimeout(() => {
                flashMessage.style.opacity = '0';
                setTimeout(() => {
                    flashMessage.style.display = 'none';
                }, 500); // Delay to match the opacity transition
            }, 5000); // Adjust the time as needed
        }
    });

    function closeFlashMessage() {
        const flashMessage = document.getElementById('flashMessage');
        if (flashMessage) {
            flashMessage.style.opacity = '0';
            setTimeout(() => {
                flashMessage.style.display = 'none';
            }, 500);
        }
    }

    document.getElementById('closeIcon').addEventListener('click', function() {
        $('#participateModal').modal('hide');
    });
</script>

<style>
    .close-icon-container {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .participation-form-container {
        background: #386eac;
        border-radius: 15px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        position: relative;
    }

    .participation-form-heading {
        font-size: 1.8rem;
        color: white;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 600;
        text-transform: uppercase;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: 650;
        color: white;
        margin-bottom: 5px;
        display: block;
    }

    .form-group .form-control {
        border-radius: 10px;
        border: 1px solid #dedede;
        padding: 15px;
        font-size: 1rem;
    }

    .participation-form-button {
        background: linear-gradient(45deg, #28a745, #218838);
        border: none;
        color: white;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
    }

    .participation-form-button:hover {
        background: linear-gradient(45deg, #218838, #28a745);
    }

    .modal-dialog {
        max-width: 80%;
        margin: 1.75rem auto;
    }

    @media (min-width: 992px) {
        .modal-dialog {
            max-width: 50%;
        }
    }

    @media (max-width: 576px) {
        .modal-dialog {
            max-width: 90%;
        }
    }

    .flash-message {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        background: black;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        z-index: 1000;
        transition: opacity 0.5s ease;
        opacity: 1;
    }

    .flash-message h2, .flash-message p {
        color: white;
    }

    .flash-message img {
        height: 10rem;
        width: 10rem;
        display: block;
        margin: 0 auto;
        margin-bottom: 1rem;
    }

    .flash-message button {
        background-color: white;
        border: none;
        color: darkcyan;
        padding: 10px 20px;
        font-size: 15px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    .flash-message button:hover {
        background-color: lightgray;
        color: black;
    }
</style>
