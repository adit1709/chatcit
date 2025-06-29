@extends('layouts.app')
@section('content')
@include('layouts.partials.navbar')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat AI - Platform Cerdas</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --gradient-start: #0f2027;
            --gradient-mid: #203a43;
            --gradient-end: #2c5364;
            --primary-glow: rgba(0, 255, 255, 0.6);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-mid), var(--gradient-end));
            color: #ffffff;
            overflow-x: hidden;
        }


        .hero {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(90deg, #00ffff, #00bfff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            opacity: 0;
            animation: fadeInDown 1s ease forwards;
        }

        .hero p {
            font-size: 1.3rem;
            font-weight: 300;
            color: #e0e0e0;
            margin-top: 20px;
            max-width: 700px;
            opacity: 0;
            animation: fadeInUp 1s ease 0.5s forwards;
        }

        .btn-glow {
            margin-top: 40px;
            background: #00ffff;
            color: #000;
            border: none;
            padding: 14px 36px;
            font-weight: 600;
            border-radius: 40px;
            box-shadow: 0 0 18px var(--primary-glow);
            transition: all 0.4s ease;
        }

        .btn-glow:hover {
            background: #00c0c0;
            box-shadow: 0 0 28px #00ffff, 0 0 40px #00ffff;
        }

        footer {
            background: rgba(255, 255, 255, 0.05);
            text-align: center;
            padding: 20px 0;
            font-size: 0.95rem;
            color: #ccc;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }
        }

        /* Glow efek tulisan brand */
        .text-glow {
            background: linear-gradient(90deg, #00ffff, #00bfff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: flicker 2.5s infinite alternate;
        }

        /* Flicker animasi */
        @keyframes flicker {
            0% {
                opacity: 0.9;
                text-shadow: 0 0 5px #00ffff, 0 0 10px #00ffff;
            }

            100% {
                opacity: 1;
                text-shadow: 0 0 12px #00bfff, 0 0 20px #00ffff;
            }
        }


        .typewriter-text {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(90deg, #00ffff, #00bfff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            white-space: nowrap;
            overflow: hidden;
            border-right: 2px solid #00ffff;
            width: fit-content;
            margin: 0 auto;
            animation: blink-caret 0.75s step-end infinite;
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: #00ffff;
            }
        }
    </style>
</head>

<body>

    <section class="hero">
        <div class="container">
            <h1 id="typewriter" class="typewriter-text"></h1>
            <p>Asisten AI Cerdas untuk kebutuhan Anda. Cepat, Efisien, dan Penuh Inovasi. Solusi masa depan dalam
                genggaman Anda.</p>
            <a href="/auth/google" class="btn btn-glow">JOIN NOW</a>
        </div>
    </section>

    <footer>
        <div class="container">
            &copy; 2025 <strong>CHATCIT.AI</strong> | All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const text = "CHATCIT.AI";
        const el = document.getElementById("typewriter");

        let index = 0;
        function typeWriterEffect() {
            if (index < text.length) {
                el.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriterEffect, 120); // kecepatan ketik per huruf
            }
        }

        window.addEventListener("DOMContentLoaded", () => {
            typeWriterEffect();
        });
    </script>


</body>

</html>