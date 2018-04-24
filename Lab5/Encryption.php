<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './main.php';
        $action = filter_input(INPUT_POST, 'action');

        if ($action === 'Submit2') {
            $password = $_POST['password'];
            $hashed_password = sha1($password);
            echo $password . '<br />' . $hashed_password;

            if ($hashed_password != $password) {
                echo '<br /><b>Error:</b> Username or Password was incorrect';
            }
        }
        
        ?>
    </body>
</html>