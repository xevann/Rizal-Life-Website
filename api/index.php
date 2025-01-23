<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jose Rizal & Noli Me Tangere</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.8;
            color: #46251e; /* Dark brown color */
            background: #e7e3d8; /* Light neutral */
        }

        /* Header Styles */
        header {
            background: #46251e; /* Dark brown */
            color: #e7e3d8; /* Light neutral */
            padding: 1.5rem 0;
            text-align: center;
            border-bottom: 4px solid #7f5441; /* Accent color for border */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            font-size: 2rem;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Main Content */
        main {
            padding: 2rem;
            max-width: 900px;
            margin: 20px auto;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 2rem;
        }
        section h2 {
            font-size: 1.8rem;
            color: #673627; /* Slightly lighter brown */
            border-bottom: 2px solid #bd9469; /* Warm tan */
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        section p {
            text-align: justify;
            margin: 0.5rem 0;
        }

        /* Links Section */
        section#links ul {
            list-style-type: none;
            padding: 0;
        }
        section#links ul li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #bd9469; /* Border with a soft brown accent */
            border-radius: 10px;
            background: #f1f8e9; /* Light beige background */
            transition: transform 0.3s ease, background 0.3s ease;
        }
        section#links ul li a {
            text-decoration: none;
            color: #46251e; /* Dark brown link color */
            font-weight: bold;
        }
        section#links ul li:hover {
            background: #e7e3d8; /* Soft cream hover background */
            transform: scale(1.03);
        }

        /* Footer Styles */
        footer {
            text-align: center;
            padding: 1rem;
            background: #46251e; /* Dark brown background for footer */
            color: white;
            margin-top: 2rem;
            font-size: 0.9rem;
            border-top: 4px solid #7f5441; /* Muted brown border for footer */
        }

        /* Navbar Styles */
        nav {
            background: linear-gradient(135deg, #46251e, #46251e); /* Dark brown navbar */
            padding: 1rem;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #bd9469; /* Muted gold on hover */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            main {
                padding: 1.5rem;
            }

            header h1 {
                font-size: 1.5rem;
            }

            section h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Jose Rizal & Noli Me Tangere</h1>
    </header>

    <?php include 'navbar.php'; ?>

    <main>
        <section id="introduction">
            <h2>Introduction to <em>Noli Me Tangere</em></h2>
            <p>
                <em>Noli Me Tangere</em>, written by Dr. Jose Rizal, is a seminal novel in Philippine history. First published in 1887, the book
                is a scathing critique of the Spanish colonial rule and the abuses of the clergy and government officials. Through its
                protagonist, Crisostomo Ibarra, and other memorable characters, Rizal illuminates the struggles and aspirations of the Filipino people.
                The novel ignited the Filipino revolutionary spirit, making it a cornerstone in the country's path toward independence.
            </p>
        </section>

        <section id="biography">
            <h2>About Jose Rizal</h2>
            <p>
                Dr. Jose Rizal (1861–1896) was a Filipino nationalist, writer, and revolutionary. Born in Calamba, Laguna, Rizal excelled in academics,
                earning degrees in medicine and philosophy from European universities. He used his intellect and literary talent to expose the injustices
                of Spanish rule in the Philippines, notably through his novels <em>Noli Me Tangere</em> and <em>El Filibusterismo</em>. His peaceful advocacy for reform
                led to his execution in 1896, solidifying his legacy as a national hero.
            </p>
        </section>

        <section id="links">
            <h2>Explore More</h2>
            <ul>
                <li><a href="works.php">Works</a> - Discover Rizal's other literary masterpieces and contributions.</li>
                <li><a href="analysis.php">Analysis</a> - In-depth exploration of themes, characters, and the historical context of Rizal's works.</li>
                <li><a href="about.php">About Rizal</a> - Learn more about Rizal's life, education, and his impact on Philippine history.</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 RIZLIFE - Group 2. All rights reserved.</p>
    </footer>
</body>
</html>
