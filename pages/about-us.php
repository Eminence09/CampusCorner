<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CampusCorner </title>
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="stylesheet" href="../css/index_media.css">
    <link rel="stylesheet" href="../pages/about-us.css">
    <link rel="stylesheet" href="../css/style_media.css">
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav>
        <div class="logo">
            <a href=""><span>C</span>ampus<span>C</span>orner</a>
        </div>
        <div class="menu">
            <a href="#"><i class='bx bx-menu-alt-right'></i></a>
        </div>
        <ul class="navlist">
            <li id="forms"><a href="index.php">CampusCorner.com</a></li>
            <li><a href="../admin/PrivacyPolicy/privacy.php">Privacy Policy</a></li>
            <li><a href="../admin/PrivacyPolicy/termsofservice.php">Terms of Services</a></li>
            <li id="joinus"><a href="../users/login.php">Join Us</a></li>
        </ul>
        <?php
        if (isset($_SESSION['logins'])) {

            $user = $_SESSION['logins'];

            // Notification Data Read
            $sql = "SELECT * FROM notification WHERE user = '$user' ORDER BY date DESC";
            $res = mysqli_query($db, $sql);

            // Count unread notifications
            $sql_unread = "SELECT COUNT(*) as unread_count FROM notification WHERE user = '$user' AND is_read = 0";
            $unread_count_result = mysqli_query($db, $sql_unread);
            $unread_count = mysqli_fetch_assoc($unread_count_result)['unread_count'];
        ?>
            <ul class="user_list">
                <a href="../users/notification.php"><i class='bx bx-bell'></i>
                    <span id="count_notifi"
                        class="count <?php echo $unread_count > 0 ? 'show' : ''; ?>"><?php echo $unread_count; ?></span>
                </a>
                <li id="user_icon"><a href="../pages/user_account.php"><i class='bx bx-user'></i></a></li>
            </ul>
        <?php } else {
        ?>
            <!-- <a href="../users/login.php" id="sign_btn">SIGN IN</a> -->
        <?php } ?>

    </nav>

    <div class="welcome">
        <h2>
            <p>"<strong>Greetings from CampusCorner</strong>, where we believe every student deserves a platform for connection and growth, bridging the gap between students and vital resources"</p>
        </h2>
    </div>

    <div class="about-cont">
        <img src="../admin/assets/about.webp" alt="">

        <p id="about-us-p">About Us</p>
    </div>
    <div class="container">
        <div class="right">
            <div class="vision">
                <h3>Vision</h3>
            </div>
            <div class="-main-line-">
                <p>We envision a vibrant campus community where every student feels connected, informed, and inspired to reach their full potential.
            </div>
            <span>"Our vision is to revolutionize the process of obtaining bonafide certificates by providing a seamless and efficient service that prioritizes our clients' time and resources. We aim to create an experience where the issuance of bonafide certificates is not only expedited but also requires minimal effort and financial investment from our clients. By streamlining this process, we aspire to empower individuals to focus on their core priorities, confident in the knowledge that we are managing the necessary arrangements with utmost professionalism and care. Our commitment is to enhance accessibility and convenience, ensuring that obtaining a bonafide certificate is a hassle-free experience for everyone."</span>
            </p>
        </div>


        <div class="left">
            <div class="mission">
                <h3>Mission</h3>
            </div>
            <div class="-main-line--">
                <p>Through a commitment to innovation and collaboration, we are devoted to enhancing our institute as a more interconnected and supportive environment for all students.</p>
            </div>
            <div class="m-content">
                <span class="m-span">1. Our objective is to significantly alleviate the burden on students in obtaining bonafide certificates while simultaneously optimizing cost efficiency to the greatest extent possible</span>
                <span class="m-span">2. Our objective is to significantly alleviate the burden on students in obtaining bonafide certificates whi</span>
                <span class="m-span">3. Our objective is to significantly alleviate the burden on students in obtaining bonafide certificates while simultaneously optimizing cost efficiency to the greatest extent possible</span>
                <span class="m-span">4. Our objective is to significantly alleviate the burden on students in obtaining bonafide certificates while simultaneously optimizing cost efficiency to the greatest extent possible</span>
                <span class="m-span">5. Our objective is to significantly alleviate the burden on students in obtaining bonafide certificates while simultaneously optimizing cost efficiency to the greatest extent possible</span>
            </div>
        </div>
    </div>

    <!-- <p>The Journey Starts Here.</p> -->

    <div class="large-text">
        <h4>Our Mission</h4>
        <div class="paragraph-container">
            <div class="paragraph active">"Your Journey Starts Here – Hassle-Free Bonafide Solutions!"</div>
            <div class="paragraph">"Less Paperwork, More Travel – Get Certified Instantly!"</div>
            <div class="paragraph">"One Click Away from Simplifying Your Commute!"</div>
            <div class="paragraph">College Life Made Easier – Your Bonafide Certificate Awaits!</div>
            <div class="paragraph">"Where Convenience Meets Your Travel Needs – Apply Now!"</div>
            <div class="paragraph">"From Campus to Commute – Get Your Bonafide in No Time!"</div>
            <div class="paragraph">"Your Ticket to Smooth Travel Begins with Us!"</div>
            <div class="paragraph">"Say Goodbye to Stress, and Hello to Easy Travel Pass Applications!"
            </div>
            <div class="paragraph">"Travel Smarter, Not Harder – Bonafide Certificates Made Simple!"</div>
            <div class="paragraph">"Empowering Students, One Certificate at a Time!"</div>
        </div>
    </div>

</body>

<script>
    const paragraphs = document.querySelectorAll('.paragraph');
    let currentIndex = 0;

    function showNextParagraph() {
        paragraphs[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % paragraphs.length;
        paragraphs[currentIndex].classList.add('active');
    }

    // Change paragraph every 3 seconds
    setInterval(showNextParagraph, 3200);
</script>

</html>