
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Account Login</title>
    <link href="../cssJs/login.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../pic/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../pic/favicon-32x32.png">
    <link rel="manifest" href="pic/site.webmanifest">
    <meta property="og:image" content="//image.prntscr.com/image/93970e70e1f045e1aff76e05469008d8.png" />
    <meta property="og:image:secure_url" content="//image.prntscr.com/image/93970e70e1f045e1aff76e05469008d8.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
            <img src="../pic/P19.jpg" alt="">
            <div class="text">
                <span class="text-1">Every new friend is a <br> new adventure</span>
                <span class="text-2">Let's get connected</span>
            </div>
        </div>

        <div class="back">
            <img src="../pic/P16.jpg" alt="">
            <div class="text">
                <span class="text-1">Complete miles of journey <br> with one step</span>
                <span class="text-2">Let's get started</span>
            </div>
        </div>
    </div>

    <div class="forms">
        <div id="login" class="form-content">
            <div class="login-form">
                <div class="title">Login</div>
               <!-- Login Form -->
                        <form action="../php/login.php" method="post">
                            <?php if(isset($_GET['error'])){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_GET['error']; ?>
                                </div>
                            <?php } ?>
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="uname" placeholder="Enter Username" value="<?php echo(isset($_GET['uname'])) ? $_GET['uname'] : "" ?>" required>
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="pass" placeholder="Enter Password" required>
                                </div>
                                <div class="text"><a href="#">Forgot password?</a></div>
                                <div class="button input-box">
                                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                                </div>
                                <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                            </div>
                        </form>

            </div>

            <div class="signup-form">
                <div class="title">Signup</div>
                <form action="../php/signup.php" 
    	      method="post"
    	      enctype="multipart/form-data">
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" 
		           class="form-control"
		           name="fname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>" placeholder="Enter Full Name">
		          </div>

                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>" placeholder="Enter Username">
		       </div>

                        
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" 
		           class="form-control"
		           name="pass" placeholder="Enter Password">                        </div>

                        <div class="button input-box">
                            <input type="submit" name="register" value="Register">
                        </div>
                        <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>