<?php include('menu.php'); ?>


        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1 class="text-center">Manage Users</h1>

                <br />

                <?php 
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['pwd-not-match']))
                    {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                    }

                    if(isset($_SESSION['change-pwd']))
                    {
                        echo $_SESSION['change-pwd'];
                        unset($_SESSION['change-pwd']);
                    }

                ?>
                <br><br>
                <br /><br />

                <table class="tbl-full table table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Sex</th>
                        <th>Birthday</th>
                        <th>Job</th>
                        <th>Email</th>
                        <th>Phonenumber</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>

                    
                    <?php 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM tbl_profile";
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database
                            //CHeck the num of rows
                            if($count>0)
                            {
                                //WE HAve data in database
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual DAta
                                    $id=$rows['pro_id'];
                                    $full_name=$rows['fullname'];
                                    $sex=$rows['sex'];
                                    $birthday=$rows['birthday'];
                                    $job=$rows['job'];
                                    $email=$rows['email'];
                                    $phone_number=$rows['phonenumber'];
                                    $address=$rows['address'];
                                    $user_id=$rows['user_id'];

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $sex; ?></td>
                                        <td><?php echo $birthday; ?></td>
                                        <td><?php echo $job; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $phone_number ?></td>
                                        <td><?php echo $address ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/up-password-user.php?id=<?php echo $user_id; ?>" class="btn-primary">Change Password</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $user_id; ?>" class="btn-danger">Delete user</a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //We Do not Have Data in Database
                            }
                        }

                    ?>

                        
                    
                </table>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

<?php include('footer.php'); ?>