<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto; /* Top margin for better positioning */
            padding: 30px; /* Increased padding for more space inside the modal */
            border: 1px solid #888;
            width: 90%; /* Increased width for a wider modal */
            max-width: 800px; /* Set a maximum width for large screens */
            border-radius: 8px; /* Optional: adds rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional: adds shadow for depth */
            position: relative; /* Position relative for close button positioning */
        }

        .close-button {
            color: #aaa; /* Default color */
            position: absolute; /* Position absolute to place it relative to modal */
            top: 10px; /* Adjust to desired vertical position */
            right: 20px; /* Adjust to desired horizontal position */
            font-size: 28px; /* Size of the close button */
            font-weight: bold; /* Bold text */
            cursor: pointer; /* Hand cursor on hover */
            transition: color 0.3s; /* Transition effect for color */
        }

        .close-button:hover,
        .close-button:focus {
            color: #000; /* Color on hover */
            text-decoration: none; /* Remove underline */
            cursor: pointer; /* Hand cursor */
        }
    </style>
</head>
<body>

    <!-- Your Content Here -->

    <!-- Modal HTML -->
    <div id="competitionModal" class="modal">
        <div class="modal-content">
            <span class="close-button" aria-label="Close">&times;</span>
            <h2 style="text-align: center; font-size: 2.25rem; color: rgba(176, 9, 9, 0.836); margin: 0; font-weight: bold;">
                Creators India YouTube Video Diwali Competition 2024
            </h2>
            <p style="text-align: justify; font-size: 1.0rem; color: black;">
                Join us for our exciting Creators India YouTube Video Diwali Competition 2024! 🎆✨ In this Competition, we celebrate the spirit of Diwali with multiple categories showcasing the incredible creativity and talent of our participants.
            </p>
            <p style="text-align: justify; font-size: 1.0rem; color: black;">
                🕯️ Join the Festivities: Immerse yourself in the joy of Diwali and celebrate with us! Don't forget to like, share, and subscribe for more festive content, updates, and to find out who takes home the top prizes!
            </p>
            <p style="text-align: justify; font-size: 1.0rem; color: black;">
                🎉 Winners Announcement: Stay tuned until the end for the exciting winners announcement and a special surprise!
            </p>
        </div>
    </div>

    <!-- JavaScript to Control Modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('competitionModal');
            var closeButton = document.querySelector('.close-button');

            // Show the modal unconditionally for testing
            modal.style.display = "block";

            // Close the modal when the user clicks on the close button
            closeButton.onclick = function() {
                modal.style.display = "none";
            };

            // Close the modal when the user clicks anywhere outside of the modal
            window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            };
        });
    </script>

</body>
</html>
