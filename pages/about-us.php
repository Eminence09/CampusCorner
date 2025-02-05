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
    <div class="banner">
        <div class="aboutus">About Us</div>
        <img src="../admin/assets/about.webp" alt="">
    </div>

    <h1>About Us</p>
</body>


</html>