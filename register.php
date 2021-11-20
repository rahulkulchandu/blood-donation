<?php include 'partials/dbconnect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Registration form</title>
    <link rel="stylesheet" href="css/registration.css">
</head>

<body>
    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
         $name = $_POST['name'];
         $fname = $_POST['fname'];
         $mname = $_POST['mname'];
         $gender = $_POST['gender'];
         $dob = $_POST['dob'];
         $email = $_POST['email'];
         $contact = $_POST['contact'];
         $gp = $_POST['gp'];
         $pincode = $_POST['pincode'];
         $addrss = $_POST['addrss'];
         if(empty($name) && empty($fname) && empty($mname) && empty($gender) && empty($dob) && empty($email) && empty($contact) && empty($gp) && empty($pincode) && empty($addrss)){
             echo "";
         }
         else{
             $sql = "INSERT INTO `donors` (`name`, `fname`, `mname`, `gender`, `dob`, `email`, `contact`, `bloodgroup`, `pin`, `address`) VALUES ('$name', '$fname', '$mname', '$gender', '$dob', '$email', '$contact', '$gp', '$pincode', '$addrss')";
             $result = mysqli_query($conn,$sql);
             if($result){
                 $id = "You are Successfull Registered!";
                 header("location:index.php?inf=$id");
             }
            }
      }
    ?>
    <div class="second-container">
        <h1 class="donr">Donor-Registration</h1>
        <form class="frm" action="register.php" method="post">
            <label for="name">Donar Name</label>
            <input type="text" name="name" id="name" required>
            <label for="fname">Donar Father Name</label>
            <input type="text" name="fname" id="fname" required>
            <label for="mname">Donar Mother Name</label>
            <input type="text" name="mname" id="mname" required>
            <label for="gender">Gender</label>
            <select name="gender" id="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <label for="dob">Date Of Birth</label>
            <input type="date" name="dob" id="dob" required>
            <label for="email">Donor Email</label>
            <input type="email" name="email" id="email" required>
            <label for="contact">Contact Number</label>
            <input type="number" name="contact" id="contact" maxlength="12" required>
            <label for="gp">Blood Group</label>
            <select name="gp" id="gp" required>
                <option value="AB">AB</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="O">O</option>
                <option value="O-">O-</option>
            </select>
            <label for="pincode">Pin Code</label>
            <input type="number" name="pincode" id="pincode" required>
            <label for="addrss">Address</label>
            <textarea name="addrss" id="addrss" cols="30" rows="4" placeholder="#House No./City/Area"
                required></textarea>
            <input id="sbmt" type="submit" value="Submit">
        </form>
    </div>
</body>

</html>