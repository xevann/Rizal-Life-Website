<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Jose Rizal</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #46251e; /* Dark brown */
            background: #e7e3d8; /* Soft cream */
        }

        header {
            background-color: #46251e; /* Dark brown */
            color: #e7e3d8; /* Light neutral */
            padding: 1rem 0;
            text-align: center;
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: center;
            background: #46251e; /* Dark brown */
            padding: 0.5rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        nav a {
            text-decoration: none;
            color: #e7e3d8; /* Light neutral */
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s ease, background-color 0.3s ease;
            padding: 0.5rem;
            border-radius: 5px;
        }

        nav a:hover,
        nav a.active {
            color: #e7e3d8; /* Light neutral */
            background-color: #673627; /* Lighter brown */
        }

        /* Main Content */
        main {
            padding: 2rem 1rem;
            max-width: 800px;
            margin: 0 auto;
        }

        section {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: #e7e3d8; /* Light cream */
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            color: #46251e;
        }

        h2 {
            color: #673627; /* Lighter brown */
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        p {
            margin: 0.5rem 0;
        }

        /* Image Styling */
        .image-container {
            text-align: center;
            margin: 1rem 0;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border: 2px solid #7f5441; /* Soft brown border */
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1rem;
            background: #46251e; /* Dark brown */
            color: #e7e3d8; /* Light neutral */
            margin-top: 2rem;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.5rem;
            }

            nav a {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>About Jose Rizal</h1>
    </header>

    <?php include 'navbar.php'; ?>

    <main>
        <section id="early-life">
            <h2>Early Life</h2>
            <div class="image-container">
                <img src="images/early-life.jpg" alt="Jose Rizal's Early Life">
            </div>
            <p>
                Jose Protacio Rizal Mercado y Alonzo Realonda was born on June 19, 1861, in Calamba, Laguna, Philippines. The seventh of eleven children,
                Rizal grew up in a well-to-do family, which enabled him to pursue a quality education. From a young age, Rizal showed exceptional
                intellectual aptitude, excelling in academics, arts, and languages.
            </p>
        </section>

        <section id="education">
            <h2>Education</h2>
            <div class="image-container">
                <img src="images/education.jpg" alt="Jose Rizal's Education">
            </div>
            <p>
                Rizal studied at the Ateneo Municipal de Manila, where he earned a Bachelor of Arts degree with high honors. He then enrolled
                at the University of Santo Tomas to study medicine but later transferred to the Universidad Central de Madrid in Spain, where
                he completed his degree in Medicine and Philosophy. Rizal also studied ophthalmology in Paris and Heidelberg, becoming a skilled
                eye doctor.
            </p>
        </section>

        <section id="contributions">
            <h2>Contributions and Legacy</h2>
            <div class="image-container">
                <img src="images/contributions.jpg" alt="Jose Rizal's Contributions">
            </div>
            <p>
                As a writer and reformist, Rizal used his works to expose the abuses and injustices of Spanish colonial rule. His novels
                <em>Noli Me Tangere</em> and <em>El Filibusterismo</em> became catalysts for the Filipino nationalist movement. Rizal also wrote
                numerous essays, poems, and articles advocating education, human rights, and peaceful reforms.
            </p>
            <p>
                Despite his peaceful advocacy, Rizal was arrested and executed by firing squad on December 30, 1896. His death galvanized
                the Philippine Revolution, and he remains a symbol of Filipino resistance, intellectual prowess, and patriotism.
            </p>
        </section>

        <section id="personal-life">
            <h2>Personal Life</h2>
            <div class="image-container">
                <img src="images/personal-life.jpg" alt="Jose Rizal's Personal Life">
            </div>
            <p>
                Rizal was a man of many talents, excelling in fields such as literature, medicine, and the arts. He was fluent in multiple
                languages, including Filipino, Spanish, German, French, and Japanese. Despite his accomplishments, Rizal faced personal struggles,
                including his complex relationships and the challenges of living in exile.
            </p>
        </section>

        <section id="commemoration">
            <h2>Commemoration</h2>
            <div class="image-container">
                <img src="images/commemoration.jpg" alt="Commemoration of Jose Rizal">
            </div>
            <p>
                Today, Jose Rizal is remembered as a national hero of the Philippines. Monuments, schools, and institutions are named in his honor,
                and his life and works are taught in schools across the country. Rizal's martyrdom continues to inspire generations of Filipinos
                to strive for justice, freedom, and equality.
            </p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 RIZLIFE - Group 2. All rights reserved.</p>
    </footer>
</body>
</html>
