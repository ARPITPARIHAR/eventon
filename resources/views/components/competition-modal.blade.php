<div id="competitionModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2 style="text-align: center; font-size: 2.25rem; color: rgba(176, 9, 9, 0.836); margin: 0; font-weight: bold;">Creators India YouTube Video Diwali Competition 2024</h2>
        <p style="text-align: justify; font-size: 1.0rem; color: black;">Join us for our exciting Creators India YouTube Video Diwali Competition 2024! 🎆✨ In this Competition, we celebrate the spirit of Diwali with multiple categories showcasing the incredible creativity and talent of our participants.</p>
        <p style="text-align: justify; font-size: 1.0rem; color: black;">🕯️ Join the Festivities: Immerse yourself in the joy of Diwali and celebrate with us! Don't forget to like, share, and subscribe for more festive content, updates, and to find out who takes home the top prizes!</p>
        <p style="text-align: justify; font-size: 1.0rem; color: black;">🎉 Winners Announcement: Stay tuned until the end for the exciting winners announcement and a special surprise!</p>
    </div>
</div>


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
    }

    .modal-content p {
        color: black; /* Set text color to black */
        font-size: 1.0rem; /* Increased font size for better readability */
        text-align: justify; /* Justify text */
    }

    .close-button {
        position: absolute; /* Position it absolutely */
        top: 10px; /* Adjust top position */
        right: 10px; /* Adjust right position */
        color: black;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer; /* Change cursor to pointer */
    }

    .close-button:hover,
    .close-button:focus {
        color: black;
        text-decoration: none;
    }


    @media (max-width: 768px) {
        .modal-content h2 {
            font-size: 1.75rem; /* Smaller font size for tablets and phones */
        }

        .modal-content p {
            font-size: 0.9rem; /* Smaller paragraph font size */
        }
    }

    @media (max-width: 480px) {
        .modal-content h2 {
            font-size: 1.5rem; /* Even smaller font size for mobile */
        }

        .modal-content p {
            font-size: 0.8rem; /* Smaller paragraph font size */
        }
    }


    </style>


<script>
// resources/js/app.js
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('competitionModal');
    var closeButton = document.querySelector('.close-button');

    // Show the modal
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
