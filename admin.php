<?php include 'partials/dbconnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-pannel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container-3 {
            background-color: #f9f4f4;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-3 form {
            width: 350px;
            height: 200px;
            background-color: white;
            padding: 20px 0px;
            box-shadow: 4px 4px 2px #d4d4d4;
        }

        .container-3 form input {
            height: 30px;
            font-size: 20px;
            padding: 4px 0px;
            margin-bottom: 9px;
            margin-top: 3px;
            outline: none;
            width: 94%;
        }

        #sbmt {
            color: white;
            background-color: green;
            border: none;
            outline: none;
            height: 45px;
            letter-spacing: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){
         $username = $_POST['username'];
         $passwd = $_POST['passwd'];
         if(empty($username) && empty($passwd)){
             echo "";
         }
         else{
             if($username == "admin" && $passwd == "admin"){
                 header("location:listofdonor.php");
                 exit;
             }
             else{
                 echo 'Invalid Credientals';
             }
         }
     }
    ?>
    <div class="container-3">
        <form action="admin.php" method="post">
            <label for="username">User Name</label>
            <input type="text" name="username" id="username" required>
            <label for="passwd">Password</label>
            <input type="password" name="passwd" id="passwd" required>
            <input id="sbmt" type="submit" value="Log In">
        </form>
    </div>
</body>

</html>