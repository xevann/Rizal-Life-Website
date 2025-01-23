<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Works - Noli Me Tangere</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.8;
            color: #46251e; /* Primary text color */
            background: #e7e3d8; /* Light neutral */
        }

        /* Header Styles */
        header {
            background: #46251e; /* Dark brown */
            color: #e7e3d8; /* Light neutral */
            padding: 1.5rem 0;
            text-align: center;
            border-bottom: 4px solid #7f5441; /* Complementary brown */
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

        /* Key Characters */
        section#key-characters ul {
            list-style-type: none;
            padding: 0;
        }

        section#key-characters ul li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #bd9469; /* Warm tan border */
            border-radius: 10px;
            background: #e7e3d8; /* Light neutral */
        }

        section#key-characters ul li strong {
            color: #7f5441; /* Mid-brown for emphasis */
        }

        /* Footer Styles */
        footer {
            text-align: center;
            padding: 1rem;
            background: #46251e; /* Dark brown */
            color: #e7e3d8; /* Light neutral */
            margin-top: 2rem;
            font-size: 0.9rem;
            border-top: 4px solid #7f5441; /* Complementary border */
        }

        /* Links */
        a {
            color: #673627; /* Slightly lighter brown */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #bd9469; /* Warm tan on hover */
            text-decoration: underline;
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
        <h1>Noli Me Tangere - Works</h1>
    </header>

    <?php include 'navbar.php'; ?>

    <main>
        <section id="historical-context">
            <h2>Historical Context</h2>
            <p>
                <em>Noli Me Tangere</em> was written during the Spanish colonization of the Philippines, a period marked by widespread oppression and corruption.
                Published in 1887, the novel reflects the social, political, and religious injustices faced by Filipinos under Spanish rule. The friars wielded
                immense power, controlling education, governance, and the lives of the people. Jose Rizal sought to expose these abuses and awaken the
                Filipino people's sense of nationalism. The novel became a cornerstone of the Philippine Revolution, inspiring efforts to achieve freedom
                and equality.
            </p>
        </section>

        <section id="plot-summary">
            <h2>Plot Summary</h2>
            <p>
                <em>Noli Me Tangere</em> follows the story of Crisostomo Ibarra, a young Filipino who returns to the Philippines after studying in Europe.
                He plans to continue his father's legacy by building a school to educate his fellow countrymen. However, he soon discovers that his father
                was falsely accused of rebellion and died in prison due to the machinations of corrupt friars and officials. Ibarra faces numerous
                obstacles, including betrayal, injustice, and the rigid class structure of colonial society.
            </p>
            <p>
                Along the way, Ibarra reconnects with his fiancée, Maria Clara, who becomes a symbol of purity and sacrifice. As tensions rise, Ibarra
                is framed for sedition and forced to flee. The novel ends with unresolved conflicts, symbolizing the ongoing struggle for justice and
                freedom in the Philippines.
            </p>
        </section>

        <section id="key-characters">
            <h2>Key Characters</h2>
            <ul>
                <li>
                    <strong>Crisostomo Ibarra:</strong> The protagonist, a young and idealistic Filipino who seeks to bring progress to his country
                    but is thwarted by corruption and oppression.
                </li>
                <li>
                    <strong>Maria Clara:</strong> Ibarra's fiancée, often seen as the epitome of virtue and love. Her struggles reflect the plight
                    of Filipino women during the colonial era.
                </li>
                <li>
                    <strong>Padre Damaso:</strong> A corrupt and hypocritical friar who represents the abuses of the clergy. He is instrumental in
                    Ibarra's father's downfall.
                </li>
                <li>
                    <strong>Padre Salvi:</strong> Another friar, cunning and manipulative, who schemes against Ibarra and lusts after Maria Clara.
                </li>
                <li>
                    <strong>Elías:</strong> A mysterious and heroic figure who aids Ibarra. He symbolizes the revolutionary spirit and the plight
                    of the common Filipino.
                </li>
                <li>
                    <strong>Pilosopo Tasio:</strong> The town philosopher, whose wisdom and criticisms of society offer insights into the novel's themes.
                </li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 RIZLIFE - Group 2. All rights reserved.</p>
    </footer>
</body>
</html>
