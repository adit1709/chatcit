@extends('layouts.app')
@section('content')
@include('layouts.partials.navbar')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Support - CHATCIT.AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #fff;
            margin: 0;
            padding: 0;
        }

        @media (max-width: 991px) {
            .navbar-center {
                justify-content: center !important;
            }
        }

        /* ---------------- SUPPORT SECTION ---------------- */
        .support-section {
            padding: 100px 20px;
            text-align: center;
        }

        .support-section h2 {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(to right, #00ffff, #00bfff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 30px;
            opacity: 0;
            animation: fadeInDown 1s ease forwards;
        }

        .support-section p {
            font-size: 1.2rem;
            color: #ccc;
            margin-bottom: 50px;
            opacity: 0;
            animation: fadeInUp 1s ease 0.4s forwards;
        }

        .donation-options {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .donation-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 255, 255, 0.08);
            transition: all 0.3s ease;
        }

        .donation-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 255, 255, 0.2);
        }

        .donation-card img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .donation-card a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background: #00ffff;
            color: #000;
            font-weight: 600;
            border-radius: 40px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .donation-card a:hover {
            background: #00c0c0;
            color: #fff;
        }

        footer {
            margin-top: 60px;
            background: rgba(255, 255, 255, 0.05);
            text-align: center;
            padding: 20px 0;
            font-size: 0.95rem;
            color: #aaa;
        }

        @keyframes fadeInDown {
            from {
                transform: translateY(-40px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(40px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <!-- Section Support -->
    <section class="support-section">
        <div class="container">
            <h2>Dukung Proyek Ini</h2>
            <p>Jika kamu menyukai platform ini dan ingin membantu pengembangan berkelanjutan, kamu bisa memberikan
                dukungan melalui platform donasi berikut:</p>

            <div class="donation-options">

                <!-- SAWERIA -->
                <div class="donation-card">
                    <img src="https://cdn-icons-png.flaticon.com/512/2769/2769339.png" alt="Saweria Logo">
                    <h5>Donasi via Saweria</h5>
                    <a href="https://saweria.co/alex170922" target="_blank">Donasi Sekarang</a>
                </div>

                <!-- PAYPAL -->
                <div class="donation-card">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174861.png" alt="PayPal Logo">
                    <h5>Donasi via PayPal</h5>
                    <a href="https://paypal.me/AdhytiaRachman" target="_blank">Donasi Sekarang</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            &copy; 2025 <strong>CHATCIT.AI</strong> • Terima kasih atas dukungan Anda.
        </div>
    </footer>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>