<?php
echo '
<style>
    /* Navbar Container */
    .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #46251e, #46251e);
        padding: 1rem;
        border-radius: 15px;
        margin: 20px auto;
        max-width: 90%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Navbar Links */
    .nav-link {
        text-decoration: none;
        color: white;
        font-weight: bold;
        margin: 0 15px;
        padding: 0.5rem 1.5rem;
        border-radius: 25px;
        transition: background-color 0.3s ease, transform 0.3s ease, color 0.3s ease;
        font-size: 1rem;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: #f1f1f1;
        transform: translateY(-3px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .navbar {
            flex-wrap: wrap;
            padding: 1rem 0.5rem;
        }

        .nav-link {
            margin: 5px;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }
</style>

<nav class="navbar">
    <a href="index.php" class="nav-link">Home</a>
    <a href="works.php" class="nav-link">Works</a>
    <a href="analysis.php" class="nav-link">Analysis</a>
    <a href="about.php" class="nav-link">About Rizal</a>
</nav>
';
?>
