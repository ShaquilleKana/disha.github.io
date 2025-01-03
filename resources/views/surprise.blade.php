<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Happy Birthday My Love ❤️</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFF0F5;
            font-family: 'Arial', sans-serif;
        }
        .heart {
            animation: heartbeat 1s infinite;
        }
        @keyframes heartbeat {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        .game-reference {
            background-color: #FFB6C1;
            border-radius: 15px;
            padding: 20px;
            margin: 20px 0;
        }
        .unlock-button {
        background: linear-gradient(-45deg, #FF1493, #FF69B4, #FFB6C1, #FFC0CB);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
        transition: all 0.3s ease;
        }
        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .unlock-button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 105, 180, 0.6);
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center p-8 max-w-xl">
            <h1 class="text-4xl font-bold text-pink-600 mb-6">
                🎮 Level 1: Find the Password 🎮
            </h1>
            
            <div class="game-reference">
                <p class="text-lg mb-4">
                    Remember our favorite game together?<br>
                    The one where we worked as a team...<br>
                    What was it called? 🤔
                </p>
            </div>

            <div class="mt-8">
                <input type="password" id="password" 
                    class="w-full p-3 rounded border-2 border-pink-300 focus:border-pink-500 outline-none"
                    placeholder="Enter the password...">
                <button onclick="checkPassword()" 
                    class="mt-4 bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">
                    Unlock My Heart ❤️
                </button>
            </div>

            <div id="message" class="special-message mt-8 hidden">
                <div class="heart text-6xl mb-4">❤️</div>
                <div class="space-y-4 text-pink-600">
                    <p class="text-lg mt-4 text-pink-600">
                        Happy Birthday my Queen my Bocil Gemash my Beautiful!<br>
                        You make my life complete every single day.<br>
                        <br>
                    </p>
                    <a href="{{ route('birthday') }}" 
                    class="unlock-button w-full py-4 px-6 rounded-lg text-white font-bold text-lg shadow-lg">
                        See Your Birthday Surprise 🎂
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function checkPassword() {
            const password = document.getElementById('password').value.toLowerCase().replace(/\s+/g, '');
            fetch('/unlock', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ password: password })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('message').classList.remove('hidden');
                    confetti();
                } else {
                    alert('Try again! Hint: Think about our favorite co-op game 🎮');
                }
            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/canvas-confetti/1.4.0/confetti.browser.min.js"></script>
</body>
</html>


