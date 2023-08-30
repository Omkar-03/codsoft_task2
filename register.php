<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'css/styles.php' ?>
    <title>Registration</title>
</head>
<body>
    <?php
        include 'connect.php';

        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

            $pass = password_hash($password, PASSWORD_BCRYPT);
            $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

            $emailq = "select * from accounts where email='$email'";
            $query = mysqli_query($conn, $emailq);

            $email_count = mysqli_num_rows($query);
            if($email_count>0)
            {
                echo "Email already exists !!!";
            }else{
                if($password === $cpassword)
                {
                    $insert = "insert into accounts (`username`, `email`, `password`, `cpassword`) 
                    values('$username', '$email', '$pass', '$cpass')";
                    $insert_query = mysqli_query($conn, $insert);

                    if($insert_query){
                        ?>
                        <script>
                            alert("Successfully inserted data !!!");
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("Failure in inserting data !!!");
                        </script>
                        <?php
                    }
                }else{
                    echo"Password do not match !!!";
                }
            }
        }
        mysqli_close($conn);
    ?>

    <div class="form-container">
        <div class="heading">
            <h1>Create Account</h1>       
        </div>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" required>
            <button type="submit" name="submit">Submit</button>
        </form>

        <h3>Already have an account? <a href="login.php">Login Here</a></h3>
    </div>

</body>
</html>