<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Scrolling Carousel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #333;
        }

        .carousel {
            position: relative;
            width: 90%;
            max-width: 1000px;
            overflow: hidden;
            height: 250px;
        }

        .carousel-inner {
            display: flex;
            gap: 10px; /* Gap between images */
            transition: transform 0.5s ease;
            will-change: transform;
        }

        .carousel-item {
            flex: 0 0 15%; /* Show about 6 images at a time */
        }

        .carousel-item img {
            width: 100%;
            border-radius: 10px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="carousel">
        <div class="carousel-inner">
            <!-- Original Set of Images -->
            <div class="carousel-item">
                <img src="images/logo/1.webp" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/logo/2.webp" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/logo/3.webp" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/logo/4.webp" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="images/logo/5.webp" alt="Image 5">
            </div>
            <div class="carousel-item">
                <img src="images/logo/6.webp" alt="Image 6">
            </div>
            <div class="carousel-item">
                <img src="images/logo/7.webp" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="images/logo/8.webp" alt="Image 8">
            </div>
            <div class="carousel-item">
                <img src="images/logo/9.webp" alt="Image 9">
            </div>
            <div class="carousel-item">
                <img src="images/logo/10.webp" alt="Image 10">
            </div>

            <!-- Duplicated Set of Images for Seamless Looping -->
            <div class="carousel-item">
                <img src="images/logo/1.webp" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/logo/2.webp" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/logo/3.webp" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/logo/4.webp" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="images/logo/5.webp" alt="Image 5">
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length / 2; // Original set length (not including duplicates)
        const visibleItems = 6; // Number of visible items at a time

        function updateCarousel() {
            const offsetX = -currentIndex * (100 / visibleItems);
            document.querySelector('.carousel-inner').style.transform = `translateX(${offsetX}%)`;

            // Reset to the beginning if at the duplicated items
            if (currentIndex >= totalItems) {
                setTimeout(() => {
                    document.querySelector('.carousel-inner').style.transition = 'none';
                    currentIndex = 0;
                    updateCarousel();
                    setTimeout(() => {
                        document.querySelector('.carousel-inner').style.transition = 'transform 0.5s ease';
                    }, 50); // Re-enable transition after reset
                }, 500); // Delay reset to allow for smooth transition
            }
        }

        function moveSlide(step) {
            currentIndex += step;
            updateCarousel();
        }

        // Auto-slide every 3 seconds
        setInterval(() => {
            moveSlide(1);
        }, 2000);
    </script>
</body>
</html>
