<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Maarten van der Steeg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">
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
                        <a href="../index.html" class="btn">Home</a>
                    </li>
                    <li>
                        <a href="../pages/about.html" class="btn">Over mij</a>
                    </li>
                    <li>
                        <a href="../pages/projects.php" class="btn">Projecten</a>
                    </li>
                    <li>
                        <a href="contact.php" class="btn active">Contact</a>
                    </li>
            </ul>
        </nav>

        <?php
        if(!empty($_POST["send"])) {
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $userPhone = $_POST["userPhone"];
            $userCompany = $_POST["userCompany"];
            $userMessage = $_POST["userMessage"];
            $toEmail = "hutsfluts84@gmail.com";

            $mailHeaders = "Name: " . $userName .
            "\r\n Email: " . $userEmail .
            "\r\n Phone: " . $userPhone .
            "\r\n Company: " . $userCompany .
            "\r\n Message: " . $userMessage . "\r\n";

            if(mail($toEmail, $userName, $mailHeaders)){
                $message = "Jouw informatie is succesvol gestuurd!";
            }
        }
        ?>

        <!-- Contact -->
        <div class="form-container">
            <form method="post" name="emailContact">
                <div class="input-row">
                    <label>Naam <em>*</em></label>
                    <input type="text" name="userName" placeholder="Naam" required>
                </div>
                <div class="input-row">
                    <label>Email <em>*</em></label>
                    <input type="email" name="userEmail" placeholder="example@gmail.com" required>
                </div>
                <div class="input-row">
                    <label>Telefoonnummer <em>*</em></label>
                    <input type="text" name="userPhone" oninput="validatePhoneNumber(this)" pattern="[0-9]{10}" placeholder="0612345678" required>
                </div>
                <div class="input-row">
                    <label>Bedrijf <em>*</em></label>
                    <input type="text" name="userCompany" placeholder="Example bv" required>
                </div>
                <div class="input-row">
                    <label>Bericht <em>*</em></label>
                    <textarea name="userMessage" placeholder="Hi, vraag of zeg iets" required></textarea>
                </div>
                <div class="input-row">
                    <input type="submit" name="send" value="Verstuur">
                    <?php if(!empty($message)){ ?>
                    <div class="succes">
                        <strong><?php echo $message; ?></strong>
                    </div>
                    <?php } ?>
                </div>
            </form>
        </div>

         <!-- Footer -->
   <section class="footer">
        <div class="social">
            <a href="https://www.instagram.com/maarten_sdm/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100009515333629" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="tel:0657338305"><i class="fa-solid fa-phone"></i></a>
            <a href="mailto: 088698@glr.nl"><i class="fa-regular fa-envelope"></i></a>
        </div>

        <ul class="list">
            <li>
                <a href="../index.html">Home</a>
            </li>
            <li>
                <a href="../pages/about.html">Over mij</a>
            </li>
            <li>
                <a href="./projects.php">Projecten</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <p class="copyright">
                Maarten van der Steeg © 2023
            </p>
        </ul>
    </section>

    <script src="../scripts/contact.js"></script>
</body>
</html>