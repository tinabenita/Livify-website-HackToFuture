<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Sign Up Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" /> 
</head>
<body>
    <div class="container">
        <h1 class="form-title">SIGN UP FORM</h1>
        <form action="signupproc.php" method='post'>
        <?php if (isset($_GET['err'])) { ?>
     		<p class="error"><?php echo $_GET['err']; ?></p>
     	<?php } ?>    
         <div class="main-user-info">
            <div class="user-input-box">
                <label for="fname">First Name</label>
                <input type="text"
                        id="fname"
                        name="fname"
                        placeholder="Enter First Name" required />
            </div> 
        </div>
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="lname">Last Name</label>
                <input type="text"
                        id="lname"
                        name="lname"
                        placeholder="Enter Last Name" required />
            </div> 
        </div>
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="gender">Gender</label>
                <input type="text"
                        id="gender"
                        name="gender"
                        placeholder="Enter Gender" required />
            </div> 
        </div>
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="age">Age</label>
                <input type="text"
                        id="age"
                        name="age"
                        placeholder="Enter Age" required />
            </div> 
        </div>
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="email">Email</label>
                <input type="text"
                        id="email"
                        name="email"
                        placeholder="Enter Email" required />
            </div> 
        </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="username">Username</label>
                        <input type="text"
                                id="username"
                                name="username"
                                placeholder="Enter Full Username" required />
                    </div> 
                </div>
                
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="password">Password</label>
                        <input type="password"
                                id="password"
                                name="password"
                                placeholder="Enter Password" required/>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password"
                                id="confirmPassword"
                                name="cnfpassword"
                                placeholder="Confirm Password" required/>
                </div>
            </div>
         
            <div class="form-submit-btn">
                <input type="submit" value="Register">
               
            </div>
                      
        </form>
        
    </div>
  
</body>
</html>