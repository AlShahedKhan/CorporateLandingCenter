<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corporate Landing Center</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/style.css">
    <style>
        /* Custom Styling for Navbar */
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
        }

        h3 {
            color: white;
            font-weight: bold;
        }

        a {
            text-decoration: none;
            /* Removes the underline */
        }



        .apply-now-btn-2 {
            background-color: #5e72e4;
            color: white;
            border: none;
            padding: 100px;
            /* Adjusted padding for a button size of 350px */
            border-radius: 50%;
            /* Ensures the button is circular */
            font-size: 2.8rem;
            /* Slightly larger font size for better proportion */
            font-weight: bold;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 350px;
            /* Set width to 350px */
            height: 350px;
            /* Set height to 350px */
        }

        .apply-now-btn-2:hover {
            background-color: #4c63d2;
            transform: scale(1.1);
            /* Slightly enlarges on hover */
        }

        /* Small image class */
        .img-small {
            width: 80%;
            /* Adjust the width to make it smaller */
            max-width: 150px;
            /* Set a max-width for the images */
            height: auto;
            /* Maintain the aspect ratio */
            display: block;
            /* Make the image a block-level element */
            margin: 0 auto;
            /* Center the image horizontally */
        }

        /* Custom CSS */
        .custom-section {
            background-image: url('{{ asset('storage/logo/handshake.jpg') }}');
            /* Set the background image */
            background-size: cover;
            /* Ensure the image covers the full area */
            background-position: center;
            /* Center the background image */
            background-repeat: no-repeat;
            /* Prevent repeating the image */
            padding: 30px 0;
            /* Add padding to the section to give it some space */
        }

        .first-card {
            width: 100%;
            /* Make the card take full width */
            height: 50vh;
            /* Let the card's height adjust based on content */
            background: rgba(0, 0, 0, 0.4);
            /* Optional: Adds a semi-transparent overlay for readability */
        }


        .need-card {
            width: 100%;
            /* Make the card take full width */
            height: 60vh;
            /* Let the card's height adjust based on content */
            background: rgba(241, 238, 238, 0.5);
            /* Optional: Adds a semi-transparent overlay for readability */
            padding-top: 30px;
        }

        .card-title-white {
            color: white
        }

        .carousel-item .carousel-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 100%;
            background-color: #dbeafe;
            margin-top: 5%;
            border-radius: 10px;
            /* This rounds the corners */
            overflow: hidden;
            /* Prevents content from overflowing the rounded corners */
        }


        /* Optional: Style the image */
        .carousel-item img {
            margin-top: 4%;
            width: 10%;
            /* Adjust width as needed */
            margin-bottom: 12%;
            /* Add space between the image and the text */
        }

        /* Optional: Style the caption text */
        .carousel-caption h5 {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 1rem;
        }

        .funding-specialist {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-color: #dbeafe;
            /* Set background to blue */
            margin-top: 40px;
            /* Add top margin */
            padding: 40px;
            /* Optional: Add padding for better spacing */
        }

        .funding-specialist h1 {
            text-align: center;
            color: black;
            /* Make text color white for contrast against blue background */
        }

        .funding-specialist h1:nth-child(2) {
            margin-left: 25%;
            /* Optional: Adjust space between the two <h1> elements */
        }


        /* Custom CSS */
        .last-section {
            background-color: rgb(65, 105, 225);

            /* Set the background image */
            background-size: cover;
            /* Ensure the image covers the full area */
            background-position: center;
            /* Center the background image */
            background-repeat: no-repeat;
            /* Prevent repeating the image */
            padding: 30px 0;
            /* Add padding to the section to give it some space */
        }

        .last-card {
            width: 100%;
            /* Make the card take full width */
            height: 36vh;
            /* Let the card's height adjust based on content */
            background: rgba(0, 0, 0, 0.5);
            /* Optional: Adds a semi-transparent overlay for readability */
            align-items: center;
        }

        /* .footer-section{
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
        } */

        /* .last-card {
            width: 100%;
            height: 35vh;
            background: rgba(0, 0, 0, 0.5);
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;
        } */

        .border-top {
            border-top: 2px solid #ccc;
            /* Change the color and thickness */
        }

        .hero {
            background-image: url("{{ asset('storage/logo/happy-businessman-calling.jpg') }}");
            background-size: cover;
            /* Ensures the full image is visible */
            background-position: center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents image repetition */
            width: 100%;
            /* Full width of the container */
            height: 80vh;
            /* Fixed height, adjust as needed */
            background-color: #000;
            /* Fallback background color */
            background-blend-mode: screen;
            /* Experiment with other blend modes if needed */
            position: relative;
        }

        .hero .hero-text {
            position: relative;
            z-index: 60;
        }



        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.1);
            /* Adds a slight dark overlay */
            z-index: 1;
        }

        .hero-container {
            display: flex;
            align-items: center;
            justify-content: end;
            height: 100%;
        }

        .hero-container .hero-text {
            width: 60%
        }

        .hero-container .hero-text h2 {
            color: #fff;
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .hero-text {
            /* background-color: black */
            backdrop-filter: blur(12px);
            background-color: rgba(0, 0, 0, 0.3);
            flood-opacity: 0.5;
            color: whitesmoke;
            text-align: center;
            padding: 20px 15px;
            border-radius: 20px;
            left: 200px;
            /* Adjust this value to shift it more */

        }

        .hero-container .hero-text p {
            color: #fff;
            margin-bottom: 32px;
        }

        .text-details {
            text-align: center;
            margin-left: 55%;
            padding-top: 325px;
            color: #FF5733
        }

        .img-quick {
            width: 20%;
            /* text-align: center; */

            /* Adjust the width to make it smaller */
            max-width: 150px;
            /* Set a max-width for the images */
            height: auto;
            /* Maintain the aspect ratio */
            display: block;
            /* Make the image a block-level element */
            margin: 0 auto;
            /* Center the image horizontally */
        }

        .before-footer {
            display: flex;
            flex-direction: row;
        }

        .col-md-3-div {
            flex: 0 0 25%;
            /* Take up 25% of the container width */
            max-width: 25%;
            /* Ensure the column doesn't exceed 25% width */
            box-sizing: border-box;
            /* Include padding and border in the width calculation */
            padding: 15px;
            /* Match Bootstrap's gutter spacing */
        }

        /* Extra Small (xs) - max-width: 575.98px (portrait mobile) */
        /* Extra Small (xs) - max-width: 575.98px (portrait mobile) */
        @media (min-width: 320px) and (max-width: 374px) {




            .hero {
                background-image: url(http://corporatelandingcenter.test/storage/logo/happy-businessman-calling.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 65vh;
                background-color: #000;
                background-blend-mode: screen;
                position: relative;
            }

            .hero-text {
                backdrop-filter: blur(12px);
                background-color: rgba(0, 0, 0, 0.1);
                color: whitesmoke;
                text-align: center;
                padding: 20px 15px;
                border-radius: 20px;
                margin-top: 285px;
                height: 215px;
                width: 100%;
                box-sizing: border-box;
                transform: translateX(-205px);
            }

            /* used */
            .brand-container {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: 23px;
            }

            .hero-container .hero-text h2 {
                color: #fff;
                font-size: 1.6rem;
                font-weight: bold;
            }

            .hero-container .hero-text h3 {
                color: #fff;
                font-size: 1.2rem;
                font-weight: bold;
            }

            .hero-container .hero-text h3 {
                color: #fff;
                font-size: 1rem;
                font-weight: bold;
            }

            .btn-primary {
                color: #fff;
                background-color: #0d6efd;
                border-color: #0d6efd;
                padding: 0.2rem 0.4rem;
                /* Very small padding */
                font-size: 0.75rem;
                /* Smaller font size (12px) */
                border-radius: 0.15rem;
                /* Optional: Sharper edges for a smaller button */
            }



            .apply-now-btn-2 {
                background-color: #5e72e4;
                color: white;
                border: none;
                padding: 33px;
                border-radius: 50%;
                font-size: 0.8rem;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: background-color 0.3s ease, transform 0.3s ease;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 65px;
                height: 64px;
            }


            .we-understand {
                font-size: 1.2rem;
            }

            .we-understand-p {
                margin-top: -16px;
                font-size: 0.9rem;
            }

            .need-card .card-title {
                font-size: 0.9rem;
                margin-bottom: -2px;
            }

            .img-fluid {
                max-width: 75%;
                height: auto;
            }



            .apply-now-btn {
                background-color: #ffa500;
                color: #1a1a1a;
                padding: 10px 8px;
                border-radius: 21px;
                font-size: 12px;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 0px;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }

            .card .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .card .col-md-3 {
                flex: 0 0 48%;
                /* Adjusts the width to 48% (slightly less than 50% for spacing) */
                max-width: 48%;
                /* Ensures the column never exceeds 48% width */
                margin-bottom: 20px;
                /* Adds spacing between the rows */
            }

            .card .img-small {
                width: 40%;
                height: auto;
            }

            /* For images, reduce the width and adjust max-width */
            .img-quick {
                width: 48%;
                /* Adjust to show two images in one line */
                max-width: 60px;
                /* Reduce max-width for smaller screens */
            }

            /* For the grid columns, ensure two images per row */
            .col-md-4 {
                width: 48%;
                /* Make columns take up 48% of the width */
                margin-bottom: 10px;
                /* Add some space between rows */
            }

            .need-card {
                width: 100%;
                height: 79vh;
                background: rgba(241, 238, 238, 0.5);
                padding-top: 30px;
            }

            .custom-section {
                background-image: url(http://corporatelandingcenter.test/storage/logo/handshake.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                padding: 30px 0;
                height: 88ch;
            }

            .first-card {
                width: 100%;
                /* Make the card take full width */
                height: 85vh;
                /* Let the card's height adjust based on content */
                background: rgba(0, 0, 0, 0.4);
                /* Optional: Adds a semi-transparent overlay for readability */
            }

            .carousel-item img {
                margin-top: 4%;
                width: 25%;
                margin-bottom: 54%;
            }

            .funding-specialist {
                padding: 20px;
                height: 12ch;
                display: flex;
                flex-direction: column;
            }

            .funding-specialist h1 {
                font-size: 18px;
                /* Adjust font size for smaller screens */
                margin: 5px 0;
                /* Add margin between lines */
                width: 100%;
                /* Ensure h1 elements take the full width */
                text-align: center;
                /* Center text inside each h1 */
                white-space: normal;
                /* Allow text to wrap to the next line */
            }

            .funding-specialist .phone {
                margin-right: 75px;
            }

            .last-section {
                height: 108ch;
            }



            .card-body {
                display: flex;
                /* Use flexbox to stack items */
                flex-direction: column;
                /* Stack items vertically */
            }

            .title-footer {
                width: 100%;
                /* Each item takes full width */
                margin-bottom: 10px;
                /* Optional: Space between items */
                text-align: center;
            }

            .hero-container .hero-text {
                width: 95%;

            }

            .carousel-item .carousel-content {
                height: 35ch;
            }



            .card-title-white {
                font-size: 1rem;
                /* Adjust font size for readability */
                line-height: 1.5;
                /* Improve line height for better readability */
                color: #ffffff;
                /* Keep text white */
            }

            .card-body h3 {
                font-size: 1.2rem;
                /* Highlight headings with a larger size */
                font-weight: bold;
                margin-bottom: 0.5rem;
            }

            .card-body h5 {
                font-size: 0.9rem;
                /* Slightly smaller for subheadings */
                margin: 0.2rem 0;
                /* Add spacing between subheading lines */
            }

            .before-footer {
                flex-direction: column;
            }

            .col-md-3-div {
                flex: 0 0 50%;
                /* Take up 50% of the container width */
                max-width: 100%;
                /* Ensure the column doesn't exceed 50% width */
                box-sizing: border-box;
                /* Include padding and border in the width calculation */
                padding: 5px;
                /* Match Bootstrap's gutter spacing */
                text-align: center
            }

            .last-card {
                height: 106vh;
            }


        }

        @media (min-width: 374px) and (max-width: 480px) {
            .hero {
                background-image: url(http://corporatelandingcenter.test/storage/logo/happy-businessman-calling.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 65vh;
                background-color: #000;
                background-blend-mode: screen;
                position: relative;
            }

            .hero-text {
                backdrop-filter: blur(12px);
                background-color: rgba(0, 0, 0, 0.1);
                color: whitesmoke;
                text-align: center;
                padding: 20px 15px;
                border-radius: 20px;
                margin-top: 285px;
                height: 215px;
                width: 100%;
                box-sizing: border-box;
                transform: translateX(-205px);
            }

            /* used */
            .hero-container .hero-text h2 {
                font-size: 1.9rem;
            }

            /* used */
            .hero-container .hero-text h3 {
                font-size: 1.1rem;
            }

            /* used */
            .btn-primary {
                color: #fff;
                background-color: #0d6efd;
                border-color: #0d6efd;
                padding: 0.2rem 0.8rem;
                font-size: 0.75rem;
                border-radius: 0.15rem;
            }


            /* used */
            .apply-now-btn-2 {
                background-color: #5e72e4;
                color: white;
                border: none;
                padding: 33px;
                border-radius: 50%;
                font-size: 0.8rem;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: background-color 0.3s ease, transform 0.3s ease;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 80px;
                height: 80px;
            }


            .we-understand-p {
                margin-top: -16px;
                font-size: 0.8rem;
            }

            .need-card .card-title {
                font-size: 0.9rem;
                margin-bottom: -2px;
            }

            .img-fluid {
                max-width: 275px;
                height: auto;
            }

            /* used */
            .apply-now-btn {
                background-color: #ffa500;
                color: #1a1a1a;
                padding: 10px 8px;
                border-radius: 21px;
                font-size: 12px;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 0px;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }


            .card .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .card .col-md-3 {
                flex: 0 0 48%;
                /* Adjusts the width to 48% (slightly less than 50% for spacing) */
                max-width: 48%;
                /* Ensures the column never exceeds 48% width */
                margin-bottom: 20px;
                /* Adds spacing between the rows */
            }

            /* used */
            .card .img-small {
                width: 41%;
            }

            /* For images, reduce the width and adjust max-width */
            .img-quick {
                width: 48%;
                /* Adjust to show two images in one line */
                max-width: 60px;
                /* Reduce max-width for smaller screens */
            }

            /* For the grid columns, ensure two images per row */
            .col-md-4 {
                width: 48%;
                /* Make columns take up 48% of the width */
                margin-bottom: 10px;
                /* Add some space between rows */
            }

            /* used */
            .need-card {
                height: 88vh;
            }

            /* used */
            .brand-container {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: 50px;
            }

            /* used */
            .custom-section {
                height: 74ch;
            }

            /* used */
            .first-card {
                height: 70vh;
            }

            .carousel-item img {
                margin-top: 14%;
                width: 23%;
                margin-bottom: 54%;
            }

            .funding-specialist {
                padding: 20px;
                height: 12ch;
                display: flex;
                flex-direction: column;
            }

            .funding-specialist h1 {
                font-size: 18px;
                /* Adjust font size for smaller screens */
                margin: 5px 0;
                /* Add margin between lines */
                width: 100%;
                /* Ensure h1 elements take the full width */
                text-align: center;
                /* Center text inside each h1 */
                white-space: normal;
                /* Allow text to wrap to the next line */
            }

            .funding-specialist .phone {
                margin-right: 75px;
            }

            .last-section {
                height: 108ch;
            }



            .card-body {
                display: flex;
                /* Use flexbox to stack items */
                flex-direction: column;
                /* Stack items vertically */
            }

            .title-footer {
                width: 100%;
                /* Each item takes full width */
                margin-bottom: 10px;
                /* Optional: Space between items */
                text-align: center;
            }

            .hero-container .hero-text {
                width: 95%;
                height: 221px;
            }

            /* used */
            .carousel-item .carousel-content {
                height: 30ch;
            }



            .card-title-white {
                font-size: 1rem;
                /* Adjust font size for readability */
                line-height: 1.5;
                /* Improve line height for better readability */
                color: #ffffff;
                /* Keep text white */
            }

            .card-body h3 {
                font-size: 1.2rem;
                /* Highlight headings with a larger size */
                font-weight: bold;
                margin-bottom: 0.5rem;
            }

            .card-body h5 {
                font-size: 0.9rem;
                /* Slightly smaller for subheadings */
                margin: 0.2rem 0;
                /* Add spacing between subheading lines */
            }

            .before-footer {
                flex-direction: column;
            }

            .col-md-3-div {
                flex: 0 0 50%;
                /* Take up 50% of the container width */
                max-width: 100%;
                /* Ensure the column doesn't exceed 50% width */
                box-sizing: border-box;
                /* Include padding and border in the width calculation */
                padding: 5px;
                /* Match Bootstrap's gutter spacing */
                text-align: center
            }

            .last-card {
                height: 106vh;
            }

        }

        @media (min-width: 481px) and (max-width: 575px) {
            .hero {
                background-image: url(http://corporatelandingcenter.test/storage/logo/happy-businessman-calling.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 68vh;
                background-color: #000;
                background-blend-mode: screen;
                position: relative;
            }

            .hero-text {
                backdrop-filter: blur(12px);
                background-color: rgba(0, 0, 0, 0.1);
                color: whitesmoke;
                text-align: center;
                padding: 20px 15px;
                border-radius: 20px;
                margin-top: 285px;
                height: 215px;
                width: 100%;
                box-sizing: border-box;
                transform: translateX(-205px);
            }

            /* used */
            .hero-container .hero-text h2 {
                font-size: 2.5rem;
            }

            /* used */
            .hero-container .hero-text h3 {
                font-size: 1.5rem;
            }

            /* used */
            .btn-primary {
                padding: 0.5rem 1.7rem;
                font-size: 0.80rem;
                border-radius: 82.15rem;
            }


            /*  */
            .apply-now-btn-2 {
                background-color: #5e72e4;
                color: white;
                border: none;
                padding: 33px;
                border-radius: 50%;
                font-size: 0.8rem;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: background-color 0.3s ease, transform 0.3s ease;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 95px;
                height: 95px;
            }


            .we-understand-p {
                margin-top: -16px;
                font-size: 1rem;
            }

            .need-card .card-title {
                font-size: 0.9rem;
                margin-bottom: -2px;
            }

            .img-fluid {
                max-width: 75%;
                height: auto;
            }

            /* used */
            .apply-now-btn {
                background-color: #ffa500;
                color: #1a1a1a;
                padding: 12px 14px;
                border-radius: 21px;
                font-size: 12px;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 0px;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }


            .card .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .card .col-md-3 {
                flex: 0 0 48%;
                /* Adjusts the width to 48% (slightly less than 50% for spacing) */
                max-width: 48%;
                /* Ensures the column never exceeds 48% width */
                margin-bottom: 20px;
                /* Adds spacing between the rows */
            }

            /* used */
            .card .img-small {
                width: 41%;
            }

            /* For images, reduce the width and adjust max-width */
            .img-quick {
                width: 48%;
                /* Adjust to show two images in one line */
                max-width: 60px;
                /* Reduce max-width for smaller screens */
            }

            /* For the grid columns, ensure two images per row */
            .col-md-4 {
                width: 48%;
                /* Make columns take up 48% of the width */
                margin-bottom: 10px;
                /* Add some space between rows */
            }

            /* used */
            .need-card {
                height: 90vh;
            }

            /* used */
            .brand-container {
                margin-left: 95px;
            }

            /* used */
            .custom-section {
                height: 74ch;
            }

            /* used */
            .first-card {
                height: 70vh;
            }

            .carousel-item img {
                margin-top: 14%;
                width: 19%;
                margin-bottom: 44%;
            }

            .funding-specialist {
                padding: 20px;
                height: 12ch;
                display: flex;
                flex-direction: column;
            }

            .funding-specialist h1 {
                font-size: 18px;
                /* Adjust font size for smaller screens */
                margin: 5px 0;
                /* Add margin between lines */
                width: 100%;
                /* Ensure h1 elements take the full width */
                text-align: center;
                /* Center text inside each h1 */
                white-space: normal;
                /* Allow text to wrap to the next line */
            }

            .funding-specialist .phone {
                margin-right: 120px;
            }

            .last-section {
                height: 103ch;
            }



            .card-body {
                display: flex;
                /* Use flexbox to stack items */
                flex-direction: column;
                /* Stack items vertically */
            }

            .title-footer {
                width: 100%;
                /* Each item takes full width */
                margin-bottom: 10px;
                /* Optional: Space between items */
                text-align: center;
            }

            .hero-container .hero-text {
                width: 95%;
                height: 275px;
            }

            /* used */
            .carousel-item .carousel-content {
                height: 30ch;
            }



            .card-title-white {
                font-size: 1rem;
                /* Adjust font size for readability */
                line-height: 1.5;
                /* Improve line height for better readability */
                color: #ffffff;
                /* Keep text white */
            }

            .card-body h3 {
                font-size: 1.2rem;
                font-weight: bold;
            }

            .card-body h5 {
                font-size: 0.9rem;
                /* Slightly smaller for subheadings */
                margin: 0.2rem 0;
                /* Add spacing between subheading lines */
            }

            .before-footer {
                flex-direction: column;
            }

            .col-md-3-div {
                flex: 0 0 50%;
                /* Take up 50% of the container width */
                max-width: 100%;
                /* Ensure the column doesn't exceed 50% width */
                box-sizing: border-box;
                /* Include padding and border in the width calculation */
                padding: 5px;
                /* Match Bootstrap's gutter spacing */
                text-align: center
            }

            .last-card {
                height: 101vh;
            }

            .we-understand {
                font-size: 1.9rem;
            }

        }

        /* Small (sm) - min-width: 576px and max-width: 767px (small devices like tablets in portrait mode) */
        @media (min-width: 576px) and (max-width: 767px) {
            .hero {
                background-image: url(http://corporatelandingcenter.test/storage/logo/happy-businessman-calling.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 68vh;
                background-color: #000;
                background-blend-mode: screen;
                position: relative;
            }

            .hero-text {
                backdrop-filter: blur(12px);
                background-color: rgba(0, 0, 0, 0.1);
                color: whitesmoke;
                text-align: center;
                padding: 20px 15px;
                border-radius: 20px;
                margin-top: 285px;
                height: 215px;
                width: 100%;
                box-sizing: border-box;
                transform: translateX(-205px);
            }

            /* used */
            .hero-container .hero-text h2 {
                font-size: 2.5rem;
            }

            /* used */
            .hero-container .hero-text h3 {
                font-size: 1.5rem;
            }

            /* used */
            .btn-primary {
                padding: 0.5rem 1.7rem;
                font-size: 0.80rem;
                border-radius: 82.15rem;
            }


            /*  */
            .apply-now-btn-2 {
                background-color: #5e72e4;
                color: white;
                border: none;
                padding: 33px;
                border-radius: 50%;
                font-size: 0.8rem;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: background-color 0.3s ease, transform 0.3s ease;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 105px;
                height: 105px;
            }


            .we-understand-p {
                margin-top: -16px;
                font-size: 1rem;
            }

            .need-card .card-title {
                font-size: 0.9rem;
                margin-bottom: -2px;
            }

            .img-fluid {
                max-width: 75%;
                height: auto;
            }

            /* used */
            .apply-now-btn {
                background-color: #ffa500;
                color: #1a1a1a;
                padding: 12px 18px;
                border-radius: 21px;
                font-size: 12px;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 0px;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }


            .card .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .card .col-md-3 {
                flex: 0 0 48%;
                /* Adjusts the width to 48% (slightly less than 50% for spacing) */
                max-width: 48%;
                /* Ensures the column never exceeds 48% width */
                margin-bottom: 20px;
                /* Adds spacing between the rows */
            }

            /* used */
            .card .img-small {
                width: 41%;
            }

            /* For images, reduce the width and adjust max-width */
            .img-quick {
                width: 48%;
                /* Adjust to show two images in one line */
                max-width: 60px;
                /* Reduce max-width for smaller screens */
            }

            /* For the grid columns, ensure two images per row */
            .col-md-4 {
                width: 48%;
                /* Make columns take up 48% of the width */
                margin-bottom: 10px;
                /* Add some space between rows */
            }

            /* used */
            .need-card {
                height: 101vh;
            }

            /* used */
            .brand-container {
                margin-left: 131px;
            }

            /* used */
            .custom-section {
                height: 74ch;
            }

            /* used */
            .first-card {
                height: 70vh;
            }

            .carousel-item img {
                margin-top: 23%;
                width: 19%;
                margin-bottom: 44%;
            }

            .funding-specialist {
                padding: 20px;
                height: 12ch;
                display: flex;
                flex-direction: column;
            }

            .funding-specialist h1 {
                font-size: 18px;
                /* Adjust font size for smaller screens */
                margin: 5px 0;
                /* Add margin between lines */
                width: 100%;
                /* Ensure h1 elements take the full width */
                text-align: center;
                /* Center text inside each h1 */
                white-space: normal;
                /* Allow text to wrap to the next line */
            }

            .funding-specialist .phone {
                margin-right: 160px;
            }

            .last-section {
                height: 119ch;
            }



            .card-body {
                display: flex;
                /* Use flexbox to stack items */
                flex-direction: column;
                /* Stack items vertically */
            }

            .title-footer {
                width: 100%;
                /* Each item takes full width */
                margin-bottom: 10px;
                /* Optional: Space between items */
                text-align: center;
            }

            .hero-container .hero-text {
                width: 100%;
                height: 253px;
            }

            /* used */
            .carousel-item .carousel-content {
                height: 30ch;
            }



            .card-title-white {
                font-size: 1.2rem;
                line-height: 1.5;
                color: #ffffff;
            }

            .card-body h3 {
                font-size: 1.7rem;
                font-weight: bold;
            }

            .card-body h5 {
                font-size: 1.2rem;
                margin: 0.2rem 0;
            }

            .before-footer {
                flex-direction: column;
            }

            .col-md-3-div {
                flex: 0 0 50%;
                /* Take up 50% of the container width */
                max-width: 100%;
                /* Ensure the column doesn't exceed 50% width */
                box-sizing: border-box;
                /* Include padding and border in the width calculation */
                padding: 5px;
                /* Match Bootstrap's gutter spacing */
                text-align: center
            }

            .last-card {
                height: 118vh;
            }

            .we-understand {
                font-size: 1.9rem;
            }

        }

        /* Medium (md) - min-width: 768px and max-width: 991px (tablets and small laptops) */
        @media (min-width: 768px) and (max-width: 991px) {
            .hero {
                background-image: url(http://corporatelandingcenter.test/storage/logo/happy-businessman-calling.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 68vh;
                background-color: #000;
                background-blend-mode: screen;
                position: relative;
            }

            .hero-text {
                backdrop-filter: blur(12px);
                background-color: rgba(0, 0, 0, 0.1);
                color: whitesmoke;
                text-align: center;
                padding: 20px 15px;
                border-radius: 20px;
                margin-top: 285px;
                height: 215px;
                width: 100%;
                box-sizing: border-box;
                transform: translateX(-205px);
            }

            /* used */
            .hero-container .hero-text h2 {
                font-size: 3rem;
            }

            /* used */
            .hero-container .hero-text h3 {
                font-size: 1.6rem;
            }

            /* used */
            .btn-primary {
                padding: 0.5rem 1.7rem;
                font-size: 0.80rem;
                border-radius: 82.15rem;
            }


            /*  */
            .apply-now-btn-2 {
                background-color: #5e72e4;
                color: white;
                border: none;
                padding: 33px;
                border-radius: 50%;
                font-size: 0.8rem;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: background-color 0.3s ease, transform 0.3s ease;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 137px;
                height: 137px;
            }


            .we-understand-p {
                margin-top: -16px;
                font-size: 1.3rem;
            }

            .need-card .card-title {
                font-size: 0.9rem;
                margin-bottom: -2px;
            }

            .img-fluid {
                max-width: 75%;
                height: auto;
            }

            /* used */
            .apply-now-btn {
                background-color: #ffa500;
                color: #1a1a1a;
                padding: 12px 22px;
                border-radius: 21px;
                font-size: 12px;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 0px;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }


            .card .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .card .col-md-3 {
                flex: 0 0 48%;
                /* Adjusts the width to 48% (slightly less than 50% for spacing) */
                max-width: 48%;
                /* Ensures the column never exceeds 48% width */
                margin-bottom: 20px;
                /* Adds spacing between the rows */
            }

            /* used */
            .card .img-small {
                width: 37%;
            }

            /* For images, reduce the width and adjust max-width */
            .img-quick {
                width: 48%;
                /* Adjust to show two images in one line */
                max-width: 60px;
                /* Reduce max-width for smaller screens */
            }

            /* For the grid columns, ensure two images per row */
            .col-md-4 {
                width: 48%;
                /* Make columns take up 48% of the width */
                margin-bottom: 10px;
                /* Add some space between rows */
            }

            /* used */
            .need-card {
                height: 104vh;
                width: 90% !important;
            }

            /* used */
            .brand-container {
                margin-left: 224px;
            }

            /* used */
            .custom-section {
                height: 74ch;
            }

            /* used */
            .first-card {
                height: 71vh;
            }

            .carousel-item img {
                margin-top: 23%;
                width: 15%;
                margin-bottom: 39%;
            }

            .funding-specialist {
                padding: 20px;
                height: 12ch;
                display: flex;
                flex-direction: column;
            }

            .funding-specialist h1 {
                font-size: 18px;
                /* Adjust font size for smaller screens */
                margin: 5px 0;
                /* Add margin between lines */
                width: 100%;
                /* Ensure h1 elements take the full width */
                text-align: center;
                /* Center text inside each h1 */
                white-space: normal;
                /* Allow text to wrap to the next line */
            }

            .funding-specialist .phone {
                margin-right: 160px;
            }

            .last-section {
                height: 119ch;
            }



            .card-body {
                display: flex;
                /* Use flexbox to stack items */
                flex-direction: column;
                /* Stack items vertically */
            }

            .title-footer {
                width: 100%;
                /* Each item takes full width */
                margin-bottom: 10px;
                /* Optional: Space between items */
                text-align: center;
            }

            .hero-container .hero-text {
                width: 100%;
                height: 260px;
            }

            /* used */
            .carousel-item .carousel-content {
                height: 30ch;
            }



            .card-title-white {
                font-size: 1.2rem;
                line-height: 1.5;
                color: #ffffff;
            }

            .card-body h3 {
                font-size: 1.7rem;
                font-weight: bold;
            }

            .card-body h5 {
                font-size: 1.2rem;
                margin: 0.2rem 0;
            }

            .before-footer {
                flex-direction: column;
            }

            .col-md-3-div {
                flex: 0 0 50%;
                /* Take up 50% of the container width */
                max-width: 100%;
                /* Ensure the column doesn't exceed 50% width */
                box-sizing: border-box;
                /* Include padding and border in the width calculation */
                padding: 5px;
                /* Match Bootstrap's gutter spacing */
                text-align: center
            }

            .last-card {
                height: 118vh;
            }

            .we-understand {
                font-size: 2.5rem;
            }
        }

        /* Large (lg) - min-width: 992px and max-width: 1199px (laptops and desktops) */
        @media (min-width: 992px) and (max-width: 1199px) {
            .hero-text {
                backdrop-filter: blur(12px);
                background-color: rgba(0, 0, 0, 0.1);
                color: whitesmoke;
                text-align: center;
                padding: 20px 15px;
                border-radius: 20px;
                margin-top: 300px;
                height: 335px;
                width: 100%;
                /* Full width */
                box-sizing: border-box;
                transform: translateX(-205px);
                /* Moves the element 205px to the left */
            }


            .hero-container .hero-text {
                width: 100%;
            }

            .img-fluid {
                max-width: 75%;
                height: auto;
            }

            .apply-now-btn-2 {
                width: 210px;
                height: 210px;
            }
        }
    </style>
</head>

<body>
    <!-- Top Navbar for Contact Info -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm top-nav">
        <div class="container">
            <div class="head-menu justify-content-between w-100">
                <div class="head-contact-menu">
                    <div class="contact-info me-4">
                        <i class="bi bi-telephone"></i> +1 (914) 384-7924
                    </div>
                    <div class="contact-info">
                        <i class="bi bi-envelope"></i> alex@vantagecapgroup.com
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a class="nav-link apply-now-btn" href="{{ route('apply.create') }}">Apply Now</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="brand-container">
                    {{-- @dd(asset('../../storage/app/public/logo/logo.png')) --}}
                    {{-- <img src="{{ asset('storage/logo/logo.jpg') }}" alt="Brand Logo"> --}}
                    <img src="{{ url('storage/logo/logo.png') }}" class="nav-img" alt="Brand Logo">

                    <!-- Logo Path from Laravel Storage -->
                </div>
            </a>

            <!-- Hamburger Menu for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <section hidden>
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/apply-now') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Apply Now
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </section>

    <div class="hero">

        <div class="hero-container container">
            <div class="hero-overlay"></div>
            <div class="hero-text">
                <h2>Need Funding Fast?</h2>
                <h3>Get $5,000 to 5,000,000</h3>
                <h3>Your time is money</h3>
                <h3>GET HASSLE FREE SAME DAY FUNDING</h3>
                <a href="/apply-now/create" class="btn btn-primary">GET FUNDED NOW!</a>
            </div>
        </div>

    </div>

    <!-- Image Section -->
    <div class="container mt-5 text-center">
        <!-- Background image -->
        {{-- <img src="{{ asset('storage/logo/backImage.jpg') }}" alt="" class="img-fluid mb-4"> --}}


        <!-- Centered image and button -->
        <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
            <img src="{{ asset('storage/logo/image_1.png') }}" alt="" class="img-fluid">
            <a href="{{ route('apply.create') }}" class="apply-now-btn-2">Apply Now</a>
        </div>

        <!-- Heading and text -->
        <h2 class="text-center mb-4 text-primary we-understand">We Understand Your Needs</h2>
        <p class="text-center we-understand-p">Here are just a few of the industries we like</p>
    </div>


    <div class="card need-card" style="width: 100%; max-width: 1200px; margin: auto;">
        <div class="row g-0">
            <!-- First image and content section (First row) -->
            <div class="col-md-3">
                <img class="card-img-top img-small" src="{{ asset('storage/logo/construction.png') }}"
                    alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">CONSTRUCTION</h5>
                    <a href="{{ url('/apply-now/create') }}">learn more</a>
                </div>
            </div>

            <!-- Second image and content section (First row) -->
            <div class="col-md-3">
                <img class="card-img-top img-small" src="{{ asset('storage/logo/bar.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">RESTAURANTS AND BARS</h5>
                    <a href="{{ url('/apply-now/create') }}">learn more</a>
                </div>
            </div>

            <!-- Third image and content section (First row) -->
            <div class="col-md-3">
                <img class="card-img-top img-small" src="{{ asset('storage/logo/health.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">HEALTH CARE</h5>
                    <a href="{{ url('/apply-now/create') }}">learn more</a>
                </div>
            </div>

            <!-- Fourth image and content section (First row) -->
            <div class="col-md-3">
                <img class="card-img-top img-small" src="{{ asset('storage/logo/franchise.png') }}"
                    alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">FRANCHISE</h5>
                    <a href="{{ url('/apply-now/create') }}">learn more</a>
                </div>
            </div>
        </div>

        <!-- Second row starts here -->
        <div class="row g-0">
            <!-- First image and content section (Second row) -->
            <div class="col-md-3">
                <img class="card-img-top img-small" src="{{ asset('storage/logo/transportation.png') }}"
                    alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">TRANSPORTATION</h5>
                    <a href="{{ url('/apply-now/create') }}">learn more</a>
                </div>
            </div>

            <!-- Second image and content section (Second row) -->
            <div class="col-md-3">
                <img class="card-img-top img-small" src="{{ asset('storage/logo/auto.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">AUTO REPAIR</h5>
                    <a href="{{ url('/apply-now/create') }}">learn more</a>
                </div>
            </div>

            <!-- Third image and content section (Second row) -->
            <div class="col-md-3">
                <img class="card-img-top img-small" src="{{ asset('storage/logo/retail.png') }}"
                    alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">RETAIL</h5>
                    <a href="{{ url('/apply-now/create') }}">learn more</a>
                </div>
            </div>

            <!-- Fourth image and content section (Second row) -->
            <div class="col-md-3">
                <img class="card-img-top img-small" src="{{ asset('storage/logo/industry.png') }}"
                    alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">ADDITIONAL INDUSTRIES</h5>
                    <a href="{{ url('/apply-now/create') }}">learn more</a>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-5 custom-section">
        <div class="container-fluid">
            <div class="card first-card">
                <div class="col-12">
                    <!-- Section Heading -->
                    <h2 class="text-white p-3 text-center">WHY PEOPLE CHOOSE US</h2>

                    <!-- Row for the first set of three cards -->
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <img class="card-img-top  img-quick" src="{{ asset('storage/logo/clockw.png') }}"
                                alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title-white">Quick & Easy</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="card-img-top  img-quick" src="{{ asset('storage/logo/cardw.png') }}"
                                alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title-white">Absolute Security</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="card-img-top  img-quick" src="{{ asset('storage/logo/thumbw.png') }}"
                                alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title-white">Quick Approval</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Row for the second set of three cards -->
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <img class="card-img-top  img-quick" src="{{ asset('storage/logo/signalw.png') }}"
                                alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title-white">Low Interest Rates</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="card-img-top  img-quick" src="{{ asset('storage/logo/securityw.png') }}"
                                alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title-white">Personal Security</h5>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <img class="card-img-top img-quick" src="{{ asset('storage/logo/moneyw.png') }}"
                                alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title-white">Same Day Funding</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div style="width: 100%; max-width: 1200px; margin: auto;">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="carousel-content">
                            <!-- Image in the first line -->
                            <img src="{{ asset('storage/logo/coma.png') }}" class="d-block w-10" alt="...">

                            <!-- Caption/Text in the second line -->
                            <div class="carousel-caption d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <div class="carousel-content">
                            <!-- Image in the first line -->
                            <img src="{{ asset('storage/logo/coma.png') }}" class="d-block w-10" alt="...">

                            <!-- Caption/Text in the second line -->
                            <div class="carousel-caption d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <div class="carousel-content">
                            <!-- Image in the first line -->
                            <img src="{{ asset('storage/logo/coma.png') }}" class="d-block w-10" alt="...">

                            <!-- Caption/Text in the second line -->
                            <div class="carousel-caption d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="funding-specialist">
        <h1>Call to speak with a Funding Specialist</h1>
        <h1 class="phone">510 340-9000</h1>
    </section>

    <section class="mt-5 last-section">
        <div class="container-fluid">
            <div class="card last-card">
                <div class="col-12">
                    <!-- Section Heading -->

                    <!-- Row for the first set of three cards -->
                    <div class="before-footer">
                        <div class=" col-md-3-div">
                            <div class="card-body text-left">
                                <p class="card-title-white">Please remember though that how far you go is up to you.
                                    There is no substitute for your own work and effort in succeeding in this business.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3-div">
                            <div class="card-body text-left">
                                <h3 class="card-title-white">Services</h3>
                                <h5 class="card-title-white">Personal Funding</h5>
                                <h5 class="card-title-white">Cash Advance</h5>
                                <h5 class="card-title-white">Lines of credit</h5>
                                <h5 class="card-title-white">Term Loans</h5>
                            </div>
                        </div>
                        <div class="col-md-3-div">
                            <div class="card-body text-left">
                                <h3 class="card-title-white">Corporate Landing Center</h3>
                                <h5 class="card-title-white">510 340-9000</h5>
                                <h5 class="card-title-white">510 660-8002</h5>
                                <h5 class="card-title-white">eroger510@aol.com</h5>
                                <h5 class="card-title-white">www.corpLanding.net</h5>
                            </div>
                        </div>
                        <div class="col-md-3-div">
                            <div class="card-body text-left">
                                <h3 class="card-title-white">Open Hours</h3>
                                <h5 class="card-title-white">Monday - Friday: 09:00 am - 8:00 pm</h5>
                                <h5 class="card-title-white">Saturday: Set by Appointment</h5>
                                <h5 class="card-title-white">Sunday: Closed</h5>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <!-- Line Divider -->
                        <div class="border-top my-4"></div>

                        <div class="row justify-content-left">
                            <div class="col-md-12">
                                <div class="card-body text-left d-flex justify-content-between">
                                    <h5 class="card-title-white title-footer">Terms of use</h5>
                                    <a href="{{ url('/privacy-policy') }}">
                                        <h5 class="card-title-white title-footer">Privacy Policy</h5>
                                    </a>
                                    <h5 class="card-title-white title-footer">Community</h5>
                                    <h5 class="card-title-white title-footer">Copyright © 2024 All rights reserved</h5>
                                </div>
                            </div>
                        </div>
                    </footer>


                </div>
            </div>
        </div>
    </section>




    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
