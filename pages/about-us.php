<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CampusCorner </title>
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- <link rel="stylesheet" href="../css/index_media.css"> -->
    <link rel="stylesheet" href="../pages/about-us.css">
    <link rel="stylesheet" href="../css/style_media.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
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
            <li><a href="#">Documentation</a></li>
            <li><a href="../admin/PrivacyPolicy/termsofservice.php">Terms of Services</a></li>
            <li><a href="../admin/PrivacyPolicy/privacy.php">Privacy Policy</a></li>
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

    <div class="our-team">
        <div class="o-t">Our Team</div>
        <p id="small-statement">long statent</p>
        <div class="team-card">
            <div class="Review-inst base-card">

                <span class="info hover-text uni">Reviewing Instructor</span>
                <span class="info hover-text uniq">Lecturer at Information Technology Department</span>
            </div>
            <p class="name" id="r-amisha">Honored Amisha D. Patel</p>
            <div class="Project-Lead base-card">
                <span class="info hover-text uni">Project Lead</span>
                <span class="info hover-text uniq">Student at Information Technology</span>
            </div>
            <p class="name" id="yash">Yash Banait</p>

            <div class="Technical-Lead base-card">
                <span class="info hover-text uni">Technical Lead</span>
                <span class="info hover-text uniq">Student at Information Technology</span>

            </div>
            <p class="name" id="ritesh"> Ritesh Thakare</p>



        </div>





    </div>

    <footer>
        <hr>
        <div class="sub-content">
            <ul>
                <div class="footer-stuffs">
                    <div class="footer-content">
                        <li class="sb-1 sb"><a href="../pages/index.php">Let's Go</a></li>
                        <li class="sb"><a href="../pages/contact-us.php">Contact Us</a></li>
                        <li class="sb" id="cc"><a href="../pages/index.php">CampusCorner.com</a></li>
                    </div>
                    <div class="2025">
                        <li id="sb4">2025 CampusCorner Ritesh & Yash GPV.</li>
                    </div>
                </div>
            </ul>
        </div>


        <div class="text-container">
            <p id="text">The journey starts here.</p>
        </div>
    </footer>
</body>



</html>