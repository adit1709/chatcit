@extends('layouts.app')
@section('content')
@include('layouts.partials.navbar')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - CHATCIT.AI</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            overflow-x: hidden;
        }



        .container {
            max-width: 1200px;
            margin: auto;
            padding: 60px 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .left {
            flex: 1;
            min-width: 300px;
            padding-left: 60px;
        }

        .left h3 {
            font-size: 2rem;
            margin-bottom: 10px;
            opacity: 0;
            animation: fadeDown 1s ease forwards;
        }

        .left h1 {
            font-size: 4rem;
            font-weight: 700;
            color: #00ffff;
            margin-bottom: 20px;
            opacity: 0;
            animation: slideInLeft 1s ease forwards;
            animation-delay: 0.5s;
            animation-fill-mode: forwards;
        }

        .left p.typewriter {
            font-size: 1.2rem;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
            animation: typing 3s steps(40, end) forwards;
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            color: #00ffff;
            font-size: 1.6rem;
            margin-right: 15px;
            transition: 0.3s ease;
        }

        .social-icons a:hover {
            color: #ffffff;
        }

        .right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 300px;
            margin-top: 40px;
        }

        .profile-pic {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            border: 6px solid #00ffff;
            background: url('https://i.ibb.co/0y8yNjMg/buatkan-saya-foto-gambar-Anime-Ciri-ciri-1-ganteng-2-muda-umur-20-3-cool-seperti-levi-ackerman-erwin.jpg') center/cover no-repeat;
            box-shadow: 0 0 25px #00ffff;
            animation: pulse 3s infinite;
        }

        /* Animations */
        @keyframes fadeDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            0% {
                opacity: 0;
                transform: translateX(-100px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 20px #00ffff;
            }

            50% {
                box-shadow: 0 0 40px #00ffff;
            }

            100% {
                box-shadow: 0 0 20px #00ffff;
            }
        }

        footer {
            text-align: center;
            padding: 30px 0;
            color: #aaa;
            background-color: rgba(255, 255, 255, 0.03);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 60px;
        }

        @media (max-width: 768px) {
            .profile-pic {
                width: 240px;
                height: 240px;
            }

            .container {
                flex-direction: column;
            }

            .left,
            .right {
                text-align: center;
            }

            .left h1 {
                font-size: 2.3rem;
            }

            .left p.typewriter {
                font-size: 1rem;
            }

            .profile-pic {
                width: 200px;
                height: 200px;
            }

        }

        .typewriter {
            display: inline-flex;
            align-items: center;
            font-size: 1.2rem;
            min-width: fit-content;
        }

        .typed-text {
            white-space: nowrap;
            display: inline-block;
        }

        .cursor {
            width: 2px;
            height: 1.2em;
            background-color: #00ffff;
            margin-left: 5px;
            display: inline-block;
        }

        .cursor.blink {
            animation: blink 0.6s step-end infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="container">
        <div class="left">
            <h3>Hello, It's Me</h3>
            <h1>Alex Abraham</h1>
            <p class="typewriter">
                <span id="typed-text"></span><span class="cursor blink"></span>
            </p>

            <div class="social-icons">
                <a href="https://instagram.com/aditrchmn_" target="_blank" title="Instagram"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://github.com/adhytiarachman" target="_blank" title="GitHub"><i
                        class="fab fa-github"></i></a>
                <a href="mailto:tadit9365@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        <div class="right">
            <div class="profile-pic"></div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2025 <strong>CHATCIT.AI</strong> • All rights reserved.
    </footer>

    <script>
        const text = "I am a full-stack developer";
        const typedTextEl = document.getElementById("typed-text");
        const cursorEl = document.querySelector(".cursor");
        let index = 0;

        function typeNextChar() {
            if (index < text.length) {
                typedTextEl.textContent += text.charAt(index);
                index++;
                setTimeout(typeNextChar, 80);
            } else {
                cursorEl.classList.add("blink");
            }
        }

        setTimeout(typeNextChar, 500);
    </script>
</body>

</html>