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
    <title>Login</title>
</head>
<body>
    <?php
        include 'connect.php';

        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $emailq = "select * from accounts where email='$email'";
            $query = mysqli_query($conn, $emailq);

            $email_count = mysqli_num_rows($query);
            if($email_count>0){
                $pass_query = mysqli_fetch_assoc($query);
                $hash = $pass_query['password'];

                $_SESSION['username'] = $pass_query['username'];
                $_SESSION['email'] = $email;
                $pass_verify = password_verify($password, $hash);

                if($pass_verify){
                    ?>
                        <script>
                            location.replace("index.php");
                        </script>
                    <?php
                }else{
                    echo "Password Incorrect !!!";
                }
            }
            else{
                echo "Invalid Email !!!";
            }
        }
        mysqli_close($conn);
    ?>

    <div class="form-container small">
        <div class="heading">
            <h1>Login Here</h1>       
        </div>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Submit</button>
        </form>

        <h3>Don't have an Account? <a href="register.php">Register Here</a></h3>
    </div>

</body>
</html>