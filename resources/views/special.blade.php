<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Moments ❤️</title>
    <link rel="stylesheet" href="{{ asset('css/special.css') }}">
</head>
<body>
    <x-navbar></x-navbar>

    <div class="video-container">
        <div class="video-wrapper">
            <iframe 
                src="https://drive.google.com/file/d/1sUDrTvM2sC5lDTxGN7zRhB7_NSm5_we-/preview" 
                allow="autoplay" 
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <script>
        function createHeart() {
            const heart = document.createElement('div');
            heart.classList.add('heart');
            heart.innerHTML = '❤️';
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.animationDuration = (Math.random() * 3 + 2) + 's';
            document.body.appendChild(heart);
            
            setTimeout(() => {
                heart.remove();
            }, 4000);
        }

        setInterval(createHeart, 300);
    </script>
</body>
</html>
