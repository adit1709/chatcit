<head>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: white;
            margin: 0;
        }

        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 30px;
            background: transparent;
            /* transparan 100% */
            backdrop-filter: blur(0);
            /* hilangkan blur */
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            position: absolute;
            left: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: bold;
            font-size: 1.3rem;
            color: #00ffff;
        }

        .navbar-brand img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .nav-links a {
            color: white;
            margin: 0 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2rem;
            /* ⇽ PERBESAR UKURAN FONT */
            transition: color 0.3s ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #00ffff;
        }

        .divider {
            margin: 0 10px;
            color: #ffffff88;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
            }

            .navbar-brand {
                position: static;
                margin-bottom: 10px;
            }

            .nav-links {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .nav-links a,
            .divider {
                margin: 8px 0;
                text-align: left;
            }

            .divider {
                display: none;
                /* Sembunyikan divider di mobile */
            }
        }
    </style>
</head>