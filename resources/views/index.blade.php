<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday My Love ❤️</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <x-navbar></x-navbar>
    <audio id="backgroundMusic" controls autoplay>
        <source src="{{ asset('music/sound.mp3') }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <section class="hero">
        <div class="hero-text">
            <h1>Happy Birth Day My One And Only Bocil Gemash</h1>
            <h2>Adinda Savira Azzahra</h2>
        </div>
    </section>

    <section class="categories">
        <div class="category">
            <h2>PDKT Phase</h2>
            <div class="photo-grid">
                @foreach($PDKT as $photo)
                    <div class="photo-card">
                        <img src="{{ asset($photo['src']) }}" alt="Memory">
                        <div class="photo-caption">{{ $photo['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="category">
            <h2>Jadian nih</h2>
            <div class="photo-grid">
                @foreach($Jadian as $photo)
                    <div class="photo-card">
                        <img src="{{ asset($photo['src']) }}" alt="Memory">
                        <div class="photo-caption">{{ $photo['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="category">
            <h2>Lebaran</h2>
            <div class="photo-grid">
                @foreach($Main as $photo)
                    <div class="photo-card">
                        <img src="{{ asset($photo['src']) }}" alt="Memory">
                        <div class="photo-caption">{{ $photo['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="category">
            <h2>Pacar aku cantik deh</h2>
            <div class="photo-grid">
                @foreach($konser as $photo)
                    <div class="photo-card">
                        <img src="{{ asset($photo['src']) }}" alt="Memory">
                        <div class="photo-caption">{{ $photo['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="category">
            <h2>I Love you always ya baby</h2>
            <div class="photo-grid">
                @foreach($love as $photo)
                    <div class="photo-card">
                        <img src="{{ asset($photo['src']) }}" alt="Memory">
                        <div class="photo-caption">{{ $photo['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="category">
            <h2>Gemeshnya baby akuh</h2>
            <div class="photo-grid">
                @foreach($cantik as $photo)
                    <div class="photo-card">
                        <img src="{{ asset($photo['src']) }}" alt="Memory">
                        <div class="photo-caption">{{ $photo['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="category">
            <h2>Thankyou sayaang</h2>
            <div class="photo-grid">
                @foreach($mine as $photo)
                    <div class="photo-card">
                        <img src="{{ asset($photo['src']) }}" alt="Memory">
                        <div class="photo-caption">{{ $photo['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="category">
            <h2>My Baby ❤️</h2>
            <div class="photo-grid">
                @foreach($sabar as $photo)
                    <div class="photo-card">
                        <img src="{{ asset($photo['src']) }}" alt="Memory">
                        <div class="photo-caption">{{ $photo['caption'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>





    <script>
        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
