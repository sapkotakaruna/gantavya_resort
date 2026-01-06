
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" href="{{asset('frontend/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/styles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.png" />
    <meta name="description"
        content="Welcome to our luxury hotel. Enjoy elegantly designed rooms, complimentary Wi-Fi, breakfast, and premium amenities for an unforgettable stay.">
    <title>Home - Luxury Hotel</title>

    <style>
        :root {
            --font-primary: 'Playfair Display', serif;
        }



        .hero-swiper {
            width: 100%;
            height: 500px;
            position: relative;
        }

        .hero-swiper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            z-index: 10;
        }

        .hero-overlay h1 {
            font-size: 3rem;
            letter-spacing: 2px;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin-bottom: 1rem;
        }

        .hero-overlay p {
            margin-top: 0.5rem;
            font-size: 1.25rem;
            letter-spacing: 1px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        @media (max-width: 768px) {
            .hero-swiper {
                height: 400px;
            }

            .hero-overlay h1 {
                font-size: 1.75rem;
                letter-spacing: 1px;
            }

            .hero-overlay p {
                font-size: 1rem;
            }
        }
    </style>
</head>