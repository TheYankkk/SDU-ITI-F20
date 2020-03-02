<!DOCTYPE html>
<?php
    require_once 'db_config.php';
    echo "<br><a href='logout.php'><input type=button value=Logout name=logout></a>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styling.css">
    <title>Registration</title>
</head>
<body>

        <div class="content" id="registration">
        <script src="./javascript/Menu.js"></script>
            <h1>Registration</h1>
                <form onKeyUp="return checkFields()" method="POST" action=>
                    <fieldset>            
                        <legend>Registration for system:</legend>   
                        <label for = "username">Username: </label>
                        <p id="usernameStatus"> </p>
                        <br>
                        <input type="text" name="username" id="username" placeholder="Write username here" autofocus required>
                        <br>
                        <label for = "password">Password: </label>
                        <br>
                        <p id="passwordStatus"> </p>
                        <input type="password" name="password" id="password" placeholder="Write password here" required >
                        <br>
                        <label for = "password2">Retype password: </label>
                        <br>
                        <p id="password2Status"> </p>
                        <input type="password" name="password2" id="password2" placeholder="Write password again" required >
                        <br>
                        <input type="Submit" name="submit" value="Register" id="submit" >
                    </fieldset> 
                </form>
            <p>If you are having trouble registering, please contact support.</p>
            <br>
        </div>

    <?php
        if(array_key_exists('submit', $_POST)) {
            try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
            $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES(:username, :password)");
            
            $tempUser = addslashes($_POST['username']);
            $stmt->bindParam(':username', $tempUser, PDO::PARAM_STR);

            $tempPassword = addslashes(password_hash($_POST['password'], PASSWORD_DEFAULT));
            $stmt->bindParam(':password', $tempPassword, PDO::PARAM_STR);

            $stmt->execute(); 
            $stmt->setFetchMode(PDO::FETCH_ASSOC); 

            } 
            catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        $conn = null;
        }
    ?>
    <script src="regExRegistration.js"></script>
    </body>
</html>

