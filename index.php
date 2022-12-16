<?php

//session_start();
//include("connection.php");





?>


<!----------DITO KA MAGDEDESIGN NG LOGIN FORM BB ---------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script> src="/javascript/index.js"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="" method="post">

          
                <h1>Welcome to ProClimatePH</h1>
                <?php if(isset($_GET['error'])) {?>
                    <p class="error"><?php echo $_GET['error']; ?></p>

                 


                <?php } ?>
              
                <!----- PHP CODE hERE ------>
                <span>Welcome Agent!</span>
                <input type="email" name="uname" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>
                <a href="#">Forgot your password?</a>
                <button type="submit" id ="Submit" name="submit" >Login </button>
            </form>

    
        </div>
        <div class="overlay-container">
            <div class="overlay">
               
                <div class="overlay-panel overlay-right">
                    <div class="bgimg">	</div>
    
                    
                </div>
            </div>
        </div>
    </div>
    


</body>
</html>