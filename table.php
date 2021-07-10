<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        body{ font: 14px sans-serif; text-align: center; }

         .bodyw{
         background-color: silver;
                         background-image: url('aa.jpg');
                          background-repeat: no-repeat;
                          background-attachment: fixed;
                        background-size: cover;
                         padding:30px;
                         height: 600px;
                         width: 1155px;
                         margin-left: auto;
                         margin-right: auto;
                         
                      }

                       #body{background: silver;
      width:700px;
      margin: auto;
      display: block;
      margin-top: 20px;

            
        }

    </style>
</head>
<body>

    
                     <div class="menu">
                  <ul>
                    <li><a href="index.html" class="active">HOME</a></li>
                    <li><a href="about.php" class="active">ABOUT</a></li>
                    <li><a href="register.php" class="active">REGISTER</a></li>
                    <li><a href="login.php" class="active">COURSE</a></li>
                    <li><a href="cv.php" class="active">CV</a></li>
                    <li><a href="contact.html" class="active">CONTACTS</a></li>
                  </ul>
                </div>

                <br><br>
                    <div class="bodyw">
                        
                        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
                    <p>
                        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>


                    </p><br>
                    
<?php 
    require_once("config.php");
    $registration = $link->query("SELECT * FROM course") or die($link->error);

    ?>
                <div id = "body" >
                <table border="1"  id ="tb">
                    <tr><th> ID</th><th>USERNAME</th><th>COURSENAME</th><th>COURSELECTURER</th><th>COURSEGRADE</th><th>EDIT</th><th>DELETE</th></tr>

                <?php 
                while($link = mysqli_fetch_array($registration)){
                
                ?>
                <tr >
                <td ><?php echo $link["id"] ?></td>
                <td><?php echo $link["username"] ?></td>
                <td><?php echo $link["coursename"] ?></td>
                <td><?php echo $link["courselecturer"] ?></td>
                <td><?php echo $link["coursegrade"] ?></td>
               
                <td><a href="#">edit</a></td>
                <td><a href="#">delete</a></td>
                </tr>

                <?php 
                    }
                 ?>

                 </table>   
                </div>
                 </div>


                        </div><br>
                    

                      
    

    <div class="footer">
               </div>
</body>
</html>

                      

