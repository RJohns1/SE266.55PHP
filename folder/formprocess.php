<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>My Forms</h1>
        <?php
        include './form2.php';
        $action = filter_input(INPUT_POST, 'action');

        if ($action === 'Submit2') {
            $password = $_POST['password'];
            $hashed_password = sha1($password);
            echo $password . '<br />' . $hashed_password;

            if ($hashed_password != $password) {
                echo 'no match';
            }
        }
        
        ?>
    </body>
</html>