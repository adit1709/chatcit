@extends('layouts.app')
@section('content')
@include('layouts.partials.navbar')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - CHATCIT.AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .section {
            padding: 120px 20px 100px;
            text-align: center;
            background: url('https://transparenttextures.com/patterns/stardust.png'), rgba(255, 255, 255, 0.02);
            background-blend-mode: overlay;
        }

        .section h2 {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(to right, #00ffff, #00bfff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            opacity: 0;
            animation: fadeInDown 1s ease forwards;
        }

        .section p {
            font-size: 1.25rem;
            font-weight: 300;
            color: #ccc;
            max-width: 800px;
            margin: 30px auto 0;
            opacity: 0;
            animation: fadeInUp 1s ease 0.5s forwards;
        }


        footer {
            padding: 30px 0;
            background: rgba(255, 255, 255, 0.04);
            text-align: center;
            font-size: 0.95rem;
            color: #aaa;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .features {
            margin-top: 100px;
        }

        .features .feature-item {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .features .feature-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 30px rgba(0, 255, 255, 0.1);
        }

        .features i {
            font-size: 2rem;
            color: #00ffff;
            margin-bottom: 15px;
        }

        .features h5 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .features p {
            color: #ccc;
            font-size: 1rem;
        }

        .vision-mission {
            margin-top: 80px;
            text-align: left;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            color: #ccc;
        }

        .vision-mission h4 {
            color: #00ffff;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .vision-mission ul {
            padding-left: 20px;
        }

        .vision-mission ul li {
            margin-bottom: 10px;
            line-height: 1.7;
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

        @media (max-width: 768px) {
            .section h2 {
                font-size: 2rem;
            }

            .section p {
                font-size: 1rem;
                padding: 0 10px;
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
    </style>
</head>

<body>

    <section class="section">
        <div class="container">
            <h2>About Us</h2>
            <p>
                <strong>CHATCIT.AI</strong> adalah platform interaktif berbasis kecerdasan buatan yang dibangun dengan
                teknologi terkini dan memanfaatkan kekuatan <strong>model Gemini dari Google</strong>, yang terus
                diperbarui secara berkala agar selalu relevan dengan perkembangan zaman.<br><br>
                Platform ini dirancang sebagai <em>AI Assistant</em> personal Anda dalam menyelesaikan berbagai
                kebutuhan seperti pencarian informasi, produktivitas kerja, penyusunan teks, hingga percakapan
                sehari-hari dengan AI yang responsif dan adaptif.<br><br>
                ChatCIT.AI menempatkan <strong>privasi data</strong> sebagai prioritas utama dengan sistem yang aman dan
                terenkripsi, memberikan pengguna rasa tenang saat berinteraksi. Didukung dengan tampilan
                <strong>antarmuka modern, minimalis, dan profesional</strong>, pengalaman pengguna terasa nyaman di
                berbagai perangkat.<br><br>
                Dengan fokus pada kecepatan, keakuratan, dan kemudahan, CHATCIT.AI hadir sebagai solusi AI lokal yang
                andal untuk berbagai bidang — dari pendidikan, bisnis, hingga kebutuhan harian. Kami percaya bahwa masa
                depan dimulai dari interaksi cerdas yang dapat diakses siapa saja.
            </p>

            <!-- VISI & MISI -->
            <div class="vision-mission">
                <h4>Visi</h4>
                <p>Menjadi platform kecerdasan buatan terdepan yang mendukung interaksi manusia dan teknologi secara
                    efisien, aman, dan menyenangkan.</p>

                <h4>Misi</h4>
                <ul>
                    <li>Menyediakan asisten AI yang cepat, akurat, dan mudah digunakan untuk semua kalangan.</li>
                    <li>Menjaga keamanan dan privasi pengguna sebagai prioritas utama.</li>
                    <li>Berinovasi dengan teknologi terkini untuk menghadirkan pengalaman AI yang terus berkembang.</li>
                    <li>Mendorong pemanfaatan AI dalam pendidikan, bisnis, dan kehidupan sehari-hari.</li>
                </ul>
            </div>

            <!-- FITUR UNGGULAN -->
            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-item">
                            <i class="fas fa-brain"></i>
                            <h5>Didukung AI Terbaru</h5>
                            <p>Memanfaatkan model Gemini dari Google yang terus diperbarui untuk performa terbaik.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <i class="fas fa-shield-alt"></i>
                            <h5>Privasi Aman</h5>
                            <p>Sistem kami mengutamakan perlindungan data dan privasi pengguna secara menyeluruh.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <i class="fas fa-mobile-alt"></i>
                            <h5>Responsif & Modern</h5>
                            <p>Desain elegan dan responsif di semua perangkat, baik mobile maupun desktop.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="feature-item">
                            <i class="fas fa-comments"></i>
                            <h5>Interaksi Natural</h5>
                            <p>Respon AI yang cepat, kontekstual, dan terasa alami dalam berkomunikasi.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <i class="fas fa-rocket"></i>
                            <h5>Kinerja Optimal</h5>
                            <p>Optimalisasi backend dan frontend memastikan pengalaman pengguna yang mulus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <i class="fas fa-globe"></i>
                            <h5>Terhubung Global</h5>
                            <p>Didesain untuk bisa berkembang dengan integrasi API dan teknologi lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer>
        <div class="container">
            &copy; 2025 <strong>CHATCIT.AI</strong> • All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>