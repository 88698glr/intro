<?php
// Databaseverbinding
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Intro_88698";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Fout bij de verbinding met de database: " . $conn->connect_error);
}

// Query om projectgegevens op te halen
$sql = "SELECT * FROM projecten";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Maarten van der Steeg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/projects.css">
</head>
<body>
            <!-- nav -->
            <nav>
                <a href="../index.html" id="logo">Maarten van der Steeg</a>
                <input type="checkbox" id="hamburger">
                <label class="hamburger" for="hamburger">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <ul class="navbar">
                    <li>
                        <a href="../index.html" class="active">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About me</a>
                    </li>
                    <li>
                        <a href="projects.html">Projects</a>
                    </li>
                    <li>
                        <a href="./contact.php">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Projects-->
            <section class="projects">
                <div class="container-projects">
                <?php
            // Loop door de projectgegevens en toon ze op de pagina
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="project">';
                    echo '<img src="' . $row["img"] . '" alt="' . $row["titel"] . '">';
                    echo '<h2>' . $row["titel"] . '</h2>';
                    echo '<p>' . $row["beschrijving"] . '</p>';
                    echo '<a href="' . $row["link"] . '">Bezoeken</a>';
                    echo '</div>';
                }
            } else {
                echo "Geen projecten gevonden.";
            }
            ?>
                </div>
            </section>

                     <!-- Footer -->
   <section class="footer">
    <div class="social">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fa-regular fa-envelope"></i></a>
    </div>

    <ul class="list">
        <li>
            <a href="../index.html">Home</a>
        </li>
        <li>
            <a href="about.html">About Me</a>
        </li>
        <li>
            <a href="projects.html">Projects</a>
        </li>
        <li>
            <a href="./contact.php">Contact</a>
        </li>
        <p class="copyright">
            Maarten van der Steeg @ 2023
        </p>
    </ul>
</section>
</body>
</html>