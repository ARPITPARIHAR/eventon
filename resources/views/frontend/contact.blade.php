
@extends('frontend.layouts.app')
@section('meta_title','Our Gallery | '.env('APP_NAME'))
@section('meta_description','Our Gallery | '.env('APP_NAME'))
@section('content')
<div class="container-fluid py-5" ">
    <div class="container py-5" >
        <div class="p-5 bg-light rounded" style="background-color: #7a114f !important;">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius" style="color:white;">Contact Us</h4>



                <p class="mb-5" style="color:white;">If you have any query. feel free to text us</a>.</p>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                        <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                        <div class="">
                            <h4>Address</h4>
                            <p class="mb-2">Bikaner </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                        <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                        <div class="">
                            <h4>Mail Us</h4>
                            <p class="mb-2">creatorsindiahub@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex w-100 border border-primary p-4 rounded bg-white">
                        <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                        <div class="">
                            <h4>Telephone</h4>
                            <p class="mb-2"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <input type="text" class="w-100 form-control py-3 mb-5 border-primary" name="name" placeholder="Your Name" required>
                        <input type="email" class="w-100 form-control py-3 mb-5 border-primary" name="email" placeholder="Enter Your Email" required>
                        <textarea class="w-100 form-control mb-5 border-primary" rows="8" cols="10" name="message" placeholder="Your Message" required></textarea>
                        <button class="w-100 btn btn-primary form-control py-3 border-primary text-white bg-primary" type="submit">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="border border-primary h-100 rounded">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d220.18644260501418!2d73.34259678603189!3d27.994414007983714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1687893595114!5m2!1sen!2sin"
                        class="w-100 h-100 rounded" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
<div id="flashMessage" class="flash-message">
  <img src="{{ asset('Img/successful.png') }}" alt="Success">
  <h2><strong>Thank You!!!</strong></h2>
  <p>{{ session('success') }}</p>
  <button onclick="closeFlashMessage()">Close</button>
</div>
@endif

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
        }, 150); // Wait for fade-out transition (0.5s)
      }, 1500); // Adjust the time (5000ms = 5 seconds)
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


</script>
<style>
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
    margin-bottom: 2rem;
    color: rgba(255, 255, 255, 0.8); /* Softer white for the paragraph */
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
@endsection

@section('style')

@endsection
@section('script')

@endsection
