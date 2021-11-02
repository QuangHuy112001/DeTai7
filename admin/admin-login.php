<?php include('constants.php'); ?>
<html>
    <head>
        <link rel="stylesheet" href="admin1.css">
        <title>Form-Login</title>
    </head>
    <body>
        <div class="container">
            <form class="form-login">
                <h1>Login admin</h1>
                <br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }

                    if(isset($_SESSION['no-login-message']))
                    {
                        echo $_SESSION['no-login-message'];
                        unset($_SESSION['no-login-message']);
                    }
                ?>
                <form action="" method="POST">
                    <div class="form-text">
                        <label>Username</label>
                        <input type="text" name="username">
                    </div>

                    <div class="form-text">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn">
                </form>

            </form>
        </div>

        <script>
            const formLogin = document.querySelectorAll('.form-text input')
            const formLabel = document.querySelectorAll('.form-text label')
            for(let i=0;i<2;i++){
                formLogin[i].addEventListener("mouseover",function(){
                    formLabel[i].classList.add("focus")
                })
                formLogin[i].addEventListener("mouseout",function(){
                    formLabel[i].classList.remove("focus")
                })
            }
        </script>
        
    </body>
</html>
<?php 
    //include('constants.php');
    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        include('constants.php');
        // Process for Login
        // 1. Get the Data from Login form
        $username =mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        $password = mysqli_real_escape_string($conn, $raw_password);
        // require'constants.php';
        // $name=$_POST['username'];
        // $raw_password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        // $pass=$raw_password;

        // 2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE admin_username='$username' AND admin_password='$password'";
        //3. Execute the Query
        $res = mysqli_query($conn, $sql);
        // $result = $conn-> query($sql)
        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);
        // $sql = "SELECT * FROM tbl_admin WHERE admin_username='$username' AND admin_password='$password'";
        // $result = $conn-> query($sql)

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it
            
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/admin-login.php');
        }

        // if($result->num_rows >0){
        //     while($row = $result->fetch_assoc())
        //     {
        //         $_SESSION['username'] = $name;
        //         $_SESSION['password'] = $pass; 
        //         header('location:'.SITEURL.'admin/')/TO check whether the user is logged in or not and logout will unset it
        //         $row=$result->fetch_assoc();
        //     }
        // }else{
        //     echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaa'
        // }
    }
?>
