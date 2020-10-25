<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //create database connection
    $con = mysqli_connect($server, $username, $password);

    //check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());  
    }
    // echo "Success connecting to the db";

    //collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `gender`, `email`, `phone`, `desc`, `date`) 
    VALUES ('$name ', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    //object operator (->)
    //execute the query
    if($con->query($sql)==true){
        // echo "Successfully inserted";
        //flag for successful insertion
        $insert = true;
    }else{
        echo "ERROR: $sql <br> $con->error";
    }

    //close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
     

</head>
<body>
    <img class="bg" src="islington.jpg" alt="Islington College">
    <div class="container">
        <h3>Welcome to Islington Tour Trip</h3>
        <p>
            Please enter your details and submit this form to confirm your participation in the trip.
        </p>
        <?php
        if($insert == true){
        echo "<p class='submitmsg'>Thanks for submitting your form. We are happy to see you joining to Thailand Trip.</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="gender" id="gender" placeholder="gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your feedback here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src = "index.js"></script>
    
</body>
</html>