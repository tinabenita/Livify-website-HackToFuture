<?php 
  session_start();
  
?>
<?php include 'dbcon.php'?>
<?php
  if(isset($_SESSION['usernameU']) && isset($_SESSION['passwordU'])){
      $username=$_SESSION['usernameU'];
      $password=$_SESSION['passwordU'];
  }else{
    $username=$_POST['username'];
    $password=$_POST['password'];
  }
    $stmt=$con->prepare("SELECT * FROM USERS WHERE USERNAME=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows===1){
      $data=$stmt_result->fetch_assoc();
      if($data['PASSWORD']===$password){
        $_SESSION['usernameU']=$username;
        $_SESSION['passwordU']=$password;
        $_SESSION['usrid']=$data['USER_ID'];
                        

      }else{
        header("Location: usrlogin.php?error=Inavlid username or password");
     echo "<h2>Inavlid username or password</h2>";

     exit();

      }
      
    }
    else{
     header("Location: usrlogin.php?error=Inavlid username or password");
     echo "<h2>Inavlid username or password</h2>";

     exit();

    }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="usrdash.css">
  </head>
  <body>
    <div class="container">
      <h1>What are you in the mood for today?</h1>
      <ul>
        <li><a href="../musicCode/1.php" target="_blank">Music</a></li>
        <li><a href="../videoCode/video.php" target="_blank">Videos</a></li>
        <li><a href="../Games/games.php" target="_blank">Games</a></li>
        <li><a href="../Articlecode/article.php" target="_blank">Articles</a></li>

      </ul>     
      <div class="logout"><a href="logout.php">Logout</a></div>   
      

    </div>
    
  </body>
</html>
