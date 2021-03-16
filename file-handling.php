<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File-Handling</title>
</head>
<body >

  
    <?php
        
        $firstNameErr = $lastNameErr = $emailErr = $genderErr = $userNameErr = $passwordErr = $recoveryEmailErr = "";
        $firstName = $lastName = $email = $gender = $userName = $password = $recoveryEmail = "";

        if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {
            if(empty($_POST['fname'])) 
            {
                $firstNameErr = " Fill Up the First Name";
            }
            else
            {
                $firstName = $_POST['fname'];
            }

            if(empty($_POST['lname'])) 
            {
                $lastNameErr = " Fill Up the Last Name";
            }
            else
            {
                $lastName = $_POST['lname'];
            }

            if(empty($_POST['email'])) 
            {
                $emailErr = " Fill Up the Email";
            }
            else
            {
                $email = $_POST['email'];
            }

            if(isset($_POST['gender']))
            {
                $gender = $_POST['gender'];
                
                if ($gender == "Male")
                {
                    $gender = "Male";
                }
                else
                {
                    $gender = "Female";
                }


                
            }


            else {
                $genderErr = " Check the Gender";
            }


            if(empty($_POST['uname'])) 
            {
                $userNameErr = " Fill Up the UserName";
            }
            else
            {
                $userName = $_POST['uname'];
            }

            if(empty($_POST['password'])) 
            {
                $passwordErr = " Fill Up the Password";
            }
            else
            {
                $password = $_POST['password'];
            }

            if(empty($_POST['remail'])) 
            {
                $recoveryEmailErr = " Fill Up the Recovery Email";
            }
            else
            {
                $recoveryEmail = $_POST['remail'];
            }

            $filepath = "reg.txt";
            $f = fopen($filepath,'w');
            fwrite($f," First Name: $firstName \n Last Name: $lastName \n Email: $email \n Gender: $gender \n UserName: $userName \n Password: $password \n Recovery Email: $recoveryEmail");

        }




    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

        
             <h1>Basic Information</h1>

                   <b> <p>First Name</p>
                    <input type="text" name="fname" value="" size="30px">
                    <p><?php echo $firstNameErr; ?></p>

                   <b> <p>Last Name</p>
                    <input type="text" name="lname" value=""size="30px" >
                    <p><?php echo $lastNameErr; ?></p>

                   <b> <p>Email</p>
                    <input type="email" name="email" id="" value="" size="30px" >
                    <p><?php echo $emailErr; ?></p>
               
                   <b> <p >Gender</p>       
                       <input type="radio" name="gender" value="Male" >  Male 
                       <input type="radio" name="gender" value="Female" > Female
                       <p><?php echo $genderErr; ?></p>
                
                <h1>User Account Information</h1>
                    <b><p>UserName</p>
                    <input type="text" name="uname" value=""  size="30px">
                    <p><?php echo $userNameErr; ?></p>

                    <b><p>Password</p>
                    <input type="password" name="password" value="" size="30px">
                    <p><?php echo $passwordErr; ?></p>

                     <b><p>Recovery Email</p>
                    <input type="email" name="remail" value=""  size="30px">
                    <p><?php echo $recoveryEmailErr; ?></p>

                    <input type="submit" name="" value="Submit"> 
                    <input type="reset" name="" value="Reset">


    </form>

   
    
</body>
</html>