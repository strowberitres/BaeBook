<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "../connection.php";
include 'User.php';
$user = getUserById($_SESSION['id'], $conn);


 ?>


<html>
<head>
    <title>Profile</title>
    <link href="../cssJs/profile.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/genty-demo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="180x180" href="../pic/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../pic/favicon-32x32.png">
</head>
<body>
<header class="header">
        <nav class="navi"> 
            <a href="main.php" class="navi_logo">
                <span class="logox">BaeBook</span>
            </a>

            <ul class="navi_items">
            <li class="navi_item">
                <a href="main.php" class="navi_link"><-</a>
               
                <div class="profile"><a href="profile.php"><img src="../pic/Profile.png" alt=""></a></div>
                
                
              </li>
        </ul>
                
            

        </nav>
    </header>
    <?php if ($user) { ?>
    <div class="side_wrapper">
        <section class="about-dev">
            <!-- Your existing HTML content with the fetched data -->
            <header class="profile-card_header">
                <div class="profile-card_header-container">
                    <div class="profile-card_header-imgbox">
                    <img src="../pic/<?=$user['pp']?>" class="img-fluid rounded-circle">

                </div>
                <h1 class="display-4 "><?=$user['fname']?></h1>                    </div>

            </header>

            <div class="profile-card_about">
                <h2>Info</h2>
                <p>Cute</p>
                

                <?php }else { 
     header("Location: loginsignup.php");
     exit;
    } ?>
                <footer class="profile-card_footer">
    <div class="social-row">
        <div class="heart-icon" title="No Health Issues">
            <?xml version="1.0" encoding="utf-8"?>
        </div>
    </div>

    <p>
        <a href="edit.php" class="btn btn-primary back-to-profile">
            Edit Profile
        </a>
    </p>
    <script>
    function confirmAndDelete() {
    var result = confirm("Are you sure you want to delete your profile?");
    if (result) {
        // Extract the username from your user object or wherever it's stored
        var username = "<?=$user['username']?>";
        console.log(username); // Add this line for debugging
        window.location.href = "../php/delete.php?uname=" + username;
    }
}
</script>

<p>
    <button onclick="confirmAndDelete()" class="btn btn-primary back-to-profile">
        Delete
    </button>
</p>


</footer>
            </div>
        </section>
    </div>

</body>
</html>
<?php }else {
	header("Location: loginsignup.php");
	exit;
} ?>