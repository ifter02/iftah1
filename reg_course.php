
      <?php

$servername='localhost';
$username='root';
$password='';
$dbname = "ifter";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if($conn===false){
   die('Could not Connect My Sql:' .mysqli_connect_error());
}


if(isset($_POST['submit']))
{    
      $username = $_POST['username'];
      

        $coursename = $_POST['coursename'];
        $courselecturer = $_POST['courselecturer'];
        $coursegrade = $_POST['coursegrade'];
        
       
         $sql = "INSERT INTO course (username,coursename,courselecturer,coursegrade)
     VALUES ('$username','$coursename','$courselecturer','$coursegrade')";
       
       
    

     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
     } 
     else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>  
        
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <style>
      .bodyr{
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
                      
                        body{ font: 14px sans-serif; }
                        .wrapper{ width: 300px; 
                          padding: 20px;
                           margin: auto;
                                        
                           }


    </style>

                       
</head>
<body>

           <div class="menu">
                  <ul>
                    <li><a href="index.html" class="active">HOME</a></li>
                    <li><a href="about.php" class="active">ABOUT</a></li>
                    <li><a href="register.php" class="active">REGISTER</a></li>
                    <li><a href="Login.php" class="active">COURSE</a></li>
                    <li><a href="cv.php" class="active">CV</a></li>
                    <li><a href="contact.php" class="active">CONTACTS</a></li>
                  </ul>
                </div>

                <br><br>


        <div class="bodyr">
               <div class="wrapper">
            <h2>Register Course Here</h2>
            <p>Please fill this form to create an account.</p>

            <form action="" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                   
                </div>    

                        <div class="form-group">
                            <label>Upload file</label>
                            <input type="file" name="file">
                            
                        </div>

               <div class="form-group">
                   <label>Course Name</label>
                   
                   <select name="coursename" class="form-control">
                    <option></option>
                     <option>accouting</option>
                     <option>web programming</option>
                   </select>

               </div>

                <div class="form-group">
                   <label>Course Lecturer</label>
                   
                   <select  name="courselecturer" class="form-control">
                    <option></option>
                     <option>DR MAHUNDI</option>
                     <option>DR HAPPINESS</option>
                   </select>
               </div>

                <div class="form-group">
                   <label>Course Grade</label>
                   
                   <select name="coursegrade" class="form-control">
                     <option></option>
                     <option>A</option>
                     <option>B</option>
                     <option>C</option>
                   </select>
               </div>

              <input type="submit" name="submit" class="btn btn-primary" value="Submit"><br>

              <p>Already register <a href="table.php">click here</a>.</p>

                
            </form>
        </div>    
            </div>

             <div class="footer">
               </div>
   
</body>
</html>