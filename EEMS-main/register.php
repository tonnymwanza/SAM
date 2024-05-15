
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eems</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php $event_id= $_GET['event_id']; ?>    
    </head>
    <body>
    <?php require 'utils/header.php'; ?>
    <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
      <?php 
      require 'classes/db1.php';
                $query = mysqli_query($conn,"select * from events where event_id = '$event_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>

    <form method="POST">

        <input type="text" name="event_id" value="<?php echo  $row['event_id'] ; ?>" hidden>
        <label>Student reg number:</label><br>
        <input type="text" name="usn" class="form-control" required><br><br>

        <label>Student Name:</label><br>
        <input type="text" name="sname" class="form-control" required><br><br>

        <label>Branch:</label><br>
        <input type="text" name="branch" class="form-control" required><br><br>

        <label>Semester:</label><br>
        <input type="text" name="sem" class="form-control" required><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"  class="form-control" required ><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone"  class="form-control" required><br><br>

        <label>College:</label><br>
        <input type="text" name="college"  class="form-control" required><br><br>

        <button type="submit" name="update" required>Submit</button><br><br>
        <a href="usn.php" ><u>Already registered ?</u></a>

    </div>
    </div>
    </div>
    </form>
    

    <?php require 'utils/footer.php'; ?>
    </body>
</html>

<?php

    if (isset($_POST["update"]))
    {
        $usn=$_POST["usn"];
        $sname=$_POST["sname"];
        $branch=$_POST["branch"];
        $sem=$_POST["sem"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $college=$_POST["college"];
        $event_id=$_POST["event_id"];
       


    if( !empty($usn) || !empty($sname) || !empty($branch) || !empty($sem) || !empty($email) || !empty($phone) || !empty($college) || !empty($event_id) )
        {
        
            include 'classes/db1.php';     
                $INSERT="INSERT INTO participent (usn,sname,branch,sem,email,phone,college) VALUES('$usn','$sname','$branch','$sem','$email','$phone','$college')";
                $INSERT="INSERT INTO registered (usn,event_id) VALUES('$usn','$event_id')";

               
                if($conn->query($INSERT)===True){
                  
                    echo "<script>
                    alert('Registered Successfully!');
                    window.location.href='usn.php';
                    </script>";
                    
                }
                else
                {
                    echo"<script>
                    alert(' Already registered this usn');
                    window.location.href='usn.php';
                    </script>";
                }
               
                $conn->close();
            
        }
        else
        {
            echo"<script>
            alert('All fields are required');
            window.location.href='register.php';
                    </script>";
        }
    }
    
?>