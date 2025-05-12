<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/req.css">
    <title>System Requirements</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav1">
                <ul>
                    <li><a href="index.php">About Me</a></li>
                    <li><a href="../page/Requirements.php">Requirements</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h1 style="text-align: center; margin-bottom: 20px;">Declaration</h1>
        <div class="info-wrapper">
            <div class="info-box">
                <?php
                $name = "Quervie Manrique";
                $course = "BSIT";
                $year = 3;
                $isGraduating = false;

                echo "<h2>👨‍🎓 Student Info</h2>";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Course:</strong> $course</p>";
                echo "<p><strong>Year:</strong> $year</p>";
                echo "<p><strong>Status:</strong> " . ($isGraduating ? "🎓 Graduating" : "📚 Still Studying") . "</p>";
                ?>
            </div>

            <div class="info-image">
                <img src="/assets/img/declaration.png" alt="Code Screenshot">
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Quervie Manrique. All rights reserved.</p>
            <p>Follow me on
                <a href="https://facebook.com" target="_blank">
                    <img src="assets/img/facebook.png" alt="Facebook" class="social-icon">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="assets/img/instagram.png" alt="Instagram" class="social-icon">
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <img src="assets/img/linkedin.png" alt="LinkedIn" class="social-icon">
                </a>
            </p>
            <p>Contact: manriquequervie@gmail.com</p>
        </div>
    </footer>
</body>
</html>