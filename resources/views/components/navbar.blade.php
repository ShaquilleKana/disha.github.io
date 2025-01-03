<div>
    <style>
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color:rgb(153, 64, 80);
            position: fixed;
            width: 98%;
            z-index: 1000;
            box-shadow: 0 2px 5px rgb(177, 134, 141);
        }

        .logo {
            color: rgb(247, 243, 244);
            font-family: 'Pacifico', cursive; /* Cute font */
            font-size: 1rem;
            cursor: pointer;
        }

        .nav-links {
            display: none; /* Initially hide for smaller screens */
        }

        .nav-links.active {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #e6c2d4; /* Match navbar color */
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .nav-links a {
            margin: 5px 0;
            color: rgb(247, 243, 244);
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
        }

        .toggle-button {
            background-color: transparent;
            border: none;
            color: rgb(247, 243, 244);
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (min-width: 768px) {
            .navbar {
                justify-content: space-between;
            }

            .nav-links {
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .nav-links a {
                margin: 0 15px;
            }

            .toggle-button {
                display: none; /* Hide the toggle button */
            }
        }
    </style>

    <header class="navbar">
        <button class="toggle-button">☰</button>
        <nav class="nav-links">
            <a href="{{ route('birthday') }}">Home</a>
            <a href="{{ route('special') }}">Special</a>
            <a href="{{ route('wish') }}">Don't Open</a>
        </nav>
        <div class="logo">
            <h1>Happy Birth Day</h1>
        </div>
        
    </header>

    <script>
        const toggleButton = document.querySelector('.toggle-button');
        const navLinks = document.querySelector('.nav-links');

        toggleButton.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>

</div>