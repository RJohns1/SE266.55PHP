<?php
include './dbconnect.php';
include './function.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Database Test</title>
    </head>
    <body>
<?php if (isset($_SERVER['SERVER_NAME'])) echo $_SERVER['SERVER_NAME']; ?>
        <form action="#" method="post">
            <input type="submit" class="btn btn-info" value="Check Database Connection" name="checkConnection">
        </form>
<?php
if (isPostRequest()) {
    $db = getDatabase();

    if (is_object($db)) {
        ?>
        <div class="alert alert-success">
                Success
        </div>
                <?php } else {
                ?>
        <div class="alert alert-danger">
                Warning
        </div>
                <?php
            }
        }
        ?>
    </body>
</html>
