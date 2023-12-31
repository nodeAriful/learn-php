<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>

</head>
<body>
    <?php
        // Define variables and set to empty values;
        $name = $email = $gender = $comment = $website = "";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = testInput($_POST["name"]);
            $email = testInput($_POST["email"]);
            $website = testInput($_POST["website"]);
            $comment = testInput($_POST["comment"]);
            $gender = testInput($_POST["gender"]);
        }

        function testInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>PHP Form Validation Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="email" name="email"> <br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <br> <textarea name="comment" id="" cols="40" rows="10"></textarea> <br><br>
        Gender: 
        <input type="radio" name="gender" value="female">Female 
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other"> Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
        echo "<h2>Your Input:</h2>";
        echo $name ? "Your name is  $name": ""; echo"<br>";
        echo $email ?"Your email is $email ": ""; echo"<br>";
        echo $website ?"Your website address is $website": ""; echo"<br>";
        echo $comment ?"Your Opinion is: $comment":""; echo"<br>";
        echo $gender ?"Your are $gender": ""; echo"<br>";

    ?>
</body>
</html>