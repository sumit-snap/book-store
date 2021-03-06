<?php
    include("server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <?php
        include("header.php");
        ?>
    </header>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">Register</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>My Account / REgister</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
            <div class="form">
                <form action="register.php" method="post">
                    <?php 
                        include("errors.php");
                    ?>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter User Name" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-3">
                            <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-3">
                            <input type="password" placeholder="Password" name="pass_1" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-3">
                            <input type="password" placeholder="Repeat Password" name="pass_2" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <button class="btn black" type="submit" name="register">Register</button>
                            <h5>not Registered? <a href="login.php">Login here</a></h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
       <?php
        include("footer.php");
        ?>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>