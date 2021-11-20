<?php include 'partials/dbconnect.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>List-donors</title>
</head>

<body>
    <h1 class="text-center my-2">List of Donors</h1>
    <div class="container my-4">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Mother Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Blood</th>
                    <th scope="col">Pin</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     $sql = "SELECT *FROM `donors`";
                     $result = mysqli_query($conn,$sql);
                     $sn = 1;
                     while($row = mysqli_fetch_assoc($result)){

                       echo '<tr>
                       <th scope="row">'.$sn.'</th>
                       <td>'.$row['name'].'</td>
                       <td>'.$row['fname'].'</td>
                       <td>'.$row['mname'].'</td>
                       <td>'.$row['gender'].'</td>
                       <td>'.$row['dob'].'</td>
                       <td>'.$row['email'].'</td>
                       <td>'.$row['contact'].'</td>
                       <td>'.$row['bloodgroup'].'</td>
                       <td>'.$row['pin'].'</td>
                       <td>'.$row['address'].'</td>
                     </tr>';
                     $sn++;
                     }
                    ?>

            </tbody>
        </table>
        <button onclick="window.print()" type="button" class="btn btn-primary mt-4">Print List</button>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>