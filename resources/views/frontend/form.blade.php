
@extends('frontend.layouts.app')
@section('meta_title','Our Gallery | '.env('APP_NAME'))
@section('meta_description','Our Gallery | '.env('APP_NAME'))
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participation Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>

.participation-form-container {
    background: #386eac; /* Dark background color */
    border-radius: 15px; /* Rounded corners for a smooth look */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    padding: 40px; /* Increased padding */
    box-sizing: border-box; /* Include padding and border in total width */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 20px;/* Smooth transition effects */
    /* Center the card with vertical margins */
    width: 100%; /* Maximum width for the card */
   low the container to take up 90% of the width */
    position: relative; /* Set position for any potential child elements */
     /* Prevent overflow of child elements */
    t/* Fade-in animation on load */
}     .participation-form-container:hover {

            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .participation-form-container:before {
            content: "";
            position: absolute;
            top: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
            z-index: 0;
            animation: pulse 3s infinite;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.3;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.1;
            }
            100% {
                transform: scale(1);
                opacity: 0.3;
            }
        }
        .participation-form-heading {
            font-size: 1.8rem;
            color: white;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
            text-transform: uppercase;
            position: relative;
            z-index: 1;
        }
        .participation-form-heading::after {
            content: "";
            display: block;
            width: 80px;
            height: 4px;
            background: #fafcff;
            margin: 10px auto;
            border-radius: 5px;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .participation-form-heading:hover::after {
            transform: scaleX(1);
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
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
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-group .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(38, 143, 255, 0.25);
            transform: scale(1.02);
        }
        .form-group .form-control::placeholder {
            color: black;
        }
        .participation-form-button {
            background: linear-gradient(45deg, #28a745, #218838);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            padding: 15px 25px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
            display: block;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            overflow: hidden;
            border: 2px solid transparent;
        }
        .participation-form-button::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255,255,255,0.2);
            transform: rotate(-30deg);
            transition: transform 0.4s ease;
        }
        .participation-form-button:hover::before {
            transform: rotate(30deg);
        }
        .participation-form-button:hover {
            background: linear-gradient(45deg, #218838, #1e7e34);
            transform: translateY(-2px);
        }
        .participation-form-button:active {
            background: linear-gradient(45deg, #1e7e34, #1c7430);
            transform: translateY(0);
        }
        @media (max-width: 768px) {
            .participation-form-heading {
                font-size: 2rem;
            }
            .participation-form-button {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>

<div class="container" style="width:100%; background-color:rgb(253, 238, 187);
">
    <div class="row justify-content-center">)
        <div class="col-lg-8">'
            <div class="participation-form-container">
                <h class="participation-form-heading">Participate & Win Amazing Rewards!</h>
                <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf



                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control"name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number:</label>
                        <input type="tel" class="form-control" name="number" id="contact" placeholder="Enter your contact number" required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control"  name="address"id="address" placeholder="Enter your address" required>
                    </div> --}}
                    <div class="form-group">
                        <label for="age_group">Age Group:</label>
                        <select class="form-control" name="age" id="age_group" required style="background-color: white !important; color: #000; border: 1px solid #ced4da;">
                            <option value="">Select Age Group</option>
                            <option value="5-15Age">5 to 15 years</option>
                            <option value="15+ Above">15 years and above</option>
                        </select>
                    </div>

                                        <div class="form-group">
                                            <label for="game_category">Video Category:</label>
                                            <select class="form-control" name="game_category" id="game_category" required style="background-color: white !important; color: #000; border: 1px solid #ced4da;">
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

                    <script>
                    document.getElementById('game_category').addEventListener('change', function() {
                        var customCategoryGroup = document.getElementById('custom_category_group');
                        if (this.value === 'custom') {
                            customCategoryGroup.style.display = 'block';
                        } else {
                            customCategoryGroup.style.display = 'none';
                        }
                    });
                    </script>




<div class="form-group">
    <label for="video">Your Gaming Video:</label>
    <input type="file" class="form-control" name="logo" id="video" placeholder="Gaming Video" required
           style="background-color: white;  color: black;">
</div>

<div class="progress" style="display:none;" id="uploadProgress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" id="progressBar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                    <div class="form-group">
                        <label for="message">Additional Information:</label>
                        <textarea class="form-control" id="message"name="message" rows="4" placeholder="Any additional information or comments" required></textarea>
                    </div>
                    <button type="submit" class="participation-form-button">Submit & Participate</button>
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
</script>

<script>





document.addEventListener('DOMContentLoaded', function () {
  const flashMessage = document.getElementById('flashMessage');
  const form = document.getElementById('form');

  if (flashMessage) {
    flashMessage.style.display = 'block';
    form.scrollIntoView({ behavior: 'smooth', block: 'center' });


    setTimeout(function () {
      flashMessage.style.opacity = '0';
      setTimeout(function () {
        flashMessage.style.display = 'none';
      }, 500); // Delay to match the opacity transition
    }, 5000); // Adjust the time as needed
  }
});

function closeFlashMessage() {
  const flashMessage = document.getElementById('flashMessage');
  if (flashMessage) {
    flashMessage.style.opacity = '0';
    setTimeout(function () {
      flashMessage.style.display = 'none';
    }, 500);
  }
}
</script>
 <script>
document.addEventListener('DOMContentLoaded', function () {
    const flashMessage = document.getElementById('flashMessage');

    if (flashMessage) {
      // Show the flash message
      flashMessage.style.display = 'block';

      // Auto-hide after 5 seconds
      setTimeout(function () {
        flashMessage.style.opacity = '0'; // Fade out
        setTimeout(function () {
          flashMessage.style.display = 'none'; // Hide completely after fade out
        }, 500); // Wait for fade-out transition (0.5s)
      }, 5000); // Adjust the time (5000ms = 5 seconds)
    }
  });

  // Manual close function
  function closeFlashMessage() {
    const flashMessage = document.getElementById('flashMessage');
    if (flashMessage) {
      flashMessage.style.opacity = '0'; // Fade out
      setTimeout(function () {
        flashMessage.style.display = 'none'; // Hide after fade out
      }, 0); // Wait for fade-out transition
    }
  }

  document.getElementById('video').addEventListener('change', function() {
    const file = this.files[0];

    if (file) {
        const formData = new FormData();
        formData.append('video', file);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/your-upload-route', true); // Replace with your upload route

        // Show the progress bar
        const uploadProgress = document.getElementById('uploadProgress');
        const progressBar = document.getElementById('progressBar');
        uploadProgress.style.display = 'block';

        xhr.upload.onprogress = function(event) {
            if (event.lengthComputable) {
                const percentComplete = (event.loaded / event.total) * 100;
                progressBar.style.width = percentComplete + '%';
                progressBar.setAttribute('aria-valuenow', percentComplete);
                progressBar.textContent = Math.round(percentComplete) + '%'; // Display percentage text
            }
        };

        xhr.onload = function() {
            if (xhr.status === 200) {
                // Handle successful upload (show success message, etc.)
                console.log('Upload successful!');
                // Optionally reset the progress bar after successful upload
                progressBar.style.width = '0%';
                progressBar.textContent = '';
                uploadProgress.style.display = 'none'; // Hide the progress bar
            } else {
                // Handle error
                console.error('Upload failed:', xhr.responseText);
                // Optionally show an error message
            }
        };

        xhr.onerror = function() {
            console.error('Request failed. Please try again.');
            // Optionally show an error message
        };

        xhr.send(formData);
    }
});


</script>
<style>
.progress {
    height: 20px;
    margin-top: 10px;
}

.progress-bar {
    background-color: #007bff; /* Bootstrap primary color */
}



.flash-message {
    display: none; /* Initially hidden */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    background: black; /* New gradient */
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
    z-index: 1000;
    transition: opacity 0.5s ease; /* Smooth fade out */
    opacity: 1; /* Ensure visibility when shown */
}

.flash-message h2 {
    margin-bottom: 1rem;
    color: rgba(255, 255, 255, 0.9); /* White text to contrast with the gradient */
}

.flash-message p {
    margin-bottom: 2.5rem;
    color:white; /* Softer white for the paragraph */
}

.flash-message img {
    height: 10rem;
    width: 10rem;
    display: block;
    margin: 0 auto;
    margin-bottom: 1rem;
}

.flash-message button {
    background-color: rgba(255, 255, 255, 0.9); /* Light button color */
    border: none;
    color: darkcyan;
    padding: 10px 20px;
    font-size: 15px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.flash-message button:hover {
    background-color: rgba(255, 255, 255, 0.7);
    color: black;
}


</style>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>



@endsection

@section('style')

@endsection
@section('script')

@endsection
